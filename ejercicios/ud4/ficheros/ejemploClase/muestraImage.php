
<?php
   
    $dir="upload/";
    $imagenes = scandir($dir);
    

     
        for($i = 0; $i < count($imagenes); $i++)
        {
            if($imagenes[$i] !='.' && $imagenes[$i] !='..')
            {
                // show image
                echo "<img src='$dir$imagenes[$i]' style='width:100px;height:100px;'><br>";
                
            }
        }
    

   
?>

