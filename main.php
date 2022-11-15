<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
		<link rel="stylesheet" href="css/style.css">
       	<link rel="shortcut icon" type="image/x-icon"  href="">
		<script src="js/script.js" defer></script>
    
	</head>
  <!--script de vérification des champs-->
	<body>
        <header>
        
			<form id="form" action="php/traitement.php" method="POST">
                <h1>Connexion</h1>

                <label><h2>identifiant</h2></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                
                <label><h2>Mot de passe</h2></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password"  required>
		
				<label><?php
					if (isset($_GET["erreur"])) {
						echo "<p style='color:red;font-family:Georgia, serif;'>".$_GET["erreur"]."</p>"; // affiche un message d'erreur en cas d'erreur
					}
				?></label>			

                <input type="submit" id='submit' value='login' name='entree' >


                <a href="page/register.php" text-decoration="none"><h3>S'inscire</h3></a>
              
			</form>
        </header>
	</body>
</html>
