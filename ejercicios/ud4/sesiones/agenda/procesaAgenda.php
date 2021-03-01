

    <?php


session_start();

$aAgenda = [];
$_SESSION['agenda']=$aAgenda;





if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['nombre']) && isset($_POST['movil'])){
        $nombre = $_POST['nombre'];
        $movil = $_POST['movil'];
        array_push($aAgenda,$nombre,$movil);
        
        header("Location: index.php");
        
      
    }
        
}
    ?>