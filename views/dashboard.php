<?php ?>
	<!DOCTYPE html>
	<html lang="pt">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="../resources/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
			<link rel="stylesheet" href="../resources/css/styles.css"/>
			<script type="text/javascript" src="../resources/js/jquery1.12.4.min.js"></script>
			<script type="text/javascript" src="../resources/js/loader.js"></script>
			<script type="text/javascript" src="../resources/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

		</head>
		<body>
			<div class="container">
			 	<div class="row">
			 		<div class="panel panel-default">
					  	<div class="panel-heading">Painel de monitoramento</div>
					  	<div class="panel-body">
					  		<div class="col-md-6 hcenter">
			  					<div id="chart_div" ></div>
						  	</div>
						  	<div class="col-md-6 hcenter">
						  		<div id="donutchart" ></div>
						  	</div>
					  	</div>
					</div>
				</div>
			</div>
		<script type="text/javascript">
			var listRead;
			var dataHistorical, chartHistorical, optionsHistorical;
			var dataDonut, chartDonut, optionsDonut;

			var arrayDH = [];
			$(document).ready(function(){
				$.ajax({
					url: "http://localhost/efigenia/controllers/painelcontroller.php",
					type: 'POST',
					data: {
						servico: 'getHistorical30',
						idpaciente: 1
					},
					success: function(e){
						listRead = e;
						setGraph(listRead);
						
						/*$.each(e, function(index, value) {
						    console.log(value);
						}); */
						//console.log('Retorno ' + e);
						//var lista = JSON.parse(e);
					},
					error: function(e){
						console.log('FALHA');
					}
				});
			});

			function setGraph(listRead) {
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				$.each(listRead, function(index, value) {
					var sao2 = parseFloat(value["sao2"]);
					var array = [value["data_leitura"], sao2];
					arrayDH.push(array);
				    
				});

				
			}
			function drawChart() {
				dataHistorical = new google.visualization.DataTable();
				dataHistorical.addColumn('string', 'Horário');
				dataHistorical.addColumn('number', 'Saturação');
				console.log(arrayDH[arrayDH.length-1][1]);

				dataHistorical.addRows(
					arrayDH
				);

				optionsHistorical = {
					hAxis: {
					  	title: 'Horário',
					  	viewWindow: {
					  		min: 0,
					  		max: arrayDH.length
					  	}
					},
					vAxis: {
					  	title: 'SaO2'
					},
					backgroundColor: '#f1f8e9',
					legend: 'none'
				};

				chartHistorical = new google.visualization.LineChart(document.getElementById('chart_div'));
				chartHistorical.draw(dataHistorical, optionsHistorical);
				    
				dataDonut = google.visualization.arrayToDataTable([
				  	['Saturação', 'Valor'],
				  	['', 100-(arrayDH[arrayDH.length-1][1])],
				  	['SaO2', arrayDH[arrayDH.length-1][1]]
				]);

				optionsDonut = {
				  	title: 'SaO2',
				  	pieHole: 0.4,
				  	pieSliceTextStyle: {
		            	color: 'black',
		          	},
		          	pieStartAngle: (arrayDH[arrayDH.length-1][1])*3.6,
		          	slices: {
			            0: { color: 'gray', textStyle: {color: 'transparent'} },
			        	1: { color: 'green', textStyle: {fontSize: 18}}
		          	},
		          	tooltip: { trigger: 'none' },
		          	legend: 'none',
		          	backgroundColor: '#f1f8e9',
				};

				chartDonut = new google.visualization.PieChart(document.getElementById('donutchart'));
				chartDonut.draw(dataDonut, optionsDonut);
			}
/*
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			var dataHistorical, chartHistorical, optionsHistorical;
			var dataDonut, chartDonut, optionsDonut;
*/
/*
			function drawChart() {
				dataHistorical = new google.visualization.DataTable();
				dataHistorical.addColumn('string', 'Tempo');
				dataHistorical.addColumn('number', 'Valores');

				dataHistorical.addRows([
					['2003', 59]
				]);

				optionsHistorical = {
					hAxis: {
					  	title: 'Tempo',
					  	viewWindow: {
					  		min: 0,
					  		max: 30
					  	}
					},
					vAxis: {
					  	title: 'SaO2'
					},
					backgroundColor: '#f1f8e9',
					legend: 'none'
				};

				chartHistorical = new google.visualization.LineChart(document.getElementById('chart_div'));
				chartHistorical.draw(dataHistorical, optionsHistorical);
				    
				dataDonut = google.visualization.arrayToDataTable([
				  	['Saturação', 'Valor'],
				  	['',     100-74],
				  	['SaO2',     74]
				]);

				optionsDonut = {
				  	title: 'SaO2',
				  	pieHole: 0.4,
				  	pieSliceTextStyle: {
		            	color: 'black',
		          	},
		          	pieStartAngle: 74*3.6,
		          	slices: {
			            0: { color: 'gray', textStyle: {color: 'transparent'} },
			        	1: { color: 'green', textStyle: {fontSize: 18}}
		          	},
		          	tooltip: { trigger: 'none' },
		          	legend: 'none',
		          	backgroundColor: '#f1f8e9',
				};

				chartDonut = new google.visualization.PieChart(document.getElementById('donutchart'));
				chartDonut.draw(dataDonut, optionsDonut);
			}
*/


			//ATUALIZAÇÕES
			var ano = 2007;
			var Sat = 74;


			var intervalID = setInterval(function(){
				//console.log(listRead[listRead.length-1]["id_leituras"]);

				$(document).ready(function(){
					$.ajax({
						url: "http://localhost/efigenia/controllers/painelcontroller.php",
						type: 'POST',
						data: {
							servico: 'getHistoricalSync',
							idpaciente: 1,
							lastread: listRead[listRead.length-1]["id_leituras"]
						},
						success: function(e){
							console.log(e);
						},
						error: function(e){
							console.log('FALHA');
						}
					});
				});

				/*

				ano++;
				Sat += 5;
				dataHistorical.addRows([
		  			[ano.toString(), Sat]
				]);
				//optionsHistorical.hAxis.viewWindow.min += 1;
				optionsHistorical.hAxis.viewWindow.max += 1;
				chartHistorical.draw(dataHistorical, optionsHistorical);

				
				if (Sat >= 100) Sat = 75;
				dataDonut = google.visualization.arrayToDataTable([
					['Saturação', 'Valor'],
				  	['',     100-Sat],
				  	['SaO2',     Sat]
				]);
				optionsDonut.pieStartAngle = Sat*3.6;
				chartDonut.draw(dataDonut, optionsDonut);
*/
				}, 1000
			);
			</script>
		</body>
	</html>
