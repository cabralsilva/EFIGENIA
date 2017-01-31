<?php 
	include '../util/Constantes.php';
?>
<!-- https://freehtml5.co/demos/aesthetic/portfolio.html -->
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROJETO EFIGÊNIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Daniel Silva - d.nadson@yahoo.com.br" />

  	<!-- Facebook and Twitter integration -->
<!-- 	<meta property="og:title" content=""/> -->
<!-- 	<meta property="og:image" content=""/> -->
<!-- 	<meta property="og:url" content=""/> -->
<!-- 	<meta property="og:site_name" content=""/> -->
<!-- 	<meta property="og:description" content=""/> -->
<!-- 	<meta name="twitter:title" content="" /> -->
<!-- 	<meta name="twitter:image" content="" /> -->
<!-- 	<meta name="twitter:url" content="" /> -->
<!-- 	<meta name="twitter:card" content="" /> -->

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/themify-icons.css">
	<!-- Bootstrap  -->
<!-- 	<link rel="stylesheet" href="../resources/template/css/bootstrap.css"> -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= BaseProjeto ?>resources/template/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?= BaseProjeto ?>resources/template/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 text-right gtco-contact">
					<ul class="">
<!-- 						<li><a href="#"><i class="ti-mobile"></i> +55 (41) 9 9873 0937 </a></li> -->
						<li><a href="#"><i class="ti-twitter-alt"></i> </a></li>
						<li><a href="#"><i class="icon-mail2"></i></a></li>
						<li><a href="#"><i class="ti-facebook"></i></a></li>
						<li><a href="login" class="btn btn-white btn-outline btn-painel-cliente">Painel do cliente</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 col-xs-12">
					<div id="gtco-logo"><a href="index.php">PROJETO EFIGÊNIA <span class="texto_logo_secundario">MONITORAMENTO DE PACIENTES</span> <em>.</em></a></div>
				</div>
				<div class="col-xs-6 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Início</a></li>
						<li><a href="#">Entenda</a></li>
						<li class="has-dropdown">
							<a href="#">Conheça-nos</a>
							<ul class="dropdown">
								<li><a href="#">Nosso time</a></li>
								<li><a href="#">Em que acreditamos</a></li>
								<li><a href="#">Porque acreditamos</a></li>
								<li><a href="#">O que queremos</a></li>
							</ul>
						</li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(<?= BaseProjeto ?>resources/template/images/img_bg_6.jpg); background-size: 100% 100%;">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">A tecnologia em favor da vida</h1>
<!-- 							<h2 class="animate-box" data-animate-effect="fadeInUp">...<em>..</em> <a href="#" target="_blank">..</a></h2> -->
<!-- 							<p class="animate-box" data-animate-effect="fadeInUp"><a href="#" class="btn btn-white btn-lg btn-outline">...</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="gtco-features-3">
		<div class="gtco-container">
			<div class="gtco-flex">
				<div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
						<h3>Confiabilidade + Segurança</h3>
						<p>Algoritmos de inteligência computacional inseridos em uma infraestrutura de servidores que garantem a disponibilização dos serviços de monitoramento remoto 24 horas por dia,  proporcionando segurança as informações prestadas.  </p>
<!-- 						<p><a href="#" class="btn btn-white btn-outline">Learn More</a></p> -->
					</div>
				</div>
				<div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="glyphicon glyphicon-globe"></i>
						</span>
						<h3>Liberdade</h3>
						<p>Pensado e desenvolvido para que o usuário não mude sua rotina durante a coleta dos dados, assim o sistema conta com informações reais do cotidiano do paciente acerca da frequência cardíaca e saturação sanguínea. </p>
<!-- 						<p><a href="#" class="btn btn-white btn-outline">Learn More</a></p> -->
					</div>
				</div>
				<div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-timer"></i>
						</span>
						<h3>Alertas em tempo real</h3>
						<p>Dados coletados e armazenados em tempo real em uma base de dados centralizada, sendo analisados por algoritmos  que  enviam alertas caso  alguma  anormalidade seja detectada.  </p>
