<?php
	require_once 'includes/init.php';
	session_start();
	$usuario_sesion = $_SESSION['usuario_sesion'];
	$titulo = "Error en registro";
	switch($_REQUEST['msg']) {
		case 1:
			$correo = $usuario_sesion->getEmail();
			$msg = <<<ram
Registro realizado con &eacute;xito, un correo de confirmaci&oacute;n ha sido enviado a su cuenta de correo: $correo<br><br>Si dentro de unos minutos no ha recibido el correo, puede hacer clic <a href="registro_nuevo_handler.php?op=2">aqui</a> para realizar una solicitud de reenvio.
ram;
			$titulo = "Registro exitoso";
			break;
		case -1:
			$msg = <<<ram
Se ha  producido un error inesperado, el mismo ya ha sido reportado al equipo t&eacute;cnico para su revisi&oacute;n, por favor intente registrarse m&aacute;s tarde.<br><br>Si desea reintentarlo ahora haga clic <a href="registro_nuevo.php">aqui</a>
ram;
			break;
		case -2:
			$key = $_SESSION['key'];
			$msg = <<<ram
ATENCION: El key de invitaci&oacute;n ingresado &quot;$key&quot; no es correcto, por favor pongase en contacto con el administrador y verifique el key. <br><br>Si desea reintentarlo  haga clic <a href="registro_nuevo.php">aqui</a>
ram;
			break;
		case -3:
			$msg = <<<ram
ATENCION: La palabra ingresada no coincide con la imagen, intente nuevamente haciendo clic <a href="registro_nuevo.php">aqui</a>
ram;
			break;
	}
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
