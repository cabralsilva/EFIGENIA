<?php
	include ("Constantes.php");
	/**
	* 
	*/
	class Banco 
	{
		
		private $con;

		public function getCon()
		{
			return $this->con;	
		}

		public function connect()
		{
			$this->con = new mysqli(URL_BANCO, USR_BANCO, PWD_BANCO, NOME_BANCO) or die('Cannot connect to the DB');
			if (mysqli_connect_errno()) {
			    printf("Connect failed: %s\n", mysqli_connect_error());
			    exit();
			}
			if ($this->con->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			
		}
	}
?>