<!-- 						<p><a href="#" class="btn btn-white btn-outline">Learn More</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- 	<div id="gtco-features"> -->
<!-- 		<div class="gtco-container"> -->
<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box"> -->
<!-- 					<h2>Aesthetic Features</h2> -->
<!-- 					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-3 col-sm-6"> -->
<!-- 					<div class="feature-center animate-box" data-animate-effect="fadeIn"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-vector"></i> -->
<!-- 						</span> -->
<!-- 						<h3>Pixel Perfect</h3> -->
<!-- 						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-3 col-sm-6"> -->
<!-- 					<div class="feature-center animate-box" data-animate-effect="fadeIn"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-tablet"></i> -->
<!-- 						</span> -->
<!-- 						<h3>Fully Responsive</h3> -->
<!-- 						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-3 col-sm-6"> -->
<!-- 					<div class="feature-center animate-box" data-animate-effect="fadeIn"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-settings"></i> -->
<!-- 						</span> -->
<!-- 						<h3>Web Development</h3> -->
<!-- 						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-3 col-sm-6"> -->
<!-- 					<div class="feature-center animate-box" data-animate-effect="fadeIn"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-ruler-pencil"></i> -->
<!-- 						</span> -->
<!-- 						<h3>Web Design</h3> -->
<!-- 						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->

<!-- 	<div id="gtco-portfolio" class="gtco-section"> -->
<!-- 		<div class="gtco-container"> -->
<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box"> -->
<!-- 					<h2>Our Latest Works</h2> -->
<!-- 					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
<!-- 				</div> -->
<!-- 			</div> -->

<!-- 			<div class="row row-pb-md"> -->
<!-- 				<div class="col-md-12"> -->
<!-- 					<ul id="gtco-portfolio-list"> -->
<!-- 						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../resources/template/images/img_1.jpg); "> -->
<!-- 							<a href="#" class="color-1"> -->
<!-- 								<div class="case-studies-summary"> -->
<!-- 									<span>Web Design</span> -->
<!-- 									<h2>View the Earth from the Outer Space</h2> -->
<!-- 								</div> -->
<!-- 							</a> -->
<!-- 						</li> -->
<!-- 						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../resources/template/images/img_2.jpg); ">-->
<!-- 							<a href="#" class="color-2"> -->
<!-- 								<div class="case-studies-summary"> -->
<!-- 									<span>Illustration</span> -->
<!-- 									<h2>Sleeping in the Cold Blue Water</h2> -->
<!-- 								</div> -->
<!-- 							</a> -->
<!-- 						</li> -->


<!-- 						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(../resources/template/images/img_3.jpg); ">-->
<!-- 							<a href="#" class="color-3"> -->
<!-- 								<div class="case-studies-summary"> -->
<!-- 									<span>Illustration</span> -->
<!-- 									<h2>Building Builded by Man</h2> -->
<!-- 								</div> -->
<!-- 							</a> -->
<!-- 						</li> -->
<!-- 						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(../resources/template/images/img_4.jpg); ">-->
<!-- 							<a href="#" class="color-4"> -->
<!-- 								<div class="case-studies-summary"> -->
<!-- 									<span>Web Design</span> -->
<!-- 									<h2>The Peaceful Place On Earth</h2> -->
<!-- 								</div> -->
<!-- 							</a> -->
<!-- 						</li> -->

<!-- 						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../resources/template/images/img_5.jpg); ">--> 
<!-- 							<a href="#" class="color-5"> -->
<!-- 								<div class="case-studies-summary"> -->
<!-- 									<span>Web Design</span> -->
<!-- 									<h2>I'm Getting Married</h2> -->
<!-- 								</div> -->
<!-- 							</a> -->
<!-- 						</li> -->
<!-- 						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(../resources/template/images/img_6.jpg); ">-->
<!-- 							<a href="#" class="color-6"> -->
<!-- 								<div class="case-studies-summary"> -->
<!-- 									<span>Illustration</span> -->
<!-- 									<h2>Beautiful Flowers In The Air</h2> -->
<!-- 								</div> -->
<!-- 							</a> -->
<!-- 						</li> -->
<!-- 					</ul>		 -->
<!-- 				</div> -->
<!-- 			</div> -->

<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-4 col-md-offset-4 text-center animate-box"> -->
<!-- 					<a href="#" class="btn btn-white btn-outline btn-lg btn-block">See All Our Works</a> -->
<!-- 				</div> -->
<!-- 			</div> -->

			
<!-- 		</div> -->
<!-- 	</div> -->

<!-- 	<div id="gtco-counter" class="gtco-section"> -->
<!-- 		<div class="gtco-container"> -->

<!-- 			<div class="row"> -->
<!-- 				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box"> -->
<!-- 					<h2>Fun Facts</h2> -->
<!-- 					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
<!-- 				</div> -->
<!-- 			</div> -->

