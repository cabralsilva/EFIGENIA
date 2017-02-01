<?php
	require_once '../util/Banco.php';
	/**
	* 
	*/
	class LeiturasService extends Banco
	{
		
		function __construct()
		{
			parent::connect();
		}

		public function insertRead($idPaciente, $idDispositivo, $idUsuario, $data, $freqCard, $sao2){
			$query = "INSERT INTO leituras(data_leitura, frequencia_cardiaca, sao2, fk_paciente, fk_dispositivo, fk_usuario) values (STR_TO_DATE('$data', '%Y-%m-%d %H:%i:%s'), $freqCard, $sao2, $idPaciente, $idDispositivo, $idUsuario)";
			if (parent::getCon()->query($query) !== TRUE) {
			    echo "Error: " . $query . "<br>" . parent::getCon()->error;
			} 
			parent::getCon()->close();
		}

		public function getHistorical($idPaciente,$qtdRegister)
		{
			$query = "SELECT leituras.* FROM leituras WHERE leituras.fk_paciente = $idPaciente ORDER BY leituras.id_leituras DESC LIMIT $qtdRegister";
			$result = parent::getCon()->query($query);
			$retorno = array();
			while ($row = $result->fetch_assoc()){
				array_push($retorno, $row);
			}
			parent::getCon()->close();
			return $retorno;	
		}

		public function getSync($idPaciente, $lastRead)
		{
			$query = "SELECT leituras.* FROM leituras WHERE leituras.fk_paciente = $idPaciente AND leituras.id_leituras > $lastRead ORDER BY leituras.id_leituras DESC";
			$result = parent::getCon()->query($query);
			$retorno = array();
			while ($row = $result->fetch_assoc()){
				array_push($retorno, $row);
			}
			parent::getCon()->close();
			return $retorno;
		}
	}
?>