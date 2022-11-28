<?php
require_once("modell/auteur.model.php");
$exemplaire=find_all_exemplaire();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../publicc/style.css">
</head>
<body>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
      
                <th>CODE</th>
                <th>DATE DENREGISTREMENT</th>
                
            </tr>
            <?php foreach ($exemplaire as $value):?>
            <tr>
                    <td><?= $value['code'] ?></td>
                    <td><?= $value['date denregistrement'] ?></td>  
                
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
</body>
</html>