<?php 

require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$data = json_decode($_POST['datos']);
	$nombre = $data[0]->nombre;
	$numero_fiscal = $data[0]->numero_fiscal;
	$segmento = $data[0]->segmento;
	$iata = $data[0]->iata;
	$asociacion = $data[0]->asociacion;
	$consorcio = $data[0]->consorcio;
	$direccion = $data[0]->direccion;
	$ciudad = $data[0]->ciudad;
	$pais = $data[0]->pais;
	$cp = $data[0]->cp;
	$nombre_personal = $data[0]->nombre_personal;
	$apellidos_personal = $data[0]->apellidos_personal;
	$telefono_personal = $data[0]->telefono_personal;
	$email_personal = $data[0]->email_personal;
	$idioma_preferencial = $data[0]->idioma_preferencial;
	$observaciones = $data[0]->observaciones;

	$consulta = $con->ejecutarQuery("insert into agencias (nombre, numero_fiscal, segmento, iata, asociacion, consorcio, direccion, ciudad, pais, cp, nombre_personal, apellidos_personal, telefono_personal, email_personal, idioma_preferencial, observaciones) values ('$nombre', '$numero_fiscal', '$segmento', '$iata', '$asociacion', '$consorcio', '$direccion','$ciudad','$pais','$cp','$nombre_personal','$apellidos_personal','$telefono_personal','$email_personal','$idioma_preferencial','$observaciones')");

	if ($consulta) {
		$response['insertado']='Exitoso';
		echo json_encode($response);
	}else{
		$response['insertado']='Error al insertar';
		echo json_encode($response);

	}
}else{
	$response['conexion']='Fallida';
	echo json_encode($response);
}



?>