<!Doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
        <link rel="stylesheet" href="../css/AGstyle.css">
        <link rel="shortcut icon" type="image/x-icon"  href="../photo/icon.jpg">

    </head>



<body>
    <nav>
        <ul>
          <li class="menu-deroulant">
            <a href="#">Axe Y</a>
            <ul class="sous-menu">
              <li><a href="#"><input type="radio" id="scales" name="scales" value="age" id="age" checked>
                <label for="scales">Age</label></a></li>
              <li><a href="#"><input type="radio" id="scales" name="scales" value="departement" id="departement" >
                <label for="scales">Département</label></a></li>
              <li><a href="#"><input type="radio" id="scales" name="scales" value="commune" id="commune">
                <label for="scales">Commune</label></a></li>
                <li><a href="#"><input type="radio" id="scales" name="scales" value="mois" id="mois">
                    <label for="scales">Mois</label></a></li>
                    <li><a href="#"><input type="radio" id="scales" name="scales" value="categorie">
                        <label for="scales">Catégorie</label></a></li>
            </ul>
          </li>
          <li class="menu-deroulant">
            <a href="#">Axe X</a>
            <ul class="sous-menu">
              <li><a href="#">Les mois de 1914</a></li>
            </ul>
          </li>
          <li><a href="../page/P.I.html">Retour</a></li>
          <li><a href="#" onclick="saveImage('barCanvas','graph.png')">Télécharger</a></li>
          <li><a href="../page/UI.html">Ajouter</a></li>
        </ul>
      </nav>

<br> <br>


      <div class="chart-container">
      <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
    </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
      <script src="../js/graph.js"></script>



</body>


<tbody>
 



</tbody>





</html> 
