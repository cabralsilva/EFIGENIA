<?php
	require_once '../util/Banco.php';

	/**
	* 
	*/
	class PacientesService extends Banco
	{
		
		function __construct()
		{
			parent::connect();
		}

		public function getPacienteByDispositivo($iccid, $numSerie){
			$idPaciente = null;
			$query = "SELECT pacientes.id_pacientes, dispositivos.id_dispositivos, dispositivos.iccid, dispositivos.numero_serie, dispositivos.status FROM pacientes 
						LEFT OUTER JOIN dispositivos ON pacientes.fk_dispositivo = dispositivos.id_dispositivos 
						WHERE dispositivos.iccid = $iccid AND dispositivos.numero_serie = $numSerie";
			$result = parent::getCon()->query($query);
			$retorno = array();
			//print_r($result);
			//die();
			//if ($result != null){
				if ($result->num_rows == 1) {
					while ($row = $result->fetch_assoc()){
						$retorno = $row;
					}
					parent::getCon()->close();
					return $retorno;
				}
				parent::getCon()->close();
			//}
			
			return null;
		}
	}
?>