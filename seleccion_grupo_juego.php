<?php
	require_once 'includes/init.php';
	require_once 'includes/ac.php';
	$grupos = GrupoQuery::create()
		->join('Grupo.UsuarioGrupo')
		->where('UsuarioGrupo.Idusuario = ?',$usuario_sesion->getIdusuario())
		->find();
?>
<html>
<head>
<title>.:. Copa Am&eacute;rica Argentina 2011 .:.</title>
<meta http-equiv="Content-Type" content="text/html;">
<!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Tue May 31 16:17:11 GMT-0500 2011-->
<style type="text/css">
<!--
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style></head>
<body bgcolor="#ffffff" onload="forma.nombre.focus();">
  <p>&nbsp;</p>
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <!-- fwtable fwsrc="login.png" fwbase="logo.gif" fwstyle="Dreamweaver" fwdocid = "2086942953" fwnested="0" -->
    <tr>
      <td><img src="iconos/spacer.gif" width="26" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="127" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="193" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="16" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="87" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="24" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="27" height="1" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img name="logo_r1_c1" src="iconos/logo_r1_c1.gif" width="26" height="33" border="0" alt=""></td>
      <td colspan="5"><img name="logo_r1_c2" src="iconos/logo_r1_c2.gif" width="447" height="6" border="0" alt=""></td>
      <td rowspan="3"><img name="logo_r1_c7" src="iconos/logo_r1_c7.gif" width="27" height="33" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="6" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#00C0EF"><strong><span class="style7">Selecci&oacute;n de grupo de juego </span></strong></td>
      <td><img src="iconos/spacer.gif" width="1" height="19" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><img name="logo_r3_c2" src="iconos/logo_r3_c2.gif" width="447" height="8" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="8" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3" background="iconos/logo_r2_c1.gif">&nbsp;</td>
      <td>&nbsp;</td>
      <td><img name="logo_r4_c3" src="iconos/logo_r4_c3.gif" width="193" height="92" border="0" alt=""></td>
      <td colspan="3">&nbsp;</td>
      <td rowspan="3" background="iconos/logo_r4_c7.gif">&nbsp;</td>
      <td><img src="iconos/spacer.gif" width="1" height="92" border="0" alt=""></td>
    </tr>
    <tr>
  <td colspan="5"><div align="center">
    <table width="100%"  border="0" cellpadding="4" cellspacing="4">
      <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
<?php
	$segunda = 0;
	foreach($grupos as $grupo) {
		if(!$segunda) {
			$Idgrupo0 = $grupo->getIdgrupo();
			$Nombregrupo0 = $grupo->getNombre();
			$segunda = 1;
			continue;
		}
		else {
			$Idgrupo1 = $grupo->getIdgrupo();
			$Nombregrupo1 = $grupo->getNombre();
			$segunda = 0;
		}
?>
      <tr>
        <td><div align="center"><a href="seleccion_grupo_juego_handler.php?Idgrupo=<?=$Idgrupo0?>"><img src="iconos/mascota.jpg" width="150" height="125" border="0"></a><br>
          <strong><span class="style8"><a href="seleccion_grupo_juego_handler.php?Idgrupo=<?=$Idgrupo0?>"><?=$Nombregrupo0?></a></span></strong></div></td>
        <td><div align="center"><a href="seleccion_grupo_juego_handler.php?Idgrupo=<?=$Idgrupo1?>"><img src="iconos/mascota.jpg" width="150" height="125" border="0"></a><br>
          <strong><span class="style8"><a href="seleccion_grupo_juego_handler.php?Idgrupo=<?=$Idgrupo0?>"><?=$Nombregrupo1?></a></span></strong></div></td>
      </tr>
<?php
	}
	if($segunda) {
?>
      <tr>
        <td colspan="2"><div align="center"><a href="seleccion_grupo_juego_handler.php?Idgrupo=<?=$Idgrupo0?>"><img src="iconos/mascota.jpg" width="150" height="125" border="0"></a><br>
          <strong><span class="style8"><a href="seleccion_grupo_juego_handler.php?Idgrupo=<?=$Idgrupo0?>"><?=$Nombregrupo0?></a></span></strong></div></td>
      </tr>
<?php
	}
	Propel::close();
?>
    </table>
  </div></td>
      <td><img src="iconos/spacer.gif" width="1" height="114" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
      </div></td>
      <td><img src="iconos/spacer.gif" width="1" height="32" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img name="logo_r7_c1" src="iconos/logo_r7_c1.gif" width="26" height="29" border="0" alt=""></td>
      <td colspan="5"><img name="logo_r7_c2" src="iconos/logo_r7_c2.gif" width="447" height="29" border="0" alt=""></td>
      <td><img name="logo_r7_c7" src="iconos/logo_r7_c7.gif" width="27" height="29" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="29" border="0" alt=""></td>
    </tr>
  </table>
</body>
</html>
