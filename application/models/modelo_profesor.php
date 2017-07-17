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
            'nombre_profesor'=>$campoProfesor['nombre_profesor'],
            'email'=>$campoProfesor['email'],
            'especialidad'=>$paramProfesor['especialidad'],
            'descripcion_profesor'=>$paramProfesor['descripcion_profesor'],
            'telefono'=>$paramProfesor['telefono'],
            'foto_profesor'=>$paramProfesor['foto_profesor']
            );
            $this->db->insert('profesor',$campoProfesor);
    }
}
