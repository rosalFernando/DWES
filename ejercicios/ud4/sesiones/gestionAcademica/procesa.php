
    <?php


session_start();

$_SESSION['gestion'];
$aGestion = [];

$aGestion=$_SESSION['gestion'];




if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['nombre']) && isset($_POST['primer'])
    && isset($_POST['segundo']) && isset($_POST['tercer'])){
        $nombre = $_POST['nombre'];
        $primer = $_POST['primer'];
        $segundo = $_POST['segundo'];
        $tercero = $_POST['tercer'];
        $media = ($primer+$segundo+$tercero) /3;
        array_push($aGestion,$nombre,$primer,$segundo,$tercero,$media);
        $_SESSION['gestion']=$aGestion;
        header('Location: index.php');
        
      
    }
        
}
    ?>