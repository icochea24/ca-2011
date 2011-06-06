<?php



/**
 * Skeleton subclass for representing a row from the 'pollaca2011_sch.usuario' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ca2011
 */
class Usuario extends BaseUsuario {

    public function registraUsuario($datos,$idGrupo) {
        $respuesta = true;
        $claveConfirmaGenerada = md5(rand(10000,99999));
        $this->setNombre($datos['nombre']);
        $this->setEmail($datos['correo']);
        $this->setClave($datos['clave']);
        $this->setPagook('N');
        $this->setClaveconfirma($claveConfirmaGenerada);
        $usuarioGrupo_obj = new UsuarioGrupo();
        $usuarioGrupo_obj->setIdgrupo($idGrupo);
        $usuarioGrupo_obj->setUsuario($this);
        $usuarioGrupo_obj->setAcumulado(0);
        try {
            $usuarioGrupo_obj->save();
        }
        catch(Exception $e) {
            $respuesta = false;
            Correo::reportaCorreoError($e,"Registro Usuario");
        }
        return $respuesta;
    }
    
    public function enviaCorreoRegistro($nombreGrupo) {
        Correo::envioCorreoRegistro($this->getNombre(),$this->getEmail(),$this->getClaveconfirma(),$nombreGrupo);
    }
} // Usuario
