<!Doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
        <link rel="stylesheet" href="../css/PI.css">
        <link rel="shortcut icon" type="image/x-icon"  href="../photo/e01dc8f3f2434dbf9ddecd5276bc536b (1).png">
    </head>
<body>
    <script src="../js/search.js"></script>
  
 
  </div>
  <div class="image2">
    <img src="../photo/e01dc8f3f2434dbf9ddecd5276bc536b (1).png" id="image2" aria-placeholder="">
    </div>

  <div class="component">
    <ul class="align">
      <li>
        <figure class='book'>


          <ul class='hardcover_front'>
            <li>
              <div class="coverDesign A27B5C ">
                <h1>H2GSP</h1>
                <p>Archives</p>
              </div>
            </li>
            <li></li>
          </ul>


          <ul class='page'>
            <li></li>
            <li>
              <a class="btn" href="../page/A.G.html">Graphique</a>
              <a class="btn" href="../page/UI.html">Ajouter</a>
            </li>
            <li>

            </li>
            <li></li>
            <li></li>
          </ul>

          <ul class='hardcover_back'>
            <li></li>
            <li></li>
          </ul>
          <ul class='book_spine'>
            <li></li>
            <li></li>
          </ul>

          
        </figure>
      </li>
    </ul>
  </div>
</body>




 <input type="text" name="chercher" id="chercher" placeholder="Chercher" style="width: 20% ;" onkeyup="filtrer()">
    
 <table id="tableau">
  <?php

    $bdd = new PDO("mysql:host=localhost;port=3306;dbname=H2GSP;charset=utf8","root","Gigachad!44");
    $requeteInfos = $bdd -> prepare("SELECT * FROM archives");
    $requeteInfos -> execute(); // éxecution de la commande dans la base 
    $infos = $requeteInfos -> fetchAll(PDO::FETCH_ASSOC);

    $keys = ["Nom","Prénom","Age","Lieu de naissance","Commune habitation","département habitation","Mois incorporation","Métier"];
    $keysArray = ["nom","prenom","age","lieu_naissance","commune_hab","departement_hab","mois_incorpo","metier"];
    
    echo "<tr>";
    foreach ($keys as $key) {
        echo "<th>".$key."</th>";
    };
    echo "</tr>";

    foreach ($infos as $info) {
        echo "<tr>";
        foreach ($keysArray as $key) {
            echo "<td>".$info[$key]."</td>";
        }
        echo "</tr>";
    }


  ?>
</table>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cookie Consent Banner</title>
  
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
    rel="stylesheet"
  />

  <div id="cookiePopup" class="hide">
    <img src="../photo/cookie.png" />
    <p>
      Notre site Web utilise des cookies pour vous offrir une expérience de navigation et des
      des informations pertinentes. Avant de poursuivre l'utilisation de notre site web, vous consentez et
      acceptez de notre <a href="#">Cookie Policy & Privacy.</a>
    </p>
    <button id="acceptCookie">Accepter</button>
  </div>
  
  <script src="../js/cookie.js"></script>
</body>


</html>
