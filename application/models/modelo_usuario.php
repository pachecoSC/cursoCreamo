<?php

class Modelo_usuario extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function insertarUsuario($paramUsuario){
       $campoUsuario= array(//llenamos el array sintaxis.. campoTabla => parametro['dato'] el dato proviene del controlador usuario
           'email'=>$paramUsuario['email'],
           'password'=>$paramUsuario['password'],
           'nombre_usuario'=>$paramUsuario['nombre_usuario'],
           'apellidos'=>$paramUsuario['apellidos'],
           'telefono'=>$paramUsuario['telefono'],
           'estado_usuario'=>$paramUsuario['estado_usuario']
       );
       $this->db->insert('usuario',$campoUsuario);
    }
    function listarUsuario(){
        $this->db->order_by('nombre_usuario','asc');
        $consulta= $this->db->get('usuario');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
        /* realiza la consulta con lenguaje transsaction
         $consulta= $this->db->query('select email,password,nombres,apellidos,telefono,estado from usuario order by idusuario');
        return $consulta->result();
         * 
         */
    }
}