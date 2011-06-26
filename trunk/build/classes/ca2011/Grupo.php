<?php



/**
 * Skeleton subclass for representing a row from the 'pollaca2011_sch.grupo' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.ca2011
 */
class Grupo extends BaseGrupo {
    
    public function obtenerTablaPosiciones() {
        $gxml = <<<ram
<rows>
<head>
<column width="40" type="ro" align="center" color="white" sort="na">Pos.</column>
<column width="250" type="ro" align="left" color="white" sort="na">Participante</column>
<column width="100" type="ro" align="right" color="white" sort="na">Ptos Acumulados</column>
</head>
ram;
        $usuarios_grupo = UsuarioGrupoQuery::create()
                        ->joinWith('UsuarioGrupo.Usuario')
                        ->where('UsuarioGrupo.Idgrupo = ?',$this->getIdgrupo())
                        ->orderByAcumulado('desc')
                        ->find();
        $i = 1;
        foreach($usuarios_grupo as $usuario_grupo) {
            $estilo = 'style="font-size:18px';
            if($usuario_grupo->getUsuario()->getPagook() == 'P') $estilo .= ';color:#000000'; else $estilo .= ';color:#CCCCCC';
            if($i % 2) $estilo .= ';background-color:#FFFFCC"'; else $estilo .= '"';
            $gxml .= '<row id="'.$usuario_grupo->getIdusuariogrupo().'">';
            $gxml .= '<cell type="ro" '.$estilo.'>'.$i.'</cell>';
            $gxml .= '<cell type="ro" '.$estilo.'>'.$usuario_grupo->getUsuario()->getNombre().'</cell>';
            $gxml .= '<cell type="ro" '.$estilo.'>'.$usuario_grupo->getAcumulado().'</cell>';
            $gxml .= '</row>';
            $i++;
        }
        $gxml .= '</rows>';
        return $gxml;
    }
    
    public function obtenerParticipantes() {
        $gxml = <<<ram
<rows>
<head>
<column width="250" type="ro" align="left" color="white" sort="na">Participante</column>
<column width="100" type="coro" align="right" color="white" sort="na">Status
<option value="C">No Pagado</option>
<option value="P">Pagado</option>
</column>
</head>
ram;
        $usuarios_grupo = UsuarioGrupoQuery::create()
                        ->joinWith('UsuarioGrupo.Usuario')
                        ->where('UsuarioGrupo.Idgrupo = ?',$this->getIdgrupo())
                        ->orderByAcumulado('desc')
                        ->find();
        $i = 1;
        foreach($usuarios_grupo as $usuario_grupo) {
            $estilo = 'style="font-size:18px';
            if($usuario_grupo->getUsuario()->getPagook() == 'P') $estilo .= ';color:#000000'; else $estilo .= ';color:#CCCCCC';
            if($i % 2) $estilo .= ';background-color:#FFFFCC"'; else $estilo .= '"';
            if($usuario_grupo->getUsuario()->getPagook() == 'N') $tpago = 'ro'; else $tpago = 'coro';
            $gxml .= '<row id="'.$usuario_grupo->getIdusuariogrupo().'">';
            $gxml .= '<cell type="ro" '.$estilo.'>'.$usuario_grupo->getUsuario()->getNombre().'</cell>';
            $gxml .= '<cell type="'.$tpago.'" '.$estilo.'>'.$usuario_grupo->getUsuario()->getPagook().'</cell>';
            $gxml .= '</row>';
            $i++;
        }
        $gxml .= '</rows>';
        return $gxml;
    }

} // Grupo
