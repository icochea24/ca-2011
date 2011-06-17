<?php
	require_once 'includes/init.php';
	require_once 'includes/ac.php';
	$Idgrupo = $_REQUEST['Idgrupo'];
	$qry = new GrupoQuery();
	$grupo_sesion = $qry->findPk($Idgrupo);
	$_SESSION['grupo_sesion'] = $grupo_sesion;
	Propel::close();
	header("location: mapp.php");
?>