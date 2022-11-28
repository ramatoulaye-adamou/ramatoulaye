<?php
require_once("../modell/auteur.model.php");
$auteur=find_all_auteur();
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
      
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFFESSION</th>
                
            </tr>
            <?php foreach ($auteur as $value):?>
            <tr>
                    <td><?= $value['nom'] ?></td>
                    <td><?= $value['prenom'] ?></td>  
                    <td><?= $value['proffession'] ?></td>
                
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
</body>
</html>