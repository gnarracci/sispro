<?php
//Conexion a la Base de Datos
include("conexionsspi.php");

    //Verifica el envio de las Variables
    if (isset($_POST['r-1'])){
        $sipi_1 = $_POST['r-1'];
        $sipi_2 = $_POST['r-2'];
        $sipi_3 = $_POST['r-3'];
        
    //Si las variables fueron cargadas se procede a la insercion de los datos
    $sql = "INSERT INTO corresponde_formacion (sipi,id_formacion,id_resp_formacion) VALUES ('$sipi_1','$sipi_2','$sipi_3')";
    
    $consulta = mysql_query($sql) or die (mysql_errno().' - '.mysql_error());
    
    $message = '<div class="ui-widget">
                        <div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
                        <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
                        <strong>Datos Guardados Exitosamente!!!</strong></p>
                        </div>        
                    </div>        
        ';

	}else{

	$message = '<div class="ui-widget">
                        <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
                        <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
                        <strong>Atenci�n!!!:</strong> Datos NO Guardados!!! Solicite Soporte llame a la ext. 171 Dpto. Sistemas.</p>
                        </div>
                    </div>
        ';
    
                
    }

   
/**
 * @author Gianni Narracci
 * gnarracci@gmail.com
 * @copyright 2012
 */



?>

