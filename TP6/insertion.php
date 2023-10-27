<?php
include("connexion.php");
$codeE=$_POST['codeE'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$req="insert into etudiants values($codeE,'$nom','$prenom','$adresse','$classe')";
$res=$cx->query($req);
if($res){
    echo "ok";
}
else{
    echo "problem";
}

?>