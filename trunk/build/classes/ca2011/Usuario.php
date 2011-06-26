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
        $claveConfirmaGenerada = md5(rand(10000,99999).$datos['clave']);
        $this->setNombre(strtoupper($datos['nombre']));
        $this->setEmail($datos['correo']);
        $this->setClave(md5($datos['clave']));
        $this->setPagook('N');
        $this->setClaveconfirma($claveConfirmaGenerada);
        $usuarioGrupo_obj = new UsuarioGrupo();
        $usuarioGrupo_obj->setIdgrupo($idGrupo);
        $usuarioGrupo_obj->setUsuario($this);
        $usuarioGrupo_obj->setAcumulado(0);
        $usuarioGrupo_obj->setAdministrador('N');
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
    
    public function pronosticosUsuario() {
        $edicion_pronostico = "ro";
        if($this->getPagook() == 'P') $edicion_pronostico = "ed";
        $gxml = <<<ram
<rows>
<head>
<column width="30" type="ro" align="center" color="white" sort="na">#</column>
<column width="45" type="ro" align="center" color="white" sort="na">Grupo</column>
<column width="40" type="img" align="center" color="white" sort="na">País</column>
<column width="100" type="ro" align="left" color="white" sort="na">#cspan</column>
<column width="65" type="$edicion_pronostico" align="center" color="yellow" sort="na">Pronóstico</column>
<column width="65" type="$edicion_pronostico" align="center" color="yellow" sort="na">Pronóstico</column>
<column width="100" type="ro" align="left" color="white" sort="na">País</column>
<column width="40" type="img" align="center" color="white" sort="na">#cspan</column>
<column width="120" type="ro" align="center" color="white" sort="na">Fecha-Hora</column>
<column width="80" type="ro" align="center" color="white" sort="na">Sede</column>
<column width="60" type="ro" align="right" color="white" sort="na">Puntaje</column>
</head>
ram;
        $pronosticos_usuario = PronosticoQuery::create()
                        ->joinWith('Pronostico.Partido')
                        ->joinWith('Partido.EquipoRelatedByIdequipo1 a')
                        ->joinWith('Partido.EquipoRelatedByIdequipo2 b')
                        ->where('Pronostico.Idusuario = ?',$this->getIdusuario())
                        ->orderByIdpartido()
                        ->find();
        if(count($pronosticos_usuario)) {
            $i = 1;
            foreach($pronosticos_usuario as $pronostico_usuario) {
                $estilo = "";
                $ptipo = "ed";
                $pstyle = "";
                $resultado1 = $pronostico_usuario->getPartido()->getResultadoequipo1();
                $resultado2 = $pronostico_usuario->getPartido()->getResultadoequipo2();
                $resultado1_r = "";
                $resultado2_r = "";
                if($resultado1 != -1) {
                    $resultado1_r = " (".$resultado1.")";
                    $resultado2_r = " (".$resultado2.")";
                }
                if($pronostico_usuario->getPartido()->getJugado() != 'N') {
                    $ptipo = "ro";
                    $pstyle = 'style="background-color:#999999"';
                }
                if(($i % 2) == 0) $estilo = ' style="background-color:#B9FFFF"';
                $gxml .= '<row id="'.$pronostico_usuario->getIdpronostico().'">';
                $gxml .= '<cell'.$estilo.'>P'.$pronostico_usuario->getPartido()->getIdpartido().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$pronostico_usuario->getPartido()->getEquipoRelatedByIdequipo1()->getGrupo().'</cell>';
                $gxml .= '<cell'.$estilo.'>iconos/'.$pronostico_usuario->getPartido()->getEquipoRelatedByIdequipo1()->getLinkbandera().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$pronostico_usuario->getPartido()->getEquipoRelatedByIdequipo1()->getNombre().$resultado1_r.'</cell>';
                $gxml .= '<cell type="'.$ptipo.'" '.$pstyle.'>'.$pronostico_usuario->getPronostico1().'</cell>';
                $gxml .= '<cell type="'.$ptipo.'" '.$pstyle.'>'.$pronostico_usuario->getPronostico2().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$pronostico_usuario->getPartido()->getEquipoRelatedByIdequipo2()->getNombre().$resultado2_r.'</cell>';
                $gxml .= '<cell'.$estilo.'>iconos/'.$pronostico_usuario->getPartido()->getEquipoRelatedByIdequipo2()->getLinkbandera().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$pronostico_usuario->getPartido()->getFechahora().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$pronostico_usuario->getPartido()->getSede().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$pronostico_usuario->getPuntajeobt().'</cell>';
                $gxml .= '</row>';
                $i++;
            }
        }
        else {
            $partidos = PartidoQuery::create()
                       ->joinWith('Partido.EquipoRelatedByIdequipo1 a')
                       ->joinWith('Partido.EquipoRelatedByIdequipo2 b')
                       ->orderByIdpartido()
                       ->find();
            $i = 1;
            foreach($partidos as $partido) {
                $estilo = "";
                $estilo = "";
                $ptipo = "";
                $pstyle = "";
                $resultado1 = $partido->getResultadoequipo1();
                $resultado2 = $partido->getResultadoequipo2();
                $resultado1_r = "";
                $resultado2_r = "";
                if($resultado1 != -1) {
                    $resultado1_r = " (".$resultado1.")";
                    $resultado2_r = " (".$resultado2.")";
                }
                if($partido->getJugado() != 'N') {
                    $ptipo = 'type="ro" ';
                    $pstyle = 'style="background-color:#999999"';
                    $resultado1 = -1;
                    $resultado2 = -1;
                }
                if(($i % 2) == 0) $estilo = ' style="background-color:#B9FFFF"';
                $gxml .= '<row id="'.$i.'">';
                $gxml .= '<cell'.$estilo.'>P'.$partido->getIdpartido().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$partido->getEquipoRelatedByIdequipo1()->getGrupo().'</cell>';
                $gxml .= '<cell'.$estilo.'>iconos/'.$partido->getEquipoRelatedByIdequipo1()->getLinkbandera().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$partido->getEquipoRelatedByIdequipo1()->getNombre().$resultado1_r.'</cell>';
                $gxml .= '<cell '.$ptipo.$pstyle.'>'.$resultado1.'</cell>';
                $gxml .= '<cell type="'.$ptipo.'" '.$pstyle.'>'.$resultado2.'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$partido->getEquipoRelatedByIdequipo2()->getNombre().$resultado2_r.'</cell>';
                $gxml .= '<cell'.$estilo.'>iconos/'.$partido->getEquipoRelatedByIdequipo2()->getLinkbandera().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$partido->getFechahora().'</cell>';
                $gxml .= '<cell'.$estilo.'>'.$partido->getSede().'</cell>';
                $gxml .= '<cell'.$estilo.'>0</cell>';
                $gxml .= '</row>';
                $i++;
            }
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    public function registraPago(&$gxml) {
        $resultado = true;
        $ids = $_REQUEST['ids'];
        if(strlen($ids) > 0) 
            $array_ids = split(',',$ids);
        $usuario_grupo = UsuarioGrupoQuery::create()
                        ->joinWith('UsuarioGrupo.Usuario')
                        ->where('UsuarioGrupo.Idusuariogrupo = ?',$array_ids[0])
                        ->findOne();
        $usuario_grupo->getUsuario()->setPagook($_REQUEST[$array_ids[0].'_c1']);
        try {
            $usuario_grupo->save();
            $gxml = '<data>';
            $gxml .= '<action type="update" sid="'.$array_ids[0].'" tid="'.$array_ids[0].'"></action>';
            $gxml .= '</data>';
        }
        catch(Exception $e) {
            Correo::reportaCorreoError($e,"Actualizando Pago");
            $resultado = false;
        }
        return $resultado;
    }
    
    public function grabaPronosticosUsuario(&$gxml) {
        $gxml = "";
        $gxml_aux = "";
        $resultado = true;
        $fechaHora = date("Y-m-d H:i:s");
        $ids = $_REQUEST['ids'];
        if(strlen($ids) > 0) 
            $array_ids = split(',',$ids);
        $pronosticos_usuario = $this->getPronosticos();
        if(count($pronosticos_usuario)) {
            $gxml = '<data>';
            foreach($pronosticos_usuario as $pronostico_usuario) {
                $indice_array = array_search($pronostico_usuario->getIdpronostico(),$array_ids);
                if(is_numeric($indice_array)) {
                    $partido = $pronostico_usuario->getPartido();
                    $gxml .= '<action type="update" sid="'.$pronostico_usuario->getIdpronostico().'" tid="'.$pronostico_usuario->getIdpronostico().'"></action>';
                    if($partido->getJugado() == 'N') {
                        $pronostico_usuario->setPronostico1($_REQUEST[$array_ids[$indice_array].'_c4']);
                        $pronostico_usuario->setPronostico2($_REQUEST[$array_ids[$indice_array].'_c5']);
                    }
                    else {
                        $equipo1 = $partido->getEquipoRelatedByIdequipo1()->getNombre();
                        $equipo2 = $partido->getEquipoRelatedByIdequipo2()->getNombre();
                        $gxml .= '<action type="no_update" sid="'.$pronostico_usuario->getIdpronostico().'" tid="'.$pronostico_usuario->getIdpronostico().'">No se procederá con la actualización del partido '.$equipo1.' - '.$equipo2.', tiempo permitido para actualizar ha finalizado</action>';
                    }
                }
            }
            $gxml .= '<action type="act_ok_1"></action>';
            $gxml .= '</data>';
            try {
                $this->save();
            }
            catch(Exception $e) {
                Correo::reportaCorreoError($e,"Registro Pronóstico");
                $resultado = false;
            }
        }
        else {
            $grupo_sesion = $_SESSION['grupo_sesion'];
            $partidos = PartidoQuery::create()
                       ->joinWith('Partido.EquipoRelatedByIdequipo1 a')
                       ->joinWith('Partido.EquipoRelatedByIdequipo2 b')
                       ->orderByIdpartido()
                       ->find();
            foreach($partidos as $partido) {
                $pronostico = new Pronostico();
                $indice_array = array_search($partido->getIdpartido(),$array_ids);
                if(is_numeric($indice_array)) {
                    if($partido->getJugado() == 'N') {
                        $pronostico->setPronostico1($_REQUEST[$array_ids[$indice_array].'_c4']);
                        $pronostico->setPronostico2($_REQUEST[$array_ids[$indice_array].'_c5']);
                    }
                    else {
                        $pronostico->setPronostico1(-1);
                        $pronostico->setPronostico2(-1);
                        $equipo1 = $partido->getEquipoRelatedByIdequipo1()->getNombre();
                        $equipo2 = $partido->getEquipoRelatedByIdequipo2()->getNombre();
                        $gxml_aux .= '<action type="no_update">No se procederá con la actualización del partido '.$equipo1.' - '.$equipo2.', tiempo permitido para actualizar ha finalizado</action>';
                    }
                }
                else {
                    $pronostico->setPronostico1(-1);
                    $pronostico->setPronostico2(-1);
                }
                $pronostico->setPuntajeobt(0);
                $pronostico->setFechahoraregistro($fechaHora);
                $pronostico->setIdgrupo($grupo_sesion->getIdgrupo());
                $pronostico->setIdpartido($partido->getIdpartido());
                $this->addPronostico($pronostico);
            }
            try {
                $this->save();
                $pronosticos_usuario_aux = $this->getPronosticos();
                $gxml = '<data>';
                foreach($pronosticos_usuario_aux as $pronostico_usuario_aux) {
                    $gxml .= '<action type="update" sid="'.$pronostico_usuario_aux->getIdpartido().'" tid="'.$pronostico_usuario_aux->getIdpronostico().'"></action>';
                }
                $gxml .= $gxml_aux;
                $gxml .= '<action type="act_ok"></action>';
                $gxml .= '</data>';
            }
            catch(Exception $e) {
                Correo::reportaCorreoError($e,"Registro Pronóstico");
                $resultado = false;
            }
        }
        return $resultado;
    }
} // Usuario
