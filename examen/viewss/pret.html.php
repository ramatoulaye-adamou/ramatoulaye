<?php
require_once("../modell/auteur.model.php");
$pret=find_all_pret();
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
      
                <th>DATE</th>
                <th>DDPR</th>
                <th>DDRR</th>
                <th>EXEMPLAIRE</th>
                <th>ADHRENT</th>
                
            </tr>
            <?php foreach ($pret as $value):?>
            <tr>
        
                    <td><?= $value['date'] ?></td>
                    <td><?= $value['ddrp'] ?></td>
                    <td><?= $value['ddrr'] ?></td>
                    <td><?= $value['exemplaire'] ?></td>
                    <td><?= $value['adhrent'] ?></td> 
                
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
</body>
</html>