<!DOCTYPE html>
<html>
<body>
<?php 
//ajout des informations à la base de données

// recup de la base 
$bdd = new PDO("mysql:host=localhost;port=3306;dbname=H2GSP;charset=utf8","root","Gigachad!44");

// liste des noms des champs
$keyArray = array("nom","prenom","age","lieu_naissance","commune_hab","departement_hab","mois_incorpo","metier");

// recup du type d'entrée
$typeRequete = $_POST["entree"];

//test
print_r($_POST["mois_incorpo"]);
print_r($typeRequete);

if ($typeRequete == "envoyer") { // envoie formulaire

    $commande = "INSERT INTO archives (nom,prenom,age,lieu_naissance,commune_hab,departement_hab,mois_incorpo,metier,id_user) VALUES (";

    foreach($keyArray as $key) {

        if ($key == "age"){
            $commande = $commande.intval($_POST[$key]).",";
        } else {
        $commande = $commande."'".$_POST[$key]."',";
        }
    }

    $commande = $commande.intval($_GET["id"]).")";

    print_r($commande);

    $insertData = $bdd -> prepare($commande);
    $insertData -> execute();
}