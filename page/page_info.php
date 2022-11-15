// page info ou on affiche les informations
<!DOCTYPE html>
<html>
<body>
<head>
	<link rel="stylesheet" href="../css/page_info.css">
</head>
<?php
// recup de la bdd
$bdd = new PDO("mysql:host=localhost;port=3306;dbname=H2GSP;charset=utf8","root","Gigachad!44");
$requeteInfos = $bdd -> prepare("SELECT * FROM archives");
$requeteInfos -> execute(); // éxecution de la commande dans la base 
$infos = $requeteInfos -> fetchAll(PDO::FETCH_ASSOC);

// liste des keys
$keyArray = array("id_user","nom","prenom","age","lieu_naissance","commune_hab","departement_hab","mois_incorpo","metier");

// debug 
var_dump($infos);
echo "<br>";

//recup des infos de la base
foreach ($infos as $info) { // recup une par une des données dans la base

	print_r($info["mois_incorpo"]);
}
// affichage de l'id
$id = $_GET["id"];
print_r($id);
?>
<table>
    <thead>
        <tr>
            <!--colspan permet de prendre la place de plusieurs colones-->
            <?php
            foreach ($keyArray as $key) { 
            // affiche le titre des colonnes
            
                echo "<th>".$key."</th>";
            }
            ?>   
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($infos as $info) { 
        
        echo "<tr>";
			 
            foreach ($keyArray as $key) { // affiche chaque valeur de la clef de l'info
				echo "<td>".strval($info[$key])."</td>";
			}
		echo "</tr>";
        }
        ?>
    </tbody>
</table>
<form method="post" action="saisie.php?id=<?php echo $_GET['id']; ?>">
<input type="submit" value="ajouter">
</form>
</body>
</html>
