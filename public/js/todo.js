$(function () {
    // ChartJS
    graficoOrdenes();
    graficoIngresos();
    
   
  })

  function graficoIngresos(){
    if (areaChart !== null) {
      var areaChartCanvas = $('#areaChartIngresos').get(0).getContext('2d')
      }
     // if (typeof APP_URL !== 'undefined') {
     //   var url=APP_URL+"/api_rapida.php?evento=reporte_ingresos&fecha_inicio=2010-01-01&fecha_fin=2021-01-01";
      //}
     // $.getJSON( url, function( data ) {
       
 
    
        //Create the line chart
        //areaChart.Line(areaChartData, areaChartOptions)
        new Chart(areaChartCanvas , {
          type: "bar",
          data: [{x:'2016-12-25', y:20}, {x:'2016-12-26', y:10}], 
    //  });
      });
  }


  function graficoOrdenes(){
    if (areaChart !== null) {
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
      }
      if (typeof APP_URL !== 'undefined') {
      var url=APP_URL+"/api/orders/estadistica/ano";
      }
      $.getJSON( url, function( data ) {
       
        var areaChartData = data;
  
  
        var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale               : true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines      : true,
          //String - Colour of the grid lines
          scaleGridLineColor      : 'rgba(0,0,0,.05)',
          //Number - Width of the grid lines
          scaleGridLineWidth      : 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines  : true,
          //Boolean - Whether the line is curved between points
          bezierCurve             : true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension      : 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot                : true,
          //Number - Radius of each point dot in pixels
          pointDotRadius          : 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth     : 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius : 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke           : true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth      : 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill             : true,
          //String - A legend template
          legendTemplate          : '<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio     : true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive              : true
        }
    
        //Create the line chart
        //areaChart.Line(areaChartData, areaChartOptions)
        new Chart(areaChartCanvas , {
          type: "line",
          data: areaChartData, 
          options: areaChartOptions
      });
      });
  }