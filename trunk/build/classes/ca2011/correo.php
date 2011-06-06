<?php

class Correo {
        
    static protected $from = "Polla CA-2011 <noreplay@armosoft.com>";
    static protected $correoError = "rafael.arteaga@armosoft.com";
        
    static public function reportaCorreoError($error,$ubicacion) {
        $respuesta = true;
        $correo_handler = new activeMailLib();
        $correo_handler->From(Correo::$from);
        $correo_handler->To(Correo::$correoError);
        $correo_handler->Subject("Reporte de error");
        $body = <<<ram
Detalle del error reportado:

- UBICACION EN EL SISTEMA: $ubicacion

- DETALLE DEL ERROR:
$error

Saludos,
Sistema de Reporte de Errores
ram;
        $correo_handler->Message($body);
        try {
            $correo_handler->Send();
        }
        catch(Exception $e) {
            $respuesta = false;   
        }
        return $respuesta;
    }
    
    static public function envioCorreoRegistro($nombre,$correo,$clave,$nombreGrupo) {
        $respuesta = true;
        $correo_handler = new activeMailLib();
        $correo_handler->From(Correo::$from);
        $correo_handler->To($correo);
        $correo_handler->Bcc(Correo::$correoError);
        $correo_handler->Subject("Confirmación de Registro");
        $body = <<<ram
Hola $nombre,

Su registro en la Polla Copa América Argentina 2011 fue realizado con éxito. Ud se ha
registrado en el grupo de juego "$nombreGrupo".

Este es un correo generado automáticamente con el fin de verificar que la cuenta de
correo electrónico registrada es correcta.

Para terminar con la confirmación por favor hacer clic sobre el siguiente enlace:

http://ca2011.armosoft.com/confirmacion.php?cc=$clave

Si no le es posible acceder al enlace antes mencionado, copie la dirección en el
explorador de internet de su preferencia.

Saludos,
Polla CAA-2011
ram;
        $correo_handler->Message($body);
        try {
            $correo_handler->Send();
        }
        catch(Exception $e) {
            $respuesta = false;   
        }
        return $respuesta;
    }
}
?>