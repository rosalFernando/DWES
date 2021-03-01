<?php
    $valor=8;
    $suma=$valor + 2;
    $resta=$suma - 4;
    $mul=$resta * 5;
    $divi=$mul / 3;
    $incremento=$divi+1;
    $decremento=$incremento-1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con una variable</title>


</head>
<body>
    <h1>Operaciones con una variable</h1>
    <p>Valor actual <?php echo($valor);?></p>
    <p>Suma 2. Valor ahora <?php echo($suma);?></p>
    <p>Resta 4. Valor ahora <?php echo($resta);?></p>
    <p>Multiplica por 5. Valor ahora <?php echo($mul);?></p>
    <p>Divide por 3. Valor ahora <?php echo($divi);?></p>
    <p>Incrementa en 1. Valor ahora <?php echo($incremento);?></p>
    <p>Decrementa en 2. Valor ahora <?php echo($decremento);?></p>

    
</body>
</html>