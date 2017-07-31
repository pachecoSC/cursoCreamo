<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Modelo_profesor extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    public function listarProfesor(){
        $this->db->order_by('nombre_profesor','asc');
        $consulta= $this->db->get('profesor');
        if($consulta->num_rows() > 0){
            return $consulta->result();
        }else{
            return FALSE;
        }
    }
    function obtenerIdProfesor($id){
        $this->db->where('id_profesor',$id);
        $consulta = $this->db->get('profesor');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        }else{
            return FALSE;
        }
    }
    
    function insertarProfesor($paramProfesor){
        $campoProfesor= array(
            'nombre_profesor'=>$paramProfesor['nombre_profesor'],
            'email'=>$paramProfesor['email'],
            'especialidad'=>$paramProfesor['especialidad'],
            'descripcion_profesor'=>$paramProfesor['descripcion_profesor'],
            'telefono'=>$paramProfesor['telefono'],
            'foto_profesor'=>$paramProfesor['foto_profesor']
            );
            $this->db->insert('profesor',$campoProfesor);
    }
    function obtenerProfesor($id){
        $this->db->where('id_profesor',$id);
        $consulta= $this->db->get('profesor');
        if($consulta->num_rows()>0){
            return $consulta->row();
        } else {
            return NULL;
        }
    }
    function actualizarProfesor($id,$paramProfesor){
        $campoProfesor= array(//llenamos el array sintaxis.. campoTabla => parametro['dato'] el dato proviene del controlador usuario
           'nombre_profesor'=>$paramProfesor['nombre_profesor'],
            'email'=>$paramProfesor['email'],
            'especialidad'=>$paramProfesor['especialidad'],
            'descripcion_profesor'=>$paramProfesor['descripcion_profesor'],
            'telefono'=>$paramProfesor['telefono'],
            'foto_profesor'=>$paramProfesor['foto_profesor']
        );
       $this->db->where('id_profesor',$id);
       $this->db->update('profesor',$campoProfesor);
    }
    
    /*se puede eliminar o guardar registro de despedidos.. agregando campo estado a la tabla profesor
    function despedirProfesor($id){
        $this->db->query('update profesor set estado_profesor=0 where id_profesor='.$id);
    }*/
    //eliminar profesor de forma permanente
    function despedirProfesor($id){
        $this->db->where('id_profesor',$id);
        $this->db->delete('profesor');
    }
}
