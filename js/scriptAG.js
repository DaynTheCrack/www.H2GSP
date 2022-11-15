const barCanvas = document.getElementById
("barCanvas");

const barChart = new Chart(barCanvas, {
    type : "bar", //quel type de canvas on va utiliser a ne pas modifier
    data:{
        labels:  ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Decembre",], // a ne pas modifier ne change pas 
  
        datasets : [{
          label: "***", // a modifier 
                data : [230,300,120,120,123, 234, 907, 123, 65, 673,365,456], // valeur a modifier en utilisant du php
                backgroundColor : [
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
        }]

    },
    options: {  
        scales: {
          myScale: {
            type: 'logarithmic',
            position: 'left', 
            fontColor: '#333',
            
          }
        }
      }

      
    
    

});

$('#downloadPdf').click(function(event) {

  var reportPageHeight = $('#chart-container').innerHeight();
  var reportPageWidth = $('#chart-container').innerWidth();
  

  var pdfCanvas = $('<canvas />').attr({
    id: "barCanvas",
    width: reportPageWidth,
    height: reportPageHeight
  });
  

  var pdfctx = $(pdfCanvas)[0].getContext('2d');
  var pdfctxX = 0;
  var pdfctxY = 0;
  var buffer = 100;

  $("canvas").each(function(index) {

    var canvasHeight = $(this).innerHeight();
    var canvasWidth = $(this).innerWidth();
    
    pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
    pdfctxX += canvasWidth + buffer;
    
    
    if (index % 2 === 1) {
      pdfctxX = 0;
      pdfctxY += canvasHeight + buffer;
    }
  });
  
  
  var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
  pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);

  pdf.save('filename.pdf');
});