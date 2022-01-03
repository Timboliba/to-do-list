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
         <?php
           if($_SESSION['prenom']=="HAMADI")
           {
            $req="SELECT *FROM entrer WHERE id=".$_GET['id'];
            $rst=$idcon->query($req);
            $table=$rst->fetch(PDO::FETCH_OBJ);
            $donner=$table->Donner;
           }
           else{
            $req="SELECT *FROM entrer1 WHERE id=".$_GET['id'];
            $rst=$idcon->query($req);
            $table=$rst->fetch(PDO::FETCH_OBJ);
            $donner=$table->Donner;
           }
        ?> 
   
    <div id="content">
        <div class="header"><a href="index.php">TO-DO-LIST</a><br><br><?php echo $_SESSION["nom"].' '.$_SESSION["prenom"];?></div>
            <div class="main">
                <center>
                    <div class="zonesaisie">
                        <form action="" method="post">
                            <input type='text' name='saisie' value='<?php echo $donner;?>' style='width:500px'>
                            <input type='submit' name='modifier' value='Modifier' disable='disable' class='input2' id="'.$value->ID.'">
                        </form>
                    </div>
                </center>
        </div>
        <!--center>
            <div style="margin-top:400px;" class="deconnexion">
                <a href="logout.php">Deconnexion</a>
            </div>
        </center-->
   </div>