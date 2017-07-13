<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Curso_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function lista_curso(){
        //volver a realizar la consulta con los nuevos campos..
        $consulta= $this->db->query('select tc.nombre as nombre1,ttc.nombre as nombre2,tca.nombre as nombre3
            from tcurso as tc inner join ttipocurso as ttc on tc.idTipo=ttc.idTipo
            inner join tcategoria as tca on tc.idCategoria=tca.idCategoria order by tc.idCurso');
        return $consulta->result();
    }
}
