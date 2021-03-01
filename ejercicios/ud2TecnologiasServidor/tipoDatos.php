<?php
    $nomre = "Harry";
    $num=1342345;
    $var=NULL;
    
    isset($var);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo(gettype($nomre)) . "</br>";?>
    <?php echo($nomre) . "</br>";?>
    <?php echo(var_dump($num)) . "</br>";?>
    <?php echo($var) . "</br>";?>

    
</body>
</html>