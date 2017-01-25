<?php
	require_once ("../services/LeiturasService.php");
	require_once ("../services/PacientesService.php");
	require_once ("../services/UsuariosService.php");

	function invalidAccess(){
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
	}
	if(isset($_GET['user']) && isset($_GET['pwd'])) {
		$us = new UsuariosService();
		$ret = $us->validAccess($_GET['user'], $_GET['pwd']);
		if ($ret !== null){
			$iccid = isset($_GET['iccid']) ? $_GET['iccid'] : null; 
			$serie = isset($_GET['num_serie']) ? $_GET['num_serie'] : null;
			$idUsuario = $ret["id_usuario"];
			$ps = new PacientesService();
			$ret = $ps->getPacienteByDispositivo($iccid, $serie);
			//echo ($ret);
			//die("Parei");
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
	}else if(isset($_GET['teste'])){
		echo $_GET['teste'];
	}else invalidAccess();

	//GET /efigenia/controllers/ws.php?teste=testes HTTP/1.0
	//Host: 192.168.0.101
?>