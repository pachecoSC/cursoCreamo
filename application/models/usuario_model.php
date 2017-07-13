<?php

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function guardar_usuarios($paramUs){
       
    }
    function lista_usuarios(){
        
        $consulta= $this->db->query('select usser,password,nombre,telefono from tusuarios order by idTusuarios');
        return $consulta->result();
    }
}
