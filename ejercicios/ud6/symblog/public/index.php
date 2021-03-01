<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$dotenv = Dotenv\Dotenv::createMutable(__DIR__, "../.env");
$dotenv->load();
$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',

]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

$request = \Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

//var_dump($request->getUri()->getPath());

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map -> get('index','/symblog/',[
    'controller'=>'App\Controllers\IndexController',
    'action'=>'indexAction'
]);

$map -> get('addBlog','/symblog/blogs/add',[
    'controller'=>'App\Controllers\BlogsController',
    'action'=>'getAddBlogAction',
    'auth' => true
]);
$map -> post('saveBlog','/symblog/blogs/add',[
    'controller'=>'App\Controllers\BlogsController',
    'action'=>'getAddBlogAction'
]);

$map -> get('login','/symblog/login',[
    'controller'=>'App\Controllers\AuthController',
    'action'=>'getLogin'
]);
$map -> post('auth','/symblog/login',[
    'controller'=>'App\Controllers\AuthController',
    'action'=>'postLogin'
]);
$map -> get('admin','/symblog/admin',[
    'controller'=>'App\Controllers\AdminController',
    'action'=>'getIndex'
]);

$map ->get('addUser','/symblog/users/add',[
    'controller'=>'App\Controllers\UsersController',
    'action'=>'getAddUser',
    'auth' => true
    
]);
$map ->post('saveUser','/symblog/users/add',[
    'controller'=>'App\Controllers\UsersController',
    'action'=>'postAddUser',
    'auth' => true
    
]);

$map -> get('aboutUs','/symblog/aboutUs','../views/about.php');
$map -> get('contact','/symblog/contact','../views/contact.php');
$map -> get('show','/symblog/show','../views/show.php');
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
  /* 
if(!$route){
    echo 'No rutas';
}else{
  
   $handlerData = $route -> handler;
   $controllerName = $handlerData['controller'];
   $actionName = $handlerData['action'];

   $controller = new $controllerName;
   $response = $controller -> $actionName($request);
   echo $response->getBody();
   
}
*/

$needsAuth = $handlerData['auth']??false;
$sessionUserId = $_SESSION['userId']??null;
if($needsAuth && !$sessionUserId){
    header('Location: /symblog/login');
}else{
    $handlerData = $route -> handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];
    $controller = new $controllerName;
    $response = $controller -> $actionName($request);
    foreach($response->getHeaders() as $name=>$values){
        foreach($values as $value){
            header(sprintf('%s: %s',$name,$value),false);
        }
    }
    http_response_code($response->getStatuscode());
    echo $response->getBody();
}


/*
$route = $_GET['route'] ?? '/';

switch ($route) {
    case '/':
        require '../index.php';
        break;
    case '/addBlog':
        require '../pages/addBlog.php';
        break;
    case '/about':
        require '../pages/about.php';
        break;
    case '/contact':
        require '../pages/contact.php';
        break;
    case '/show':
        require '../pages/show.php';
        break;

    default:
        echo '<h1>Sin acceso a la aplicacion por ruta incorrecta</h1>';
        break;
        
}
*/
