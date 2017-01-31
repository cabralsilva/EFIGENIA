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

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="<?= BaseProjeto ?>resources/template2/css/font-awesome.css"
	rel="stylesheet">
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
	rel="stylesheet">

<link href="<?= BaseProjeto ?>resources/template2/css/style.css"
	rel="stylesheet" type="text/css">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!--     GRÁFICOS -->

<!-- GLOBAL STYLES -->
<!-- PAGE LEVEL STYLES SHOULD BE PLACED AT TOP FOR RESIZING OF CHARTS -->
<link
	href="<?= BaseProjeto ?>resources/template3/assets/plugins/flot/examples/examples.css"
	rel="stylesheet" />
<!-- END PAGE LEVEL  STYLES -->

</head>

<body>

	<div class="navbar navbar-fixed-top">

		<div class="navbar-inner">

			<div class="container">

				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="index.html"> Painel de Monitoramento </a>

				<!-- 				<div class="nav-collapse"> -->
				<!-- 					<ul class="nav pull-right"> -->
				<!-- 						<li class="dropdown"><a href="#" class="dropdown-toggle" -->
				<!-- 							data-toggle="dropdown"> <i class="icon-cog"></i> Account <b -->
				<!-- 								class="caret"></b> -->
				<!-- 						</a> -->

				<!-- 							<ul class="dropdown-menu"> -->
				<!-- 								<li><a href="javascript:;">Settings</a></li> -->
				<!-- 								<li><a href="javascript:;">Help</a></li> -->
				<!-- 							</ul></li> -->

				<!-- 						<li class="dropdown"><a href="#" class="dropdown-toggle" -->
				<!-- 							data-toggle="dropdown"> <i class="icon-user"></i> EGrappler.com <b -->
				<!-- 								class="caret"></b> -->
				<!-- 						</a> -->

				<!-- 							<ul class="dropdown-menu"> -->
				<!-- 								<li><a href="javascript:;">Profile</a></li> -->
				<!-- 								<li><a href="javascript:;">Logout</a></li> -->
				<!-- 							</ul></li> -->
				<!-- 					</ul> -->

				<!-- 					<form class="navbar-search pull-right"> -->
				<!-- 						<input type="text" class="search-query" placeholder="Search"> -->
				<!-- 					</form> -->

				<!-- 				</div> -->
				<!--/.nav-collapse -->

			</div>
			<!-- /container -->

		</div>
		<!-- /navbar-inner -->

	</div>
	<!-- /navbar -->





	<div class="subnavbar">

		<div class="subnavbar-inner">

			<div class="container">

				<ul class="mainnav">

					<li class="active"><a href="<?= BaseSite ?>dashboard"> <i
							class="icon-dashboard"></i> <span>Dashboard</span>
					</a></li>
					<li></li>



					<!-- 					<li><a href="reports.html"> <i class="icon-list-alt"></i> <span>Reports</span> -->
					<!-- 					</a></li> -->

					<!-- 					<li><a href="guidely.html"> <i class="icon-facetime-video"></i> <span>App -->
					<!-- 								Tour</span> -->
					<!-- 					</a></li> -->


					<!-- 					<li><a href="charts.html"> <i class="icon-bar-chart"></i> <span>Charts</span> -->
					<!-- 					</a></li> -->


					<!-- 					<li class="active"><a href="shortcodes.html"> <i class="icon-code"></i> -->
					<!-- 							<span>Shortcodes</span> -->
					<!-- 					</a></li> -->

					<!-- 					<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" -->
					<!-- 						data-toggle="dropdown"> <i class="icon-long-arrow-down"></i> <span>Drops</span> -->
					<!-- 							<b class="caret"></b> -->
					<!-- 					</a> -->

					<!-- 						<ul class="dropdown-menu"> -->
					<!-- 							<li><a href="icons.html">Icons</a></li> -->
					<!-- 							<li><a href="faq.html">FAQ</a></li> -->
					<!-- 							<li><a href="pricing.html">Pricing Plans</a></li> -->
					<!-- 							<li><a href="login.html">Login</a></li> -->
					<!-- 							<li><a href="signup.html">Signup</a></li> -->
					<!-- 							<li><a href="error.html">404</a></li> -->
					<!-- 						</ul></li> -->

				</ul>

			</div>
			<!-- /container -->

		</div>
		<!-- /subnavbar-inner -->

	</div>
	<!-- /subnavbar -->

	<div class="main">

		<div class="main-inner">

			<div class="container">
				<div class="row">

					<div class="span12">

						<div class="widget ">

							<div class="widget-header">
								<i class="icon-user"></i>
								<h3>Paciente</h3>
							</div>
							<!-- /widget-header -->

							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#formcontrols" data-toggle="tab">Indicadores</a>
										</li>
										<!-- 										<li><a href="#jscontrols" data-toggle="tab">Ficha do paciente</a></li> -->
									</ul>

									<br>

									<div class="tab-content">
										<div class="tab-pane active" id="formcontrols">

											<!-- 													<div class="demo-container"> -->
											<!-- 														<div id="placeholderRT" class="demo-placeholder"></div> -->
											<!-- 													</div> -->
											<div class="panel panel-default">

												<div class="panel-body">
													<div class="row">
														<div class="col-md-6">
															<div class="demo-container">
																<div id="placeholderRT" class="demo-placeholder"></div>
															</div>
														</div>
														<div class="col-md-6">
															GRAFICO LAST READ
														</div>
													</div>
												</div>
											</div>

											<!-- 										<div class="tab-pane" id="jscontrols"> -->
											<!-- 											Preparando ficha do paciente -->
											<!-- 										</div> -->

										</div>


									</div>


								</div>




							</div>
							<!-- /widget-content -->

						</div>
						<!-- /widget -->

					</div>
					<!-- /span8 -->




				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /main-inner -->

	</div>
	<!-- /main -->




	<div class="extra">

		<div class="extra-inner">

			<div class="container">

				<div class="row">
					<div class="span3">
						<!-- 						<h4>About Free Admin Template</h4> -->
						<!-- 						<ul> -->
						<!-- 							<li><a href="javascript:;">EGrappler.com</a></li> -->
						<!-- 							<li><a href="javascript:;">Web Development Resources</a></li> -->
						<!-- 							<li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li> -->
						<!-- 							<li><a href="javascript:;">Free Resources and Scripts</a></li> -->
						<!-- 						</ul> -->
					</div>
					<!-- /span3 -->
					<div class="span3">
						<!-- 						<h4>Support</h4> -->
						<!-- 						<ul> -->
						<!-- 							<li><a href="javascript:;">Frequently Asked Questions</a></li> -->
						<!-- 							<li><a href="javascript:;">Ask a Question</a></li> -->
						<!-- 							<li><a href="javascript:;">Video Tutorial</a></li> -->
						<!-- 							<li><a href="javascript:;">Feedback</a></li> -->
						<!-- 						</ul> -->
					</div>
					<!-- /span3 -->
					<div class="span3">
						<!-- 						<h4>Something Legal</h4> -->
						<!-- 						<ul> -->
						<!-- 							<li><a href="javascript:;">Read License</a></li> -->
						<!-- 							<li><a href="javascript:;">Terms of Use</a></li> -->
						<!-- 							<li><a href="javascript:;">Privacy Policy</a></li> -->
						<!-- 						</ul> -->
					</div>
					<!-- /span3 -->
					<div class="span3">
						<!-- 						<h4>Open Source jQuery Plugins</h4> -->
						<!-- 						<ul> -->
						<!-- 							<li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li> -->
						<!-- 							<li><a href="http://www.egrappler.com;">HTML5 Responsive -->
						<!-- 									Tempaltes</a></li> -->
						<!-- 							<li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li> -->
						<!-- 							<li><a href="http://www.egrappler.com;">Flat UI PSD</a></li> -->
						<!-- 						</ul> -->
					</div>
					<!-- /span3 -->
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /extra-inner -->

	</div>
	<!-- /extra -->




	<div class="footer">

		<div class="footer-inner">

			<div class="container">

				<div class="row">

					<div class="span12">
						&copy; 2017 . All Rights Reserved. <br>Desenvolvido por <a
							href="#" target="_blank">LDW Engenharia e Tecnologia</a>.
					</div>
					<!-- /span12 -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /footer-inner -->

	</div>
	<!-- /footer -->



	<script
		src="<?= BaseProjeto ?>resources/template2/js/jquery-1.7.2.min.js"></script>

	<script src="<?= BaseProjeto ?>resources/template2/js/bootstrap.js"></script>
	<script src="<?= BaseProjeto ?>resources/template2/js/base.js"></script>

	<!-- 	GRÁFICOS -->
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
	<!-- 	FIM GRÁFICOS -->

</body>

</html>
