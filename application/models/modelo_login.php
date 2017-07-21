<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Modelo_login extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function obtenerUsuario($email){
        $this->db->where('email',$email);
        $consulta= $this->db->get('usuario');
        if($consulta->num_rows()>0){
            return $consulta->row();
        } else {
            return NULL;
        }
    }
    
}