<?php
	require_once 'includes/init.php';
	session_start();
	$claveConfirma = $_REQUEST['cc'];
	if(!isset($_REQUEST['op'])) {
		$titulo = "Confirmación Exitosa";
		$usuario_obj = UsuarioQuery::create()->filterByClaveconfirma($claveConfirma)->filterByPagook('N')->findOne();
		if($usuario_obj) {
			$usuario_obj->setPagook('C');
			$usuario_obj->save();
			$msg = <<<ram
Confirmacion realizada con &eacute;xito, haga clic <a href="login.php">aqui</a> para ir a la página de ingreso.
ram;
		}
		else {
			$titulo = "Error en la confirmación";
			$msg = <<<ram
No fue posible confirmar su registro, si realizó la copia del enlace y lo pego en la barra de dirección del explorador de Internet, asegurese de que esté completo.<br><br>De persistir el error haga clic <a href="confirmacion.php?op=2&cc=$claveConfirma">aqui</a> para enviar un correo al administrador.
ram;
		}
	}
	else {
		$titulo = "Administrador Notificado";
		Correo::envioCorreoAdministradorConfirmacion($claveConfirma);
		$msg = <<<ram
El correo de notificación al administrador del sistema ha sido enviado, el se comunicará con Ud. a la brevedad posible.
ram;
	}
	Propel::close();
?>
<html>
<head>
<title>.:. Copa Am&eacute;rica Argentina 2011 .:.</title>
<meta http-equiv="Content-Type" content="text/html;">
<!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Tue May 31 16:17:11 GMT-0500 2011-->
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style></head>
<body bgcolor="#ffffff" onload="forma.nombre.focus();">
  <p>&nbsp;</p>
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <!-- fwtable fwsrc="login.png" fwbase="logo.gif" fwstyle="Dreamweaver" fwdocid = "2086942953" fwnested="0" -->
    <tr>
      <td><img src="icons/spacer.gif" width="26" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="127" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="193" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="16" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="87" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="24" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="27" height="1" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="1" height="1" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img name="logo_r1_c1" src="icons/logo_r1_c1.gif" width="26" height="33" border="0" alt=""></td>
      <td colspan="5"><img name="logo_r1_c2" src="icons/logo_r1_c2.gif" width="447" height="6" border="0" alt=""></td>
      <td rowspan="3"><img name="logo_r1_c7" src="icons/logo_r1_c7.gif" width="27" height="33" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="1" height="6" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#00C0EF"><span class="style1"><?=$titulo?></span></td>
      <td><img src="icons/spacer.gif" width="1" height="19" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><img name="logo_r3_c2" src="icons/logo_r3_c2.gif" width="447" height="8" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="1" height="8" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3" background="icons/logo_r2_c1.gif">&nbsp;</td>
      <td>&nbsp;</td>
      <td><img name="logo_r4_c3" src="icons/logo_r4_c3.gif" width="193" height="92" border="0" alt=""></td>
      <td colspan="3">&nbsp;</td>
      <td rowspan="3" background="icons/logo_r4_c7.gif">&nbsp;</td>
      <td><img src="icons/spacer.gif" width="1" height="92" border="0" alt=""></td>
    </tr>
    <tr>
  <td colspan="5"><div align="center"><span class="style7"><?=$msg?></span></div></td>
      <td><img src="icons/spacer.gif" width="1" height="114" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
      </div></td>
      <td><img src="icons/spacer.gif" width="1" height="32" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img name="logo_r7_c1" src="icons/logo_r7_c1.gif" width="26" height="29" border="0" alt=""></td>
      <td colspan="5"><img name="logo_r7_c2" src="icons/logo_r7_c2.gif" width="447" height="29" border="0" alt=""></td>
      <td><img name="logo_r7_c7" src="icons/logo_r7_c7.gif" width="27" height="29" border="0" alt=""></td>
      <td><img src="icons/spacer.gif" width="1" height="29" border="0" alt=""></td>
    </tr>
  </table>
</body>
</html>
