<?php
    session_start();
    if(!isset($_SESSION['usuario_sesion_id']))
        header("location: login.php");
    else {
        $qry = new UsuarioQuery();
        $usuario_sesion = $qry->findPk($_SESSION['usuario_sesion_id']);
    }
?>