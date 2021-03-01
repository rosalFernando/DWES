<?php
    $x=10;
    $y=7;

    $suma=$x + $y;
    $resta=$x - $y;
    $mul=$x * $y;
    $division=$x / $y;
    $resto=$x % $y;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <h1>Operaciones Matematicas</h1>

<p>La suma de las variables <?php echo($x) ?> y <?php echo($y) ?> es:  <?php echo($suma);?></p>
<p>La resta de las variables <?php echo($x) ?> y <?php echo($y) ?> es:  <?php echo($resta);?></p>
<p>La multiplicacion de las variables <?php echo($x) ?> y <?php echo($y) ?> es:  <?php echo($mul);?></p>
<p>La division de las variables <?php echo($x) ?> y <?php echo($y) ?> es:  <?php echo($division);?></p>
<p>El resto de las variables <?php echo($x) ?> y <?php echo($y) ?> es:  <?php echo($resto);?></p>
    
</body>
</html>