<!-- 			<div class="row"> -->
				
<!-- 				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft"> -->
<!-- 					<div class="feature-center"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-settings"></i> -->
<!-- 						</span> -->
<!-- 						<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span> -->
<!-- 						<span class="counter-label">Creativity Fuel</span> -->

<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft"> -->
<!-- 					<div class="feature-center"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-face-smile"></i> -->
<!-- 						</span> -->
<!-- 						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span> -->
<!-- 						<span class="counter-label">Happy Clients</span> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft"> -->
<!-- 					<div class="feature-center"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-briefcase"></i> -->
<!-- 						</span> -->
<!-- 						<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span> -->
<!-- 						<span class="counter-label">Projects Done</span> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft"> -->
<!-- 					<div class="feature-center"> -->
<!-- 						<span class="icon"> -->
<!-- 							<i class="ti-time"></i> -->
<!-- 						</span> -->
<!-- 						<span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span> -->
<!-- 						<span class="counter-label">Hours Spent</span> -->

<!-- 					</div> -->
<!-- 				</div> -->
					
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->

<!-- 	<div id="gtco-products"> -->
<!-- 		<div class="gtco-container"> -->
<!-- 			<div class="row animate-box"> -->
<!-- 				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box"> -->
<!-- 					<h2>Products</h2> -->
<!-- 					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="row animate-box"> -->
<!-- 				<div class="owl-carousel owl-carousel-carousel"> -->
<!-- 					<div class="item"> -->
<!-- 						<img src="../resources/template/images/img_1.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co"> -->
<!-- 					</div> -->
<!-- 					<div class="item"> -->
<!-- 						<img src="../resources/template/images/img_2.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co"> -->
<!-- 					</div> -->
<!-- 					<div class="item"> -->
<!-- 						<img src="../resources/template/images/img_3.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co"> -->
<!-- 					</div> -->
<!-- 					<div class="item"> -->
<!-- 						<img src="../resources/template/images/img_4.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co"> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->


<!-- 	<div id="gtco-subscribe"> -->
<!-- 		<div class="gtco-container"> -->
<!-- 			<div class="row animate-box"> -->
<!-- 				<div class="col-md-8 col-md-offset-2 text-center gtco-heading"> -->
<!-- 					<h2>Subscribe</h2> -->
<!-- 					<p>Be the first to know about the new templates.</p> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 			<div class="row animate-box"> -->
<!-- 				<div class="col-md-12"> -->
<!-- 					<form class="form-inline"> -->
<!-- 						<div class="col-md-4 col-sm-4"> -->
<!-- 							<div class="form-group"> -->
<!-- 								<label for="email" class="sr-only">Email</label> -->
<!-- 								<input type="email" class="form-control" id="email" placeholder="Your Email"> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="col-md-4 col-sm-4"> -->
<!-- 							<div class="form-group"> -->
<!-- 								<label for="name" class="sr-only">Name</label> -->
<!-- 								<input type="text" class="form-control" id="name" placeholder="Your Name"> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="col-md-4 col-sm-4"> -->
<!-- 							<button type="submit" class="btn btn-default btn-block">Subscribe</button> -->
<!-- 						</div> -->
<!-- 					</form> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Sobre nós</h3>
						<p>Projeto de autoria LWD. Uma startup norte mineira que acredita no poder da engenharia na transformação da sociedade.</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">LDW Engenharia e Tecnologia</a></li>
							<li><a href="#">Parceiros</a></li>
							<li><a href="#">Termos de Serviço</a></li>
							<li><a href="#">Política de Privacidade</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Contate-nos</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +55 41 9 9873 0937</a></li>
							<li><a href="#"><i class="icon-mail2"></i> contato@ldwengenharia.com.br</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2017. All Rights Reserved.</small> 
						<small class="block">Desenvolvido por <a href="#" target="_blank">LDW Engenharia e Tecnologia</a>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?= BaseProjeto ?>resources/template/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= BaseProjeto ?>resources/template/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= BaseProjeto ?>resources/template/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= BaseProjeto ?>resources/template/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?= BaseProjeto ?>resources/template/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?= BaseProjeto ?>resources/template/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?= BaseProjeto ?>resources/template/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= BaseProjeto ?>resources/template/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="<?= BaseProjeto ?>resources/template/js/main.js"></script>
</body>
</html>