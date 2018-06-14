<?php 
require('./conexion.php');
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('emblema');

if ($response['conexion']=='OK') {
	$data = json_decode($_POST["datos"]);

	$nombre = $data[0]->nombre;
	$direccion = $data[0]->direccion;
	$poblacion = $data[0]->poblacion;
	$pais = $data[0]->pais;
	$email = $data[0]->email;
	$telefono = $data[0]->telefono;
	$servicios = $data[0]->servicios;
	$llegada = $data[0]->llegada;
	$salida = $data[0]->salida;
	$num_adultos = $data[0]->num_adultos;
	$num_ninos = $data[0]->num_ninos;
	$edad_ninos = $data[0]->edad_ninos;
	$observaciones = $data[0]->observaciones;
	$servicios_encode = json_encode($servicios);

	$consulta = $con->ejecutarQuery("insert into clientes (nombre, direccion, poblacion, pais, email, telefono) values ('$nombre', '$direccion', '$poblacion', '$pais', '$email', '$telefono')");
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