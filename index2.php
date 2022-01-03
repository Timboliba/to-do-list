<?php session_start();?>
<?php
define("HOST","localhost");
define("USER","root");
define("PWD","root");
define("DB","todolist");
try{
    $dsn="mysql:host=".HOST.";dbname=".DB;
    $idcon=new PDO($dsn,USER,PWD);
}
catch(PDOException $exp)
{
    die("Erreur :".$exp->getMessage());

}
?>
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
        <div class="header"><a href="index.php">TO-DO-LIST</a><br><?php echo $_SESSION["nom"].' '.$_SESSION["prenom"];?></div>
            <div class="main">
                <center>
                <?php
                   if($_SESSION['prenom']=="HAMADI")
                   {
                    $req="SELECT *FROM entrer";
                    $rst=$idcon->query($req);
                    $table=$rst->fetchALL(PDO::FETCH_OBJ);
                    //$donner=$table->Donner; 
                    foreach ($table as $key => $value) {
                        echo'<div class="zonesaisie">';
                        echo'<form action="?page" method="post">';
                            echo'<input type="text" name="saisie" value=" '.$value->Donner.'" style="width:500px" readonly>';
                            echo
                            '<span style="padding:1px;"><button style="border-radius: 13px 13px 13px 13px;"><a href="jouter.php?id='.$value->ID.'">Ajouter</a></button></span>
                            <span style="padding:1px;"><button style="border-radius: 13px 13px 13px 13px;"><a href="modifier.php?id='.$value->ID.'">Modifier</a></button></span>
                            <span style="padding:1px;"><button style="border-radius: 13px 13px 13px 13px;"><a href="supprimer.php?id?='.$value->ID.'">Supprimer</a></button></span>
                            ';
                        echo'</form>';
                        echo'</div><br>';
                    } 
                   }
                   else{
                       echo "Il n'y a rien a voir!!!!";
                       $req="SELECT *FROM entrer1";
                       $rst=$idcon->query($req);
                       $table=$rst->fetchALL(PDO::FETCH_OBJ);
                       //$donner=$table->Donner; 
                       foreach ($table as $key => $value) {
                           echo'<div class="zonesaisie">';
                           echo'<form action="?page" method="post">';
                               echo'<input type="text" name="saisie" value=" '.$value->Donner.'" style="width:500px" readonly>';
                               echo
                               '<span style="padding:1px;"><button style="border-radius: 13px 13px 13px 13px;"><a href="jouter.php?id='.$value->ID.'">Ajouter</a></button></span>
                               <span style="padding:1px;"><button style="border-radius: 13px 13px 13px 13px;"><a href="modifier.php?id='.$value->ID.'">Modifier</a></button></span>
                               <span style="padding:1px;"><button style="border-radius: 13px 13px 13px 13px;"><a href="supprimer.php?id?='.$value->ID.'">Supprimer</a></button></span>
                               ';
                           echo'</form>';
                       echo'</div><br>';
                       } 
                   }
                ?>  
                </center>
        </div><a href="page=?index&id=">
        <center>
            <div style="margin-top:auto;">
                <a href="logout.php" style="border:1px solid black;text-decoration:underline;color:red;font-size:20px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Deconnexion</a>
            </div>
        </center>
   </div>
   
</body>
</html>