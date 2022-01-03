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
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
    $saisie=$saisieerr="";
    if(empty($_POST['saisie'])) $saisieerr="Champ requis!!!!";
    else $saisie=$_POST['saisie'];
    ?>
     <div id="content">
        <div class="header"><a href="index.php">TO-DO-LIST</a><br><br><?php echo $_SESSION["nom"].' '.$_SESSION["prenom"];?></div>
            <div class="main">
                <center>
                    <div class="zonesaisie">
                        <form action="" method="post">
                           <table>
                               <tr>
                                    <td>
                                        <input type='text' name='saisie' value='<?php echo $saisie;?>' style='width:500px'><font color=red><?php echo $saisieerr;?></font>
                                        <input type='submit' name='ajout' value='Ajouter' disable='disable' class='input2' id="'.$value->ID.'">
                                    </td>
                                </tr>
                           </table>
                        </form>
                    </div>
                </center>
        </div>
        <?php
        if(isset($_POST['ajout']))
        {
            if(isset($_POST['saisie']))
            {
               if($_SESSION['prenom']=="MOUSSA"){
                $req="INSERT INTO entrer1(Donner) VALUES('".$_POST["saisie"]."')";
                $rst=$idcon->exec($req);
                if($req)
                {
                   header("location:index2.php");
                   
                }
                else{
                    echo"Donner non enregistrer!!!!";
                }
               }
               else{
                $req="INSERT INTO entrer(Donner) VALUES('".$_POST["saisie"]."')";
                $rst=$idcon->exec($req);
                if($req)
                {
                   header("location:index2.php");
                   
                }
                else{
                    echo"Donner non enregistrer!!!!";
                }
               }
            }
            else{
                echo"Champs vide!!!!";
            }
        }
        else{
            echo"Veillez selection le button ajouter!";
        }
    ?>
</body>
</html>