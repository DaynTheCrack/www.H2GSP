function filtrer(){
    var filtre, tableau, ligne, cellule, i, texte

    filtre = document.getElementById("chercher").value.toUpperCase(); // id de table = "maRecherche"
    tableau = document.getElementById("tableau");
    ligne = tableau.getElementsByTagName("tr");

    for (i=0; i<ligne.length; i++) {

        cellule = ligne[i].getElementsByTagName("td")[0];

        if (cellule){

            texte = cellule.innerHTML;

            if (texte.toUpperCase().indexOf(filtre) > -1){

                ligne[i].style.display = "";
            }
            else {

                ligne[i].style.display = "none";
            }
        }
    }

}