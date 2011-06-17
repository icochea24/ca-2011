<?php
    require_once 'includes/init.php';
    session_start();
    session_destroy();
    session_start();
    $correo = $_REQUEST['correo'];
    $clave = $_REQUEST['clave'];
    try {
        $usuario_obj = UsuarioQuery::create()->filterByEmail($correo)->filterByClave(md5($clave))->findOne();
    }
    catch(Exception $e) {
        $_SESSION['error'] = "BD";
    }
    Propel::close();
    if($usuario_obj) {
        $_SESSION['usuario_sesion_id'] = $usuario_obj->getIdusuario();
        header("location: seleccion_grupo_juego.php");
    }
    else {
        $_SESSION['error'] = "DI";
        header("location: login.php");
    }
?>