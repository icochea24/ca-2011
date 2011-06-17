<?php
	require_once 'includes/init.php';
	require_once 'includes/ac.php';
	Header('Cache-Control: no-cache');
  	Header('Pragma: no-cache');
	$grupo_sesion = $_SESSION['grupo_sesion'];
	$msgPago = "";
	if($usuario_sesion->getPagook() != 'P')
		$msgPago = "REGISTRO DE PRONOSTICOS INACTIVO, FALTA CANCELAR LA CUOTA DE INSCRIPCION!!";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>.:. Copa Am&eacute;rica Argentina 2011 .:.</title>
    <!-- dhtmlx.js contains all necessary dhtmlx library javascript code -->
    <script src="codebase/dhtmlx.js" type="text/javascript"></script>
    <!-- dhtmlx.css contains styles definitions for all included components -->
    <link rel="STYLESHEET" type="text/css" href="codebase/dhtmlx.css">
	<script src="codebase/connector/connector.js"></script>
    <style>
        /*these styles allow dhtmlxLayout to work in fullscreen mode in different browsers correctly*/
        html, body {
           width: 100%;
           height: 100%;
           margin: 0px;
           overflow: hidden;
           background-color:white;
        }
    </style>
 
    <script type="text/javascript">
		function not_empty(value, id, ind) {
			if (value == "")
				return "Existen pronósticos vacios!!... No es posible guardar pronósticos en blanco...";
			return true;
		}
		function muestraMensaje_i() {
			alert('Datos Guardados!!!');
			pronosticosGrid.clearAndLoad("midware.php?a=1");
		}
		function muestraMensaje_u() {
			alert('Datos Guardados!!!');
			pronosticosGrid.clearAndLoad("midware.php?a=1");
		}
		function no_update(nodo) {
			alert(nodo.firstChild.data);
		}
        var layout,menu,toolbar,contactsGrid,contactForm;
		dhtmlx.image_path = "codebase/imgs/";
		dhtmlxEvent(window,"load",function(){
			//layout
			layoutp = new dhtmlXLayoutObject(document.body,"1C");
			layoutp.cells("a").setText(".::. Polla Copa América Argentina - 2011 .::. (<?=$usuario_sesion->getNombre()?> - Grupo <?=$grupo_sesion->getNombre()?>) <?=$msgPago?>");
			layoutp.cells("a").attachURL("splash.htm");
			toolbar = layoutp.cells("a").attachToolbar();
			toolbar.setIconsPath("icons/");
			toolbar.loadXML("xml/toolbar.xml");
			toolbar.attachEvent("onclick",function(id){
				layoutp.cells("a").progressOn();
				if(id=="pronosticos"){
					layout = new dhtmlXLayoutObject(layoutp.cells("a"),"2U");
					layout.cells("a").setWidth(770);
					layout.cells("a").hideHeader();
					layout.cells("b").hideHeader();
					layout.cells("a").fixSize(true,true);
					toolbarP = layout.cells("a").attachToolbar();
					toolbarP.setIconsPath("icons/");
					toolbarP.loadXML("xml/toolbarP.xml");
					pronosticosGrid = layout.cells("a").attachGrid();
					pronosticosGrid.enableTooltips("false,false,false,false,false,false,false,false,false,false,false");
					pronosticosGrid.loadXML("midware.php?a=1");
					dp = new dataProcessor("midware.php?a=2");
					dp.setTransactionMode("POST", true);
					dp.setUpdateMode("off");
					dp.setVerificator(2, not_empty);
					dp.setVerificator(3, not_empty);
					dp.attachEvent("onValidatationError", function(id, messages) {
						alert(messages.join("\n"));
						return true;
					});
					dp.defineAction("act_ok",muestraMensaje_i);
					dp.defineAction("act_ok_1",muestraMensaje_u);
					dp.defineAction("no_update",no_update);
					dp.init(pronosticosGrid);
					layoutp.cells("a").showHeader();
					toolbarP.attachEvent("onclick",function(id){
						if(id=="guardar") {
							dp.sendData();
						}
					});
					//pronosticosTab.init();
					/*pronosticosGrid = layout.cells("a").attachGrid();
						//contactGrid.setImagePath("./codebase/imgs/");
						//contactGrid.setSkin("dhx_skyblue");
					pronosticosGrid.setHeader("'',País,Pronóstico,Pronóstico,País,'',Puntaje");
					pronosticosGrid.setInitWidths("100,100,100,100,100,100,100");
					pronosticosGrid.setColAlign("left,left,left,left,left,left,left");
					pronosticosGrid.setColTypes("ro,ro,ro,ro,ro,ro,ro");
					pronosticosGrid.setColSorting("str,str,str,str,str,str,str");
					pronosticosGrid.init();*/
				}
				if(id=="salir")
					window.location = "http://localhost/ca2011/login.php";
				layoutp.cells("a").progressOff();
			});
			
			//if(layout.getEffect("collapse")) alert('ok');
			//else alert('ko');
			//layout.setEffect("collapse",false);
		/*	layout.cells("a").setText("Contacts");
			layout.cells("b").setText("Contact Details");
			layout.cells("a").setWidth(400);
			layout.cells("a").fixSize(true,true);
			layout.setEffect("resize",false);
			layout.setEffect("collapse",false);
			menu = layout.attachMenu();
			menu.setIconsPath("icons/");
			menu.loadXML("xml/menu.xml");
			toolbar = layout.attachToolbar();
			toolbar.setIconsPath("icons/");
			toolbar.loadXML("xml/toolbar.xml");
			contactsGrid = layout.cells("a").attachGrid();
				//contactGrid.setImagePath("./codebase/imgs/");
				//contactGrid.setSkin("dhx_skyblue");
			contactsGrid.setHeader("Name,Last Name,Email");
			contactsGrid.setInitWidths("100,100,*");
			contactsGrid.setColAlign("left,left,left");
			contactsGrid.setColTypes("ro,ro,ro");
			contactsGrid.setColSorting("str,str,str");
			contactsGrid.attachHeader("#text_filter,#text_filter,#text_filter");
			contactsGrid.init();
			var dpg = new dataProcessor("xml/contacts.php");
			dpg.init(contactsGrid);
			contactsGrid.load("xml/contacts.php");
			contactForm = layout.cells("b").attachForm();
			contactForm.loadStruct("xml/form.xml");
			contactsGrid.attachEvent("onRowSelect", function(rID,cInd){
				contactForm.load("xml/contact_details.php?id="+rID);
			})
			var dpf = new dataProcessor("xml/contact_details.php");
			dpf.init(contactForm);
			dpf.attachEvent("onAfterUpdate",function(sid,action,tid,xml_node){
				contactsGrid.cells(sid,0).setValue(contactForm.getItemValue("fname"));
				contactsGrid.cells(sid,1).setValue(contactForm.getItemValue("lname"));
				contactsGrid.cells(sid,2).setValue(contactForm.getItemValue("email"));
			})
			toolbar.attachEvent("onclick",function(id){
			  if(id=="newContact"){
				//open popup window
				var popupWindow = layout.dhxWins.createWindow("newcontact_win", 0, 0, 220, 470);
				popupWindow.center();
				popupWindow.setText("New Contact");
				//add form
				var newContactForm = popupWindow.attachForm();
				newContactForm.loadStruct("xml/form.xml?i=2345678");
				var dpfs = new dataProcessor("xml/contact_details.php");
				dpfs.init(newContactForm);
				newContactForm.attachEvent("onButtonClick", function(name, command){
					dpfs.sendData();
				});
				dpfs.attachEvent("onAfterUpdate",function(sid,action,tid,xml_node){
					 if(action=="inserted"){
						dpfs.ignore(function(){
							contactsGrid.addRow(tid,[newContactForm.getItemValue("fname"),newContactForm.getItemValue("lname"),newContactForm.getItemValue("email")],0)
						});
						contactsGrid.selectRowById(tid,false,false,true);
						popupWindow.close();
					}
				})
			  }
			  if(id=="delContact"){
				var rowId = contactsGrid.getSelectedRowId();
				if(rowId!=null){
					var selectedIndex = contactsGrid.getRowIndex(rowId)
					contactsGrid.deleteRow(rowId);
					if(selectedIndex!=(contactsGrid.getRowsNum()-1)){
						contactsGrid.selectRow(selectedIndex+1,true);
					}
					else{
						 contactsGrid.selectRow(selectedIndex-1,true)
					}
				}
			  }
			  if(id=="help") {
				contactsGrid1 = layout.cells("a").attachGrid();
					//contactGrid.setImagePath("./codebase/imgs/");
					//contactGrid.setSkin("dhx_skyblue");
				contactsGrid1.setHeader("Nombre,Apellido,Email");
				contactsGrid1.setInitWidths("100,100,*");
				contactsGrid1.setColAlign("left,left,left");
				contactsGrid1.setColTypes("ro,ro,ro");
				contactsGrid1.setColSorting("str,str,str");
				contactsGrid1.attachHeader("#text_filter,#text_filter,#text_filter");
				contactsGrid1.init();
			  }
			});*/
		})
    </script>
</head>
<body>
</body>
</html>
<?php
	Propel::close();
?>