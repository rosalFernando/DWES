<?php
namespace App\Controllers;
use App\Models\User;
use \Respect\Validation\Validator as v;
use \Laminas\Diactoros\Response\RedirectResponse;

class UsersController extends BaseController{
    public function getAddUser(){
        $users = User::all();
        return $this->renderHTML('addUser.twig',[
            'users' => $users
        ]);
    }

    public function postAddUser($request){
        $responseMessage = null;
        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $userValidator = v::key('email',v::stringType()->notEmpty())
            ->key('password',v::stringType()->notEmpty());
        }
        try {
            $userValidator->assert($postData);
            $user = new User();
            $user -> email = $postData['email'];
            $user -> password = password_hash($postData['password'],PASSWORD_DEFAULT);
            $user ->save();
        } catch (\Exception $e) {
            $responseMessage = $e -> getMessage();
        }
        return $this->renderHTML('addUser.twig',[
            'responseMessage' => $responseMessage
        ]);
    }
}

?>