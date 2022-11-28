<?php
require_once("modell/auteur.model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./publicc/style.css">
</head>
<body>
    <div class="menu">
        <nav>
            <ul>
                <li><a href="index.php?view=1">auteur</a></li>
                <li><a href="index.php?view=2">exemplaire</a></li>
                <li><a href="index.php?view=3">ouvrage</a></li>
                <li><a href="index.php?view=4">demande</a></li>
            
            </ul>
        </nav>
    </div>
    
    <?php 
        if(isset($_GET["view"])){
            // $view=$_GET["view"];
           //  extract($t);
            extract($_GET);
            if($view==1){
                require_once("viewss/auteur.html.php"); 
            }elseif ($view==2){
                require_once("viewss/exemplaire.html.php");
            }elseif ($view==3){
                require_once("viewss/ouvrage.html.php");
            }elseif ($view==4){
                require_once("viewss/pret.html.php");
            
            }
        }else {
            require_once("viewss/auteur.html.php");
        };
        
    ?>
</body>
</html>