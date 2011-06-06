<?php
	require_once 'includes/init.php';
	session_start();
	$usuario_sesion = new Usuario();
	$usuario_sesion->setNombre($_REQUEST['nombre']);
	$usuario_sesion->setEmail($_REQUEST['correo']);
	$ruteoRespuesta = "";
	if ($_REQUEST['keyimg'] == $_SESSION['captcha']) {
		$qry = new GrupoQuery();
		$grupo_obj = $qry->findOneByKeygrupo($_REQUEST['key']);
		if($grupo_obj) {
			$claveConfirma = "";
			$usuario_obj = new Usuario();
			if($usuario_obj->registraUsuario($_REQUEST,$grupo_obj->getIdgrupo(),$claveConfirma)) {
				$usuario_obj->enviaCorreoRegistro($grupo_obj->getNombre());
				$ruteoRespuesta = 1;
			}
			else
				$ruteoRespuesta = -1;
		}
		else
			$ruteoRespuesta = -2;
	}
	else
		$ruteoRespuesta = -3;
	$_SESSION['usuario_sesion'] = $usuario_sesion;
	$_SESSION['key'] = $_REQUEST['key'];
	switch($ruteoRespuesta) {
		case 1:
			header("location: registro_nuevo_respuesta.php?msg=1"); //Registro exitoso...
			break;
		case -1:
			header("location: registro_nuevo_respuesta.php?msg=-1"); //Error de registro, problema en BD...
			break;
		case -2:
			header("location: registro_nuevo_respuesta.php?msg=-2"); //Key de invitación incorrecto...
			break;
		case -3:
			header("location: registro_nuevo_respuesta.php?msg=-3"); //Texto captcha no coincide...
			break;
	}
?>