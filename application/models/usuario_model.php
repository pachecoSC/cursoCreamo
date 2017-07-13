<?php

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function guardar_usuarios($paramUs){
       $campoUs= array(//llenamos el array sintaxis.. campoTabla => parametro['dato'] el dato proviene del controlador usuario
           'usser'=>$paramUs['usser'],
           'password'=>$paramUs['password'],
           'nombre'=>$paramUs['nombre'],
           'telefono'=>$paramUs['telefono']
       );
       $this->db->insert('tusuarios',$campoUs);
    }
    function lista_usuarios(){
        
        $consulta= $this->db->query('select usser,password,nombre,telefono from tusuarios order by idTusuarios');
        return $consulta->result();
    }
}