<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8"/>
			<title>Mensaje del Sistema Carga de Correspondencia</title>
			<link rel="shortcut icon" href="favicon.ico"/>
			<link rel="stylesheet" href="corresponde_formacion.css"/>
			<link rel="stylesheet" href="normalize.css"/>
			<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
			<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.9.2.custom.css"/>

			<script src="js/modernizr-2.5.3.min.js"></script>
            <script src="js/jquery-1.7.1.min.js"></script>
            <script src="js/jquery-ui.js"></script>
            <script src="js/prefixfree.min.js"></script>

            <script>
                $(function(){
                    $("#dialog").dialog({
                        autoOpen: true,
                        width: 400,
                        show: 'clip',
                        hide: 'clip',
                        buttons: [
                        {
                            text: "Ok",
                            click: function(){
                                $(this).dialog('close');
                            }
                        },
                        {
                            text: "Cancelar",
                            click: function(){
                                $(this).dialog('close');
                            }
                        }
                        ]
                    });
                });
            </script>

            <script>
                $(function () {
                    var chart;
                    $(document).ready(function() {
                        chart = new Highcharts.Chart({
                            chart: {
                                renderTo: 'container',
                                type: 'spline'
                            },
                            title: {
                                text: 'Variabilidad de Porcentajes para Perfiles'
                            },
                            subtitle: {
                                text: 'Depende de necesidades de Talento Humano'
                            },
                            xAxis: {
                                type: 'datetime',
                                dateTimeLabelFormats: { // don't display the dummy year
                                    month: '%e. %b',
                                    year: '%b'
                                }
                            },
                            yAxis: {
                                title: {
                                    text: 'Porcentaje (%)'
                                },
                                min: 0
                            },
                            tooltip: {
                                formatter: function() {
                                        return '<b>'+ this.series.name +'</b><br/>'+
                                        Highcharts.dateFormat('%e. %b', this.x) +': '+ this.y +' %';
                                }
                            },
                            
                            series: [{
                                name: 'Periodo 2007-2008',
                                // Define the data points. All series have a dummy year
                                // of 1970/71 in order to be compared on the same x axis. Note
                                // that in JavaScript, months start at 0 for January, 1 for February etc.
                                data: [
                                    [Date.UTC(1970,  9, 27), 0   ],
                                    [Date.UTC(1970, 10, 10), 0.6 ],
                                    [Date.UTC(1970, 10, 18), 0.7 ],
                                    [Date.UTC(1970, 11,  2), 0.8 ],
                                    [Date.UTC(1970, 11,  9), 0.6 ],
                                    [Date.UTC(1970, 11, 16), 0.6 ],
                                    [Date.UTC(1970, 11, 28), 0.67],
                                    [Date.UTC(1971,  0,  1), 0.81],
                                    [Date.UTC(1971,  0,  8), 0.78],
                                    [Date.UTC(1971,  0, 12), 0.98],
                                    [Date.UTC(1971,  0, 27), 1.84],
                                    [Date.UTC(1971,  1, 10), 1.80],
                                    [Date.UTC(1971,  1, 18), 1.80],
                                    [Date.UTC(1971,  1, 24), 1.92],
                                    [Date.UTC(1971,  2,  4), 2.49],
                                    [Date.UTC(1971,  2, 11), 2.79],
                                    [Date.UTC(1971,  2, 15), 2.73],
                                    [Date.UTC(1971,  2, 25), 2.61],
                                    [Date.UTC(1971,  3,  2), 2.76],
                                    [Date.UTC(1971,  3,  6), 2.82],
                                    [Date.UTC(1971,  3, 13), 2.8 ],
                                    [Date.UTC(1971,  4,  3), 2.1 ],
                                    [Date.UTC(1971,  4, 26), 1.1 ],
                                    [Date.UTC(1971,  5,  9), 0.25],
                                    [Date.UTC(1971,  5, 12), 0   ]
                                ]
                            }, {
                                name: 'Periodo 2008-2009',
                                data: [
                                    [Date.UTC(1970,  9, 18), 0   ],
                                    [Date.UTC(1970,  9, 26), 0.2 ],
                                    [Date.UTC(1970, 11,  1), 0.47],
                                    [Date.UTC(1970, 11, 11), 0.55],
                                    [Date.UTC(1970, 11, 25), 1.38],
                                    [Date.UTC(1971,  0,  8), 1.38],
                                    [Date.UTC(1971,  0, 15), 1.38],
                                    [Date.UTC(1971,  1,  1), 1.38],
                                    [Date.UTC(1971,  1,  8), 1.48],
                                    [Date.UTC(1971,  1, 21), 1.5 ],
                                    [Date.UTC(1971,  2, 12), 1.89],
                                    [Date.UTC(1971,  2, 25), 2.0 ],
                                    [Date.UTC(1971,  3,  4), 1.94],
                                    [Date.UTC(1971,  3,  9), 1.91],
                                    [Date.UTC(1971,  3, 13), 1.75],
                                    [Date.UTC(1971,  3, 19), 1.6 ],
                                    [Date.UTC(1971,  4, 25), 0.6 ],
                                    [Date.UTC(1971,  4, 31), 0.35],
                                    [Date.UTC(1971,  5,  7), 0   ]
                                ]
                            }, {
                                name: 'Periodo 2009-2010',
                                data: [
                                    [Date.UTC(1970,  9,  9), 0   ],
                                    [Date.UTC(1970,  9, 14), 0.15],
                                    [Date.UTC(1970, 10, 28), 0.35],
                                    [Date.UTC(1970, 11, 12), 0.46],
                                    [Date.UTC(1971,  0,  1), 0.59],
                                    [Date.UTC(1971,  0, 24), 0.58],
                                    [Date.UTC(1971,  1,  1), 0.62],
                                    [Date.UTC(1971,  1,  7), 0.65],
                                    [Date.UTC(1971,  1, 23), 0.77],
                                    [Date.UTC(1971,  2,  8), 0.77],
                                    [Date.UTC(1971,  2, 14), 0.79],
                                    [Date.UTC(1971,  2, 24), 0.86],
                                    [Date.UTC(1971,  3,  4), 0.8 ],
                                    [Date.UTC(1971,  3, 18), 0.94],
                                    [Date.UTC(1971,  3, 24), 0.9 ],
                                    [Date.UTC(1971,  4, 16), 0.39],
                                    [Date.UTC(1971,  4, 21), 0   ]
                                ]
                            }]
                        });
                    });
                    
                });
            </script>

		</head>

		<body>

			<script src="js/highcharts.js"></script>
			<script src="js/modules/exporting.js"></script>

			<header>

				<img src="imagenes/mensajesistema.png" width="960px" height="200px" alt="Header Mensaje" title="Mensaje del Sistema" id="cabecera" />

			</header>

			<div id="dialog" title="Notificacion">

                <span id="alert"><?Php echo $message;?></span>

            </div>

            <div id="container"></div>

            <a href="correspondencia_formacion.php"><button id="regresar" class="btn btn-primary">Regresar</button></a>

			<footer>

				<div id="footercontainer">

					<div id="footercon">

						<hr chass="lineafooter" />

						<ul id="links">

							<li><a href="#">INICIO<span>|</span></a></li>			
							<li><a href="#">SOMOS TRANS COAL<span>|</span></a></li>
							<li><a href="#">NUESTRO CARB�N<span>|</span></a></li>
							<li><a href="#">CONTACTO</a></li>

							<p class="copyright">Derechos Reservados � <?Php echo date("Y"); ?> Trans Coal de Venezuela,C.A. - San Francisco - Venezuela <span>|</span> <span> Dise�o y C�digo:Departamento de Sistemas TCV</span></p>

						</ul>

					</div>

				</div>

			</footer>

		</body>
	</html>