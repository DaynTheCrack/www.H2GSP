// récupération des données PHP 

let useData; // création d'une var

function recupData(data) { //  fonction pour récupérer la data
    useData = data;
};

fetch('../php/data.php')
    .then(function(response){
        return response.json(); // promise type
    })
    .then(function(data){
        useData = data; // object type (array)
        console.log(useData); // le jeu donnée de la base de donnée
    });

let type; // var du type en abscisse par default

var elts = document.querySelectorAll('input'); // on verifie quel valeur a l'input
		for (var i = 0; i < elts.length; i++) {
			if ( elts[i].checked === true ) {
            type = elts[i].value;
            break;
		}
    }
console.log(type);

document.querySelector('ul').addEventListener('change', function () {
    var elts = document.querySelectorAll('input');
    for (var i = 0; i < elts.length; i++) {
        if ( elts[i].checked === true ) break;
    }
    type = elts[i].value;	// renvoyer à des fonctions de graph et traitement dedonnées différents
    console.log(type);	
})

// recréation du graphique avec une méthode plugin

// setup block

// revoir l'ordre des données par rapport au tableau

const data = { 
    labels : ["Janvier", 
    "Fevrier", 
    "Mars", 
    "Avril", 
    "Mai", 
    "Juin", 
    "Juillet", 
    "Aout",
    "Septembre", 
    "Octobre", 
    "Novembre", 
    "Decembre"], //  legende
    datasets: [{
        label: "mort", // a changer c'est le label
        data: [
            230
            ,300
            ,120
            ,120
            ,123
            ,234
            ,907
            ,123
            ,65
            ,673
            ,365
            ,456
        ],
    backgroundColor: [
        "#E0CDA9",
        "#E1CE9A",
        "#D0C07A",
        "#DEB887",
        "#D2B48C",
        "#D2B48C",
        "#947F60",
        "#856D4D",
        "#CD853F",
        "#A76726",
        "#B36700",
        "#985717",    
    ],
    hoverOffset: 4
    }]
};

// plugin block

const plugin = {
    id : 'custom_canvas_background_color',
    beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = "destination-over";
        ctx.fillStyle = "#dcd7c9d2"; // couleur du background 
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
    }
};

//config block

const config = { 
    type :"doughnut", // doughtnut => graph camenbert  bar => graph barre 
    data : data,
    plugins: [plugin],
};

// render initialization block

const myChart = new Chart(
    document.getElementById('barCanvas'),
    config
);

function saveImage(idCanvas, nomFichier) {
    // nom du fichier pour l'enregistrement
    const nomFile = nomFichier || "image.png";
    // récup. de l'élément <canvas>
    const canvas = document.getElementById(idCanvas);
    let dataImage;
    if (canvas.msToBlob) {
      // crée un objet blob contenant le dessin du canvas
      dataImage = canvas.msToBlob();
      // affiche l'invite d'enregistrement
      window.navigator.msSaveBlob(dataImage, nomFile);
    }
    else {
      // création d'un lien HTML5 download
      const lien = document.createElement("A");
      // récup. des data de l'image
      dataImage = canvas.toDataURL("image/png");
      // affectation d'un nom à l'image
      lien.download = nomFile;
      // modifie le type de données
      dataImage = dataImage.replace("image/png", "image/octet-stream");
      // affectation de l'adresse
      lien.href = dataImage;
      // ajout de l'élément
      document.body.appendChild(lien);
      // simulation du click
      lien.click();
      // suppression de l'élément devenu inutile
      document.body.removeChild(lien);
    }
}
