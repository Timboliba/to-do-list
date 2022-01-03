<?php session_start()?>
<?php
$_SESSION["open"]="";
unset($_SESSION["open"]);
$_SESSION["nom"]="";
unset($_SESSION["nom"]);
$_SESSION["prenomnom"]="";
unset($_SESSION["prenom"]);
session_destroy();
$idcon=NULL;
header("location:index.php");
?>