<?php 
	include '../util/Constantes.php';
?>
<!DOCTYPE html>
<html lang="pt">
  
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROJETO EFIGÊNIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes"> 
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Daniel Silva - d.nadson@yahoo.com.br" />
	
	
    
    
	<link href="<?= BaseProjeto ?>resources/template2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= BaseProjeto ?>resources/template2/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?= BaseProjeto ?>resources/template2/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
	<link href="<?= BaseProjeto ?>resources/template2/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?= BaseProjeto ?>resources/template2/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Painel de Monitoramento				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
<!-- 					<li class="">						 -->
<!-- 						<a href="signup.html" class=""> -->
<!-- 							Don't have an account? -->
<!-- 						</a> -->
						
<!-- 					</li> -->
					
					<li class="">						
						<a href="<?= BaseProjeto ?>" class="">
							<i class="icon-chevron-left"></i>
							Voltar a home
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1>Acesso restrito</h1>		
			
			<div class="login-fields">
				
				<p>Insira seus dados de acesso</p>
				
				<div class="field">
					<label for="username">CPF</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" required="required" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Senha:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required="required"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
<!-- 				<span class="login-checkbox"> -->
<!-- 					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" /> -->
<!-- 					<label class="choice" for="Field">Keep me signed in</label> -->
<!-- 				</span> -->
									
				<button class="button btn btn-success btn-large">Entrar</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	<a href="#">Esqueci minha senha</a>
</div> <!-- /login-extra -->


<script src="<?= BaseProjeto ?>resources/template2/js/jquery-1.7.2.min.js"></script>
<script src="<?= BaseProjeto ?>resources/template2/js/bootstrap.js"></script>

<script src="<?= BaseProjeto ?>resources/template2/js/signin.js"></script>

</body>

</html>
