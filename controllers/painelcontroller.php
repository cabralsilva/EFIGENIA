<?php
	require_once ("../services/LeiturasService.php");
	require_once ("../services/PacientesService.php");
	require_once ("../services/UsuariosService.php");

	function invalidAccess(){
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
	}
	if (isset($_POST['servico'])){
		switch ($_POST['servico']) {
			case 'getHistorical':
				$ls = new LeiturasService();
				$listHistorical = $ls->getHistorical($_POST['idpaciente'], $_POST['qtde']);
// 				header('Content-type: application/json');
				echo json_encode($listHistorical);
				break;
			case 'getHistoricalSync':
				$ls = new LeiturasService();
				$listSync = $ls->getSync($_POST['idpaciente'], $_POST['lastread']);
				if (count($listSync) > 0){
					header('Content-type: application/json');
					echo json_encode($listSync);
				}else{
					header('Content-type: application/json');
					echo json_encode(null);
				}
				break;
			default:
				# code...
				break;
		}
	}else invalidAccess();

/*
	if(isset($_GET['user']) && isset($_GET['pwd'])) {
		$us = new UsuariosService();
		$ret = $us->validAccess($_GET['user'], $_GET['pwd']);
		if ($ret !== null){
			$iccid = isset($_GET['iccid']) ? $_GET['iccid'] : null; 
			$serie = isset($_GET['num_serie']) ? $_GET['num_serie'] : null;
			$idUsuario = $ret["id_usuario"];
			$ps = new PacientesService();
			$ret = $ps->getPacienteByDispositivo($iccid, $serie);
			if ($ret !== null){
				if ($ret["status"] == 1){
					$data_hora_leitura = isset($_GET['datahora']) ? $_GET['datahora'] : null;
					$freq_cardiaca = isset($_GET['freq_cardiaca']) ? intval($_GET['freq_cardiaca']) : null; 
					$sao2 = isset($_GET['sao2']) ? $_GET['sao2'] : null; 
					$ls = new LeiturasService();
					$ls->insertRead($ret['id_pacientes'], $ret['id_dispositivos'], $idUsuario, $data_hora_leitura, $freq_cardiaca, $sao2);

					$retornoWs = array('STATUS' => 1);
					header('Content-type: application/json');
					echo json_encode($retornoWs);
				}else invalidAccess();
			}else invalidAccess();
		}else invalidAccess();	
	}else invalidAccess();*/
?>