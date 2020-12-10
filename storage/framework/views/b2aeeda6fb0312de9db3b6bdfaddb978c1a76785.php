 <body>
    <div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var movies = <?php echo json_encode($movies) ?>;
    Highcharts.chart('container'), {
        title: {
            text: 'Nuevas peliculas'
        },
        subtitle: {
            text: 'Gráfica'
        },
        
        xAxis{
            categories: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre']
        },

        yAxis{
            title: {
                text: 'Peliculas'
                } 
        },

        legend:{
            layout:'vertical',
            align: 'right',
            verticalAlign: 'middle' 
            },

            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },

            series: [ 
                { 
                    name: 'Peliculas', 
                    data: movies
                     } 
            ],

            responsive: {
                rules:[ 
                   { 
                       condition: 
                    {               
                        maxWidth: 500
                   }, 
                   chartOptions{
                       legend: {
                           layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'botton'
                   }
                }
          ] 
          }
    }
} );

 </script><?php /**PATH C:\laragon\www\cine02\resources\views/graficas/graficaMovies.blade.php ENDPATH**/ ?>