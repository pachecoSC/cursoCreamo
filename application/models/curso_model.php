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
        $consulta= $this->db->get('tcurso');
        return $consulta->result();
    }
}
