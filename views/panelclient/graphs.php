<?php
include '../../util/Constantes.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PROJETO EFIGÊNIA</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Daniel Silva - d.nadson@yahoo.com.br" />

<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
<!-- GLOBAL STYLES -->
<!-- PAGE LEVEL STYLES SHOULD BE PLACED AT TOP FOR RESIZING OF CHARTS -->
<link
	href="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/examples/examples.css"
	rel="stylesheet" />
<!-- END PAGE LEVEL  STYLES -->

<!-- GLOBAL STYLES -->
<link rel="stylesheet"
	href="<?= BaseProjeto ?>resources/template3/assets/plugins/bootstrap/css/bootstrap.css" />
<link rel="stylesheet"
	href="<?= BaseProjeto ?>resources/template3/assets/css/main.css" />
<link rel="stylesheet"
	href="<?= BaseProjeto ?>resources/template3/assets/css/theme.css" />
<link rel="stylesheet"
	href="<?= BaseProjeto ?>resources/template3/assets/css/MoneAdmin.css" />
<link rel="stylesheet"
	href="<?= BaseProjeto ?>resources/template3/assets/plugins/Font-Awesome/css/font-awesome.css" />
<!--END GLOBAL STYLES -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="padTop53 ">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Real Time</div>

							<div class="panel-body">

								<div class="demo-container">
									<div id="placeholderRT" class="demo-placeholder"></div>
								</div>
							</div>

						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Tracking Chart</div>

							<div class="panel-body">

								<div class="demo-container">
									<div id="placeholderTra" class="demo-placeholder"></div>
								</div>
							</div>

						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Toggling Chart</div>

							<div class="panel-body">
								<div class="demo-container">
									<div id="placeholderTog" class="demo-placeholder"
										style="float: left; width: 675px;"></div>
									<p id="choices" style="float: right; width: 135px;"></p>
								</div>


							</div>

						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Multiple axes</div>

							<div class="panel-body">

								<div class="demo-container">
									<div id="placeholder" class="demo-placeholder"></div>
								</div>

							</div>

						</div>



						<div class="panel panel-default">
							<div class="panel-heading">Symbol Chart</div>

							<div class="panel-body">
								<div class="demo-container">
									<div id="placeholderS" class="demo-placeholder"
										style="float: left; width: 675px;"></div>
								</div>


							</div>

						</div>
					</div>
				</div>

		<!--END PAGE CONTENT -->

	<!-- FOOTER -->
	<div id="footer">
		<p>&copy; binarytheme &nbsp;2014 &nbsp;</p>
	</div>
	<!--END FOOTER -->


	<!-- GLOBAL SCRIPTS -->
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/jquery-2.0.3.min.js"></script>
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<!-- END GLOBAL SCRIPTS -->

	<!-- PAGE LEVEL SCRIPTS -->

	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/jquery.flot.js"></script>
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/jquery.flot.resize.js"></script>
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/jquery.flot.time.js"></script>
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/jquery.flot.symbol.js"></script>

	<script
		src="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/jquery.flot.crosshair.js"></script>
	<script
		src="<?= BaseProjeto ?>resources/template3/assets/js/line_chart.js"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>