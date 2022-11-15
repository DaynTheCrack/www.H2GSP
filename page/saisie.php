<?php // tableau des départements français
$DEPARTEMENTS = array();
$DEPARTEMENTS["01"] = "Ain";
$DEPARTEMENTS["02"] = "Aisne";
$DEPARTEMENTS["03"] = "Allier";
$DEPARTEMENTS["04"] = "Alpes de Haute Provence";
$DEPARTEMENTS["05"] = "Hautes Alpes";
$DEPARTEMENTS["06"] = "Alpes Maritimes";
$DEPARTEMENTS["07"] = "Ardèche";
$DEPARTEMENTS["08"] = "Ardennes";
$DEPARTEMENTS["09"] = "Ariège";
$DEPARTEMENTS["10"] = "Aube";
$DEPARTEMENTS["11"] = "Aude";
$DEPARTEMENTS["12"] = "Aveyron";
$DEPARTEMENTS["13"] = "Bouches du Rhône";
$DEPARTEMENTS["14"] = "Calvados";
$DEPARTEMENTS["15"] = "Cantal";
$DEPARTEMENTS["16"] = "Charente";
$DEPARTEMENTS["17"] = "Charente Maritime";
$DEPARTEMENTS["18"] = "Cher";
$DEPARTEMENTS["19"] = "Corrèze";
$DEPARTEMENTS["2A"] = "Corse du Sud";
$DEPARTEMENTS["2B"] = "Haute Corse";
$DEPARTEMENTS["21"] = "Côte d'Or";
$DEPARTEMENTS["22"] = "Côtes d'Armor";
$DEPARTEMENTS["23"] = "Creuse";
$DEPARTEMENTS["24"] = "Dordogne";
$DEPARTEMENTS["25"] = "Doubs";
$DEPARTEMENTS["26"] = "Drôme";
$DEPARTEMENTS["27"] = "Eure";
$DEPARTEMENTS["28"] = "Eure et Loir";
$DEPARTEMENTS["29"] = "Finistère";
$DEPARTEMENTS["30"] = "Gard";
$DEPARTEMENTS["31"] = "Haute Garonne";
$DEPARTEMENTS["32"] = "Gers";
$DEPARTEMENTS["33"] = "Gironde";
$DEPARTEMENTS["34"] = "Hérault";
$DEPARTEMENTS["35"] = "Ille et Vilaine";
$DEPARTEMENTS["36"] = "Indre";
$DEPARTEMENTS["37"] = "Indre et Loire";
$DEPARTEMENTS["38"] = "Isère";
$DEPARTEMENTS["39"] = "Jura";
$DEPARTEMENTS["40"] = "Landes";
$DEPARTEMENTS["41"] = "Loir et Cher";
$DEPARTEMENTS["42"] = "Loire";
$DEPARTEMENTS["43"] = "Haute Loire";
$DEPARTEMENTS["44"] = "Loire Atlantique";
$DEPARTEMENTS["45"] = "Loiret";
$DEPARTEMENTS["46"] = "Lot";
$DEPARTEMENTS["47"] = "Lot et Garonne";
$DEPARTEMENTS["48"] = "Lozère";
$DEPARTEMENTS["49"] = "Maine et Loire";
$DEPARTEMENTS["50"] = "Manche";
$DEPARTEMENTS["51"] = "Marne";
$DEPARTEMENTS["52"] = "Haute Marne";
$DEPARTEMENTS["53"] = "Mayenne";
$DEPARTEMENTS["54"] = "Meurthe et Moselle";
$DEPARTEMENTS["55"] = "Meuse";
$DEPARTEMENTS["56"] = "Morbihan";
$DEPARTEMENTS["57"] = "Moselle";
$DEPARTEMENTS["58"] = "Nièvre";
$DEPARTEMENTS["59"] = "Nord";
$DEPARTEMENTS["60"] = "Oise";
$DEPARTEMENTS["61"] = "Orne";
$DEPARTEMENTS["62"] = "Pas de Calais";
$DEPARTEMENTS["63"] = "Puy de Dôme";
$DEPARTEMENTS["64"] = "Pyrénées Atlantiques";
$DEPARTEMENTS["65"] = "Hautes Pyrénées";
$DEPARTEMENTS["66"] = "Pyrénées Orientales";
$DEPARTEMENTS["67"] = "Bas Rhin";
$DEPARTEMENTS["68"] = "Haut Rhin";
$DEPARTEMENTS["69"] = "Rhône-Alpes";
$DEPARTEMENTS["70"] = "Haute Saône";
$DEPARTEMENTS["71"] = "Saône et Loire";
$DEPARTEMENTS["72"] = "Sarthe";
$DEPARTEMENTS["73"] = "Savoie";
$DEPARTEMENTS["74"] = "Haute Savoie";
$DEPARTEMENTS["75"] = "Paris";
$DEPARTEMENTS["76"] = "Seine Maritime";
$DEPARTEMENTS["77"] = "Seine et Marne";
$DEPARTEMENTS["78"] = "Yvelines";
$DEPARTEMENTS["79"] = "Deux Sèvres";
$DEPARTEMENTS["80"] = "Somme";
$DEPARTEMENTS["81"] = "Tarn";
$DEPARTEMENTS["82"] = "Tarn et Garonne";
$DEPARTEMENTS["83"] = "Var";
$DEPARTEMENTS["84"] = "Vaucluse";
$DEPARTEMENTS["85"] = "Vendée";
$DEPARTEMENTS["86"] = "Vienne";
$DEPARTEMENTS["87"] = "Haute Vienne";
$DEPARTEMENTS["88"] = "Vosges";
$DEPARTEMENTS["89"] = "Yonne";
$DEPARTEMENTS["90"] = "Territoire de Belfort";
$DEPARTEMENTS["91"] = "Essonne";
$DEPARTEMENTS["92"] = "Hauts de Seine";
$DEPARTEMENTS["93"] = "Seine St Denis";
$DEPARTEMENTS["94"] = "Val de Marne";
$DEPARTEMENTS["95"] = "Val d'Oise";
$DEPARTEMENTS["97"] = "DOM";
$DEPARTEMENTS["971"] = "Guadeloupe";
$DEPARTEMENTS["972"] = "Martinique";
$DEPARTEMENTS["973"] = "Guyane";
$DEPARTEMENTS["974"] = "Réunion";
$DEPARTEMENTS["975"] = "Saint Pierre et Miquelon";
$DEPARTEMENTS["976"] = "Mayotte";
?>
<!Doctype html>
<html lang="fr">
	<head>

		<meta charset="utf-8">
		<title>Formulaire</title>
		<link rel="stylesheet" href="../css/iu_style.css">
    <link rel="shortcut icon" type="image/x-icon"  href="">
    <script src="../js/completion.js" defer></script>
	
  </head>
             
  <body>
    <section id="hero-1">
      <div class="container">
        Saisi d'informations
      </div>
    </section>
                  
    <section class="normal-scroll">
      <div class="container_2"></div>
    </section>
    <section id="hero-2">
      <div class="container_2"></div>
    </section>
    <section class="normal-scroll">
      <div class="container_2">
        Informations à saisir 
      </div>
    </section>
    <tbody>
      <form action="../php/gestion.php?id=<?php echo $_GET['id']?>" method="POST">

        <label for="name"><h1>Prénom</h1></label>
        <input type="text" placeholder="Prénom" name="prenom" id="prenom" required>
        <br><br>
        <label for="name"><h1>Nom</h1></label>
        <input type="text" placeholder="Nom de famille" name="nom" id="prenom" required>
        <br><br>
        <label for="name"><h1>Age</h1></label>
        <input type="number" placeholder="Age" name="age" id="prenom" min="0" required>
        <br><br>
        <label for="name"><h1>Département de naissance</h1></label>
        <input type="text" placeholder="Entrer le département ou pays (si étranger) de naissance" name="lieu_naissance" id="prenom" list="departementList1" required>
        <datalist id="departementList1">
        
          <?php // liste des départements
          foreach ($DEPARTEMENTS as $NumDepartement => $Departement) {
            echo "<option value='".$NumDepartement." ".$Departement."'>".$NumDepartement." ".$Departement."</option>";
          }
          ?>

        </datalist>
        <br><br>
        <label for="name"><h1>Commune d'habitation</h1></label>
        <input type="text" placeholder="Dans quelle commune d'habitaion" name="commune_hab" id="prenom" required>
        <br><br>
        <label for="name"><h1>Département d'habitation  </h1></label>
        <input type="text" placeholder="Dans quelle départemtn d'habitation(text)" name="departement_hab" id="prenom" list="departementList2" required>
        <datalist id="departementList2">
        
          <?php // liste des départements
          foreach ($DEPARTEMENTS as $NumDepartement => $Departement) {
            echo "<option value='".$NumDepartement." ".$Departement."'>".$NumDepartement." ".$Departement."</option>";
          }
          ?>
        
        </datalist>
        <br><br>
        <label for="name"><h1>Mois d'incorporation</h1></label>
        <input type="date" placeholder="Entrer le nom d'utilisateur" name="mois_incorpo" id="prenom" required>
        <br><br>
        <label for="name"><h1>Catégorie socio-professionnel</h1></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="metier" id="prenom" required>
        <br><br>
        
        <input type="submit" id="envoyer" value='envoyer' name='entree' >

      </tbody>
    </body>
  </html>
