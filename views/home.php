    <script type="text/javascript">
    $(function () {
        Highcharts.chart('container1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {              
                text: 'Personas registradas: <b>' +
                        <?php
                            require("config/db.php");
                            $sql         = "SELECT COUNT(*) AS total FROM pacientes";
                            $result      = $conn->query($sql);
                              while($row = $result->fetch_assoc()){echo $row["total"];}
                            $conn->close();
                        ?>
                        + '</b>'
            },
            subtitle: {
                text: 'Filtrado por géneros'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                    name: 'Hombres',
                    y: 
                        <?php
                            require("config/db.php");
                            $sql         = "SELECT COUNT(*) AS total FROM pacientes WHERE genero='M' ";
                            $result      = $conn->query($sql);
                              while($row = $result->fetch_assoc()){echo $row["total"];}
                            $conn->close();
                        ?>
                },{
                    name: 'Mujeres',
                    y: 
                        <?php
                            require("config/db.php");
                            $sql         = "SELECT COUNT(*) AS total FROM pacientes WHERE genero='F' ";
                            $result      = $conn->query($sql);
                              while($row = $result->fetch_assoc()){echo $row["total"];}
                            $conn->close();
                        ?>
                }]
            }]
        });
    });
    </script>
    <script type="text/javascript">
    $(function () {
        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Personas registradas'
            },
            subtitle: {
                text: 'Filtrados por edad'
            },
            xAxis: {
                categories: ['Pacientes'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Registros',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' Registros'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Menores de edad',
                data: [
                        <?php
                            require("config/db.php");
                            $sql       = "SELECT COUNT(*) AS total FROM pacientes WHERE edad>0 and edad<18 ";
                            $result    = $conn->query($sql);
                            while($row = $result->fetch_assoc()){echo $row["total"];}
                            $conn->close();
                        ?>            
                      ]
            }, {
                name: 'Adultos',
                data: [
                        <?php
                            require("config/db.php");
                            $sql       = "SELECT COUNT(*) AS total FROM pacientes WHERE edad>=18 and edad<60 ";
                            $result    = $conn->query($sql);
                            while($row = $result->fetch_assoc()){echo $row["total"];}
                            $conn->close();
                        ?>            
                      ]
            }, {
                name: 'Ancianos',
                data: [
                        <?php
                            require("config/db.php");
                            $sql       = "SELECT COUNT(*) AS total FROM pacientes WHERE edad>=60 and edad<=110 ";
                            $result    = $conn->query($sql);
                            while($row = $result->fetch_assoc()){echo $row["total"];}
                            $conn->close();
                        ?>            
                      ]
            }]
        });
    });
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <div class="row">
        <div class="col l6 m12 s12">
            <div id="container1"><!--Graphic 1--></div>
        </div>
        <div class="col l6 m12 s12">
            <div id="container2"><!--Graphic 2--></div>
        </div>
    </div>
    </main>