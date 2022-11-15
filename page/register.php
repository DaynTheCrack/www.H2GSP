<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon"  href="">
    <title>Connexion</title>
    <script src="../js/script.js" defer></script>
</head>

<body>
<!--Vérification des champs-->
    <header>
        <form id="form" action="../php/traitement.php" method="POST">
            <h1>Register</h1>

            <label><h2>identifiant</h2></label>
            <input id="username" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><h2>Mot de passe</h2></label>
            <input id="password" type="password" placeholder="Entrer le mot de passe" name="password" onkeyup="verif()" required>
            <div id="output"></div>

            <div>
                <input type="checkbox" id="scales" name="scales" value="Je consent a avoir mis mon propre prénom" required>

                <label for="scales"><h4>Je consent a avoir mis mon propre prénom</h4></label>
            </div>

            <label for="consentement"></label>

            <?php

            if (isset($_GET["erreur"])) { // si erreur

                echo "<p style='color:red;font-family:Georgia, serif;'>".$_GET["erreur"]."</p>";
            }

            ?>

            <input type="submit" id="submit" value="register" name="entree">
        </form>
    </header>
</body>

</html>