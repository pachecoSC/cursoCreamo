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
           'estado_usuario'=>$paramUsuario['estado_usuario'],
           'tipo_usuario'=> $paramUsuario['tipo_usuario']
       );
       $this->db->insert('usuario',$campoUsuario);
    }
    function listarUsuario(){
        $this->db->order_by('nombre_usuario','asc');
        $this->db->where('estado_usuario',1);
        $consulta= $this->db->get('usuario');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
    }
    function obtenerUsuario($id){
        $this->db->where('id_usuario',$id);
        $consulta= $this->db->get('usuario');
        if($consulta->num_rows()>0){
            return $consulta->row();
        } else {
            return NULL;
        }
    }
    function actualizarUsuario($id,$paramUsuario){
        $campoUsuario= array(//llenamos el array sintaxis.. campoTabla => parametro['dato'] el dato proviene del controlador usuario
           'email'=>$paramUsuario['email'],
           'password'=>$paramUsuario['password'],
           'nombre_usuario'=>$paramUsuario['nombre_usuario'],
           'apellidos'=>$paramUsuario['apellidos'],
           'telefono'=>$paramUsuario['telefono'],
           'estado_usuario'=>$paramUsuario['estado_usuario'],
           'tipo_usuario'=> $paramUsuario['tipo_usuario']
       );
       $this->db->where('id_usuario',$id);
       $this->db->update('usuario',$campoUsuario);
    }
    
    function despedirUsusario($id){
        $consulta = $this->db->query('update usuario set estado_usuario=0 where id_usuario='.$id);
    }
}
