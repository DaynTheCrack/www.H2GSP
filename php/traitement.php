// page de traitement de la page connexion
<!DOCTYPE html>
<html>
<body>
<?php
// récup de la bdd
$bdd = new PDO("mysql:host=localhost;port=3306;dbname=H2GSP;charset=utf8","root","Gigachad!44");
$requeteCnx = $bdd -> prepare("SELECT login,mdp FROM connexion");
$requeteCnx -> execute(); //  éxecution de la commande dans la base
$connexion = $requeteCnx -> fetchAll(PDO::FETCH_ASSOC); 

// debug
var_dump($connexion);

//récup de la valeur de la page
$type_lg = $_POST["entree"];
print_r($type_lg); // string
// def verif
function verif($bdd,$login,$mdp) {
// cette fonction permet de savoir si un compte est deja existant pour verif/connect
	
	$verifUser = $bdd ->  prepare("SELECT COUNT(*) AS cnx FROM connexion WHERE login=? AND mdp=?");
	$verifUser -> execute([$login,$mdp]);
	$UserValid = $verifUser -> fetch(PDO::FETCH_ASSOC);

	return $UserValid["cnx"]; // renvoie le nombre
}

function get_id($bdd,$login,$mdp) {
// cette fonction permet de récupérer l'id de l'utilisateur en session 

	$getId = $bdd -> prepare("SELECT id_user AS id FROM connexion WHERE login=? AND mdp=?");
	$getId -> execute([$login,$mdp]);
	$id = $getId -> fetch(PDO::FETCH_ASSOC);

	return $id["id"]; // renvoie l'id
}
// login

if ($type_lg == "login") {
	//recup du usernale et password
	$login = $_POST["username"];
	$mdp = $_POST["password"];
	print_r($login);
	print_r($mdp);

	// verif
	$verif = verif($bdd,$login,$mdp);	

	if ($verif == "1") { // si l'id et le mot de passe sont dans la base
		
		$id_User = get_id($bdd,$login,$mdp); // id du user sur la session
		header("Location: ../page/page_info.php?id=".$id_User); // renvoie à la page de connexion
		
	} else { // l'id et ou le mot de passe ne sont pas dans la base
		
		$erreur = "Mot de passe ou identifiant incorrect !"; // si mdp ou id incorrect message d'erreur en GET
		header("Location:../main.php?erreur=".$erreur);
} }
// register

elseif ($type_lg == "register") {  // pas besoin de préciser l'id (auto_increment)
	
	// recup du username et password
	$login = $_POST["username"];
	$mdp = $_POST["password"];
	
	// preparation et execution
	if (verif($bdd,$login,$mdp) == "0") { // verif si le compte existe déjà

		$addUser = $bdd -> prepare("INSERT INTO connexion (login,mdp) VALUES ('".$login."','".$mdp."');");
		$addUser -> execute();
		header("Location: ../main.php"); // renvoie page connexion compte n'existait pas
	} else {

		$erreur = "Compte déjà existant !"; // si compte existant message d'erreur en GET
		header("Location:../page/register.php?erreur=".$erreur);
} }

?>
</body>
</html>
