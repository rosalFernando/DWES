<?php

include "class/Carro.php";
session_start();

$_SESSION["sesionIniciada"] = true;
$arrayProductos = array(
    array("nombre" => "Movil", "precio" => 5),
    array("nombre" => "Teclado", "precio" => 10),
    array("nombre" => "Raton", "precio" => 15),
    array("nombre" => "Pantalla", "precio" => 20),
);
if(!isset($_POST["btnTienda"])){
    echo "<a href=\"cerrarSesion.php\">Cerrar Sesión</a>";
    echo "<form action=\"\" method=\"post\">";
    echo "<input type=\"submit\" name=\"btnTienda\"  value=\"Tienda\" />";
    echo "</form>";
}else{
    echo "<form action=\"\" method=\"post\">";
        echo "<table border=\"1px solid black\">";
            echo "<th>Producto</th><th>Precio</th><th>Comprar</th>";
            foreach($arrayProductos as $producto){
                echo "<tr>";
                foreach($producto as $key => $value){
                    echo "<td>$value</td>";
                    if($key == "nombre"){
                        $nombre = $value;
                    }if($key == "precio"){
                        $precio = $value;
                    }
                }
                echo "<td><a href=\"index.php?page=carrito&producto=$nombre&precio=$precio\">Comprar</a></td>";
                echo "</tr>";
            }
        echo "</table>";
    echo "</form>";
}
if(isset($_GET["producto"])){
    $arrayProducto = array(
        "nombre" => $_GET["producto"],
        "precio" => $_GET["precio"]
    );
    $_SESSION["carro"]->addProducto($arrayProducto);
    echo "Has agregado al carro ".$_GET["producto"];
    echo "<form action=\"\" method=\"post\">";
    echo "<input type=\"submit\" name=\"calcularCarro\" value=\"Calcular Carro\" />";
    echo "</form>";
}
if(isset($_POST["calcularCarro"])){
    echo "Su cuenta asciende a ".$_SESSION["carro"]->calcularCarro();
    echo "<form action=\"\" method=\"post\">";
    echo "<input type=\"submit\" name=\"pagar\" value=\"Pagar\" />";
    echo "</form>";
}
if(isset($_POST["pagar"])){
    echo "<p>Pronto recibirá su pedido</p>";
    echo "<p>Para comprar de nuevo, entre en el Tienda</p>";
    unset($_SESSION["sesionIniciada"]);
}
?>