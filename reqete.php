  
    <?php
        if(isset($_POST['ajout']))
        {
            if(isset($_POST['saisie']))
            {
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
            else{
                echo"Champs vide!!!!";
            }
        }
        else{
            echo"Veillez selection le button ajouter!";
        }
    ?>