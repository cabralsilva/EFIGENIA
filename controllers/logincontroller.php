<?php
	header('Access-Control-Allow-Origin: *');
	require_once '../services/UsuariosService.php';
	class LoginController{
		
		function __construct() {
			session_start();
			
		}
		
		public function AutenticarAcesso($usr, $pwd){
			$us = new UsuariosService();
			$usuario = $us->validAccess($usr, $pwd);
			if ($usuario != null) $_SESSION["USUARIO"] = $usuario;
			else session_destroy();
			echo  json_encode($usuario);
		}
		
	}
	
	if (isset($_POST["servico"])){
		switch ($_POST["servico"]){
			case "autenticarAcesso":
				$lc = new LoginController();
				$lc->AutenticarAcesso($_POST["usr"], $_POST["pwd"]);
				break;
		}
	}
	
?>