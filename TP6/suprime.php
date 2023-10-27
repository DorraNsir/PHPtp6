<?php
include("connexion.php");
$code=$_POST['code'];
$req="DELETE FROM etudiants WHERE codeEtudiant = $code";
$res=$cx->query($req);
if($res){
    echo "ok";
}
else{
    echo "problem";
}
?>