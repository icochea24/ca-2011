<?php
	require_once 'includes/init.php';
	require_once 'includes/ac.php';
	$Idgrupo = $_REQUEST['Idgrupo'];
	$qry = new GrupoQuery();
	$grupo_sesion = $qry->findPk($Idgrupo);
	$usuario_grupo = UsuarioGrupoQuery::create()
			->where('UsuarioGrupo.Idgrupo = ?',$Idgrupo)
			->where('UsuarioGrupo.Idusuario = ?',$usuario_sesion->getIdusuario())
			->findOne();
	$_SESSION['administrador'] = $usuario_grupo->getAdministrador();
	$_SESSION['grupo_sesion'] = $grupo_sesion;
	Propel::close();
	header("location: mapp.php");
?>