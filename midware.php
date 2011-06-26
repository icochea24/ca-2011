<?php
    require_once 'includes/init.php';
    require_once 'includes/ac.php';
    header("Content-type: text/xml");
    echo("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n");
    switch($_REQUEST['a']) {
        case "1": //Carga pronósticos ingresados x un Usuario...
            $gxml = $usuario_sesion->pronosticosUsuario();
            break;
        case "2": //Guarda los pronósticos de un usuario...
	    $gxml = "";
            $usuario_sesion->grabaPronosticosUsuario($gxml);
            break;
	case "3": //Obtiene la tabla de posiciones de los participantes...
	    $grupo_sesion = $_SESSION['grupo_sesion'];
	    $gxml = $grupo_sesion->obtenerTablaPosiciones();
	    break;
	case "4":
	    $grupo_sesion = $_SESSION['grupo_sesion'];
	    $gxml = $grupo_sesion->obtenerParticipantes();
	    break;
	case "5":
	    $gxml = "";
	    $usuario_sesion->registraPago($gxml);
	    break;
    }
	Propel::close();
    echo $gxml;
?>