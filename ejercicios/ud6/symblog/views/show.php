<?php
var_dump($_GET{'id'});
include_once("../datos/datos.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <link href="css/screen.css" type="text/css" rel="stylesheet" />
    <link href="css/sidebar.css" type="text/css" rel="stylesheet" />
    <link href="css/blog.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Document</title>
</head>
<body>
    <section id="wrapper">
        <header id="header">
            <div class="top">
                <nav>
                    <ul class="navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="./pages/about.php">About</a></li>
                        <li><a href="./pages/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <hgroup>
                <h2><a href="index.php/">symblog</a></h2>
                <h3><a href="index.php/">creating a blog in Symfony2</a></h3>
            </hgroup>
        </header>
        <section class="main-col">
        

        </section>
        <aside class="sidebar">
            <section class="section">
                <header>
                    <h3>Tag Cloud</h3>
                </header>
                <p class="tags">
                    <span class="weight-1">magic</span>
                    <span class="weight-5">symblog</span>
                    <span class="weight-4">movie</span>
                </p>
            </section>
            <section class="section">
                <header>
                    <h3>Latest Comments</h3>
                </header>
                <?php
                for ($i = 0; $i < count($comments); $i++) {
                    var_dump($comments[$i] -> getBlog());
                    echo <<<EOT
                        <article class="comment">
                        <header>
                        <p class="small"><span class="highlight">{$comments[$i] -> getUser()}</span> commented on
                            <a href="#">{}</a>
                        </p>
                        </header>
                        <p>{$comments[$i] -> getComment()}</p>
                        </article>
                        EOT;
                }
                ?>
                

            </section>
        </aside>
        <div id="footer">
            dwes symblog - created by <a href="#">dwes</a>
        </div>
    </section>
</body>
</html>