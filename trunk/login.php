<?php
	session_start();
	$msg = "";
	if(isset($_SESSION['error'])) {
		switch($_SESSION['error']) {
			case "BD":
				$msg = "Error de conexión a la Base de Datos, intente más tarde...";
				break;
			case "DI":
				$msg = "Datos de ingreso incorrectos, intente nuevamente...";
				break;
		}
	}
	session_destroy();
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
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style></head>
<body bgcolor="#ffffff" onload="forma.correo.focus();">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<form name="forma" method="post" action="login_accion.php">
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
      <td colspan="5" bgcolor="#00C0EF"><span class="style1">Control de Acceso </span></td>
      <td><img src="iconos/spacer.gif" width="1" height="19" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><img name="logo_r3_c2" src="iconos/logo_r3_c2.gif" width="447" height="8" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="8" border="0" alt=""></td>
    </tr>
    <tr>
      <td rowspan="3"><img name="logo_r4_c1" src="iconos/logo_r4_c1.gif" width="26" height="238" border="0" alt=""></td>
      <td>&nbsp;</td>
      <td><img name="logo_r4_c3" src="iconos/logo_r4_c3.gif" width="193" height="92" border="0" alt=""></td>
      <td colspan="3">&nbsp;</td>
      <td rowspan="3"><img name="logo_r4_c7" src="iconos/logo_r4_c7.gif" width="27" height="238" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="92" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><table width="100%"  border="0">
<?php
	if($msg != "") {
?>
          <tr>
            <td colspan="2"><div align="center"><span class="style4"><?=$msg?></span></div></td>
          </tr>
<?php
	}
?>
          <tr>
            <td><div align="right"><strong><span class="style2">Correo Electr&oacute;nico </span></strong></div></td>
            <td><input name="correo" type="text" id="correo" size="35"></td>
          </tr>
          <tr>
            <td><div align="right"><strong><span class="style2">Clave</span></strong></div></td>
            <td><input name="clave" type="password" id="clave"></td>
          </tr>
      </table></td>
      <td><img src="iconos/spacer.gif" width="1" height="114" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="3"><span class="style3">* <a href="registro_nuevo.php">Registrarme como nuevo participante</a><br>
        <!--* <a href="registro_nuevo_grupo.php">Ya soy usuario y deseo registrarme en otro grupo?</a>-->
      </a></span></td>
      <td><input type="image" src="iconos/logo_r6_c5.gif" width="87" height="32" border="0" alt=""></td>
      <td>&nbsp;</td>
      <td><img src="iconos/spacer.gif" width="1" height="32" border="0" alt=""></td>
    </tr>
    <tr>
      <td><img name="logo_r7_c1" src="iconos/logo_r7_c1.gif" width="26" height="29" border="0" alt=""></td>
      <td colspan="5"><img name="logo_r7_c2" src="iconos/logo_r7_c2.gif" width="447" height="29" border="0" alt=""></td>
      <td><img name="logo_r7_c7" src="iconos/logo_r7_c7.gif" width="27" height="29" border="0" alt=""></td>
      <td><img src="iconos/spacer.gif" width="1" height="29" border="0" alt=""></td>
    </tr>
  </table>
</form>
</body>
</html>
