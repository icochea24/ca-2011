<?php
	require_once 'includes/init.php';
	session_start();
	if(!isset($_REQUEST['op'])) {
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
					$usuario_sesion->setClaveconfirma($usuario_obj->getClaveconfirma());
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
	}
	else {
		$qry = new GrupoQuery();
		$grupo_obj = $qry->findOneByKeygrupo($_SESSION['key']);
		$usuario_sesion = $_SESSION['usuario_sesion'];
		$usuario_sesion->enviaCorreoRegistro($grupo_obj->getNombre());
		$ruteoRespuesta = 2;
	}
	Propel::close();
	switch($ruteoRespuesta) {
		case 1:
			header("location: registro_nuevo_respuesta.php?msg=1"); //Registro exitoso...
			break;
		case 2:
			header("location: registro_nuevo_respuesta.php?msg=2"); //Reenvio mail...
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