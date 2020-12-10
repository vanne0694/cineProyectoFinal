<body>
    <div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var entrances= <?php echo json_encode($entrances) ?>;
    Highcharts.chart('container'), {
        title: {
            text: 'Agregar Entradas'
        },
        subtitle: {
            text: 'Gráfica'
        },
        
        xAxis{
            categories: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'
            'Sabado', 'Domingo']
        },

        yAxis{
            title: {
                text: 'Entradas'
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
                    name: 'Entradas', 
                    data: entrances
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

 </script><?php /**PATH C:\laragon\www\cine02\resources\views/graficas/graficaEntrances.blade.php ENDPATH**/ ?>