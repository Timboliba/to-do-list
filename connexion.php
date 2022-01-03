<?php
define("USER","root");
define("HOST","localhost");
define("PWD","root");
define("DB","todolist");
try{
    $dsn="mysql:host=".HOST.";dbname=".DB;
    $idcon=new PDO($dsn,USER,PWD);
}
catch(PDOEXception $exp)
{
    die("Erreur :".$exp->getMessage());
}
?>
<?php
        $identifiant=$code="";
        $identifianterr=$codeerr="";
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            if(empty($_POST['identifiant'])) $identifianterr="Champ requis!!!!";
            else{
                $identifiant=$_POST['identifiant'];
            }
            if(empty($_POST['code'])) $codeerr="Champ requis!!!!";
            else{
                $code=$_POST['code'];
            }
        }
    ?>
<div style="margin-top:15%;"> 
    <form action="" method="post">
        <table>
            <tr>
                <td>Indentifiant:</td>
            </tr>
            <tr>
                <td><input type="text" name="identifiant" value="<?php echo"$identifiant";?>"style="width:425px;"><font color=red><?php echo $identifianterr;?></font></td>
            </tr>
            <tr>
                <td>Mot de passe:</td>
            </tr>
            <tr>
                <td><input type="password" name="code" value="<?php echo"$code";?>"style="width:425px;"><font color=red><?php echo $codeerr;?></font></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Connexion" name="connexion" style="width:110px; margin-left:40%;margin-top:25px;">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
    if(isset($_POST['connexion']) && $_POST['identifiant']!="" && $_POST['code']!="")
    {
        $req="SELECT * FROM user WHERE identifiant='".$_POST['identifiant']."' && code='".$_POST['code']."'";
        $rst=$idcon->query($req);
        $tab=$rst->fetch(PDO::FETCH_OBJ);
    
       $nombre=$rst->rowcount();

        if($nombre>0)
        {
            $_SESSION["open"]="ok";
            $_SESSION["nom"]=$tab->nom;
            $_SESSION["prenom"]=$tab->prenom;
            header("location:index2.php");
        }
        else{ 
            echo '<div style="margin-top:45px;color:red;font-size:19px;">Utilisateur ou mot de passe incorrecte!</div>';
        }

      
    }
?>
</body>