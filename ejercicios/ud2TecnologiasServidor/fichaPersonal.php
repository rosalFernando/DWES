
<?php
    $nom="Fernando del Rosal Cuesta";
    $img="../assets/imagenes/imagen.jpg";
    $curso="DAW 2021";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal.</title>
</head>
<body>
<div>
<p><h1><?php echo $curso; ?></h1></p>
<p><h2><?php echo $nom; ?></h2></p>
<img src=<?php echo $img; ?> width="400" height="341">
</div>
    
</body>
</html>