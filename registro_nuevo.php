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
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #0000FF;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>
<SCRIPT language=JavaScript>
var sok = 1;
function ponerFoco() {
	document.forma.nombre.focus();
}
function validar() {
	if(sok) {
		nom = document.getElementById('nombre').value;
		em1 = document.getElementById('correo').value;
		em2 = document.getElementById('ccorreo').value;
		cl1 = document.getElementById('clave').value;
		cl2 = document.getElementById('cclave').value;
		ke = document.getElementById('key').value;
		kec = document.getElementById('keyimg').value;
		if(nom == '') {
			alert('Debe ingresar un nombre válido!!!');
			return false;
		}
		if(em1 == '' || em2 == '') {
			alert('Debe ingresar un correo válido!!!');
			return false;
		}
		if(cl1 == '' || cl2 == '') {
			alert('Debe ingresar una clave válida!!!');
			return false;
		}
		if(em1 != em2) {
			alert('El correo electrónico y su confirmación no coinciden!!!');
			return false;
		}
		if(cl1 != cl2) {
			alert('La clave y su confirmación no coinciden!!!');
			return false;
		}
		if(ke == '') {
			alert('Debe ingresar el key de Invitación!!!');
			return false;
		}
		if(kec == '') {
			alert('Debe ingresar el texto en la imagen!!!');
			return false;
		}
		sok = 0;
		document.forma.submit();
	}
}
</SCRIPT>
<body bgcolor="#ffffff" onload="ponerFoco();">
  <p>&nbsp;</p>
  <form name="forma" method="post" action="registro_nuevo_handler.php">
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
      <td colspan="5" bgcolor="#00C0EF"><span class="style1">Registro de nuevo participante </span></td>
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
      <td colspan="5"><table width="100%"  border="0">
          <tr>
            <td colspan="2"><div align="center"></div></td>
          </tr>
          <tr>
            <td width="39%"><div align="right"><strong><span class="style2">Nombre</span></strong></div></td>
            <td width="61%"><input name="nombre" type="text" id="nombre" size="40"></td>
          </tr>
          <tr>
            <td><div align="right"><strong><span class="style2">Correo Electr&oacute;nico</span></strong></div></td>
            <td><input name="correo" type="text" id="correo" size="40"></td>
          </tr>
          <tr>
            <td><div align="right"><strong><span class="style2">Confirma Correo</span></strong></div></td>
            <td><input name="ccorreo" type="text" id="ccorreo" size="40"></td>
          </tr>
          <tr>
            <td><div align="right"><strong><span class="style2">Clave</span></strong></div></td>
            <td><input name="clave" type="password" id="clave" size="30"></td>
          </tr>
          <tr>
            <td><div align="right"><strong><span class="style2">Confirma Clave</span></strong></div></td>
            <td><input name="cclave" type="password" id="cclave" size="30"></td>
          </tr>
          <tr>
            <td><div align="right"><strong><span class="style2">Key Invitaci&oacute;n </span></strong></div></td>
            <td><input name="key" type="text" id="key"></td>
          </tr>
          <tr>
            <td><div align="center"><img src="captcha/captcha.php" id="captcha" />
	              <a href="#" class="style6"
    id="change-image" onclick="
    document.getElementById('captcha').src='captcha/captcha.php?'+Math.random();
    document.getElementById('keyimg').focus();">Otra Palabra</a></div></td>
            <td><span class="style5">Digite la palabra que aparece a la izquierda<br>
            </span>
            <input name="keyimg" type="text" id="keyimg"></td>
          </tr>
      </table></td>
      <td><img src="iconos/spacer.gif" width="1" height="114" border="0" alt=""></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
        <input type="button" name="Submit" value="Registrar" onclick="validar();">
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
</form>
</body>
</html>
