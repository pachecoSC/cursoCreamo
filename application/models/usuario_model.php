<?php

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function guardar_usuarios($paramUs){
       $campoUs= array(//llenamos el array sintaxis.. campoTabla => parametro['dato'] el dato proviene del controlador usuario
           'email'=>$paramUs['email'],
           'password'=>$paramUs['password'],
           'nombres'=>$paramUs['nombres'],
           'apellidos'=>$paramUs['apellidos'],
           'telefono'=>$paramUs['telefono'],
           'estado'=>$paramUs['estado']
       );
       $this->db->insert('usuario',$campoUs);
    }
    function lista_usuarios(){
        
        $consulta= $this->db->query('select email,password,nombres,apellidos,telefono,estado from usuario order by idusuario');
        return $consulta->result();
    }
}
