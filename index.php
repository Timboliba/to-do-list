<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div id="content">    
<!----------------------------------------------------------------------------La partie en-tête du document-------------------------------------------------------------->

    <?php include("header.php");?>

<!-----------------------------------------------------------------------La partie partie traitement des requete  du document-------------------------------------------->
    <div class="main" style="heigth: 70%;">
        <center>
            <div class="zonesaisie">
                <?php include("connexion.php");?>
            </div>
        </center>
    </div>
    
</div>        
</body>
</html>