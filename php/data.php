<?php 

// récupétration des données
$bdd = new PDO("mysql:host=localhost;port=3306;dbname=H2GSP;charset=utf8","root","Gigachad!44");

// requete de recupération
$requeteInfo = $bdd -> prepare("SELECT * FROM archives");

$requeteInfo -> execute(); // éxecution de la commande dans la base

$Info = $requeteInfo -> fetchAll(PDO::FETCH_ASSOC); // tableau dans $info

header('Content-Type: application/json'); // facultatif pas besoin pour fonctionner

echo json_encode($Info); // a changer permet de faire marcher le js => "response"
?>
