<?php
	require_once '../util/Banco.php';
	/**
	* 
	*/
	class UsuariosService extends Banco
	{
		
		function __construct()
		{
			parent::connect();
		}

		public function validAccess($usr, $pwd){
			$query = "SELECT usuarios.id_usuario, usuarios.nome, usuarios.pwd FROM usuarios WHERE usuarios.nome = '$usr' AND usuarios.pwd = '$pwd'";
			$result = parent::getCon()->query($query);
			$retorno = array();
			if ($result->num_rows == 1) {
				while ($row = $result->fetch_assoc()){
					$retorno = $row;
				}
				parent::getCon()->close();
				return $retorno;
			}
			parent::getCon()->close();
			return null;
		}
	}
?>