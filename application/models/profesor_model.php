<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Profesor_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    public function lista_profesores(){
        $consulta= $this->db->get('profesor');
        if($consulta->num_rows() > 0){
            return $consulta->result();
        }else{
            return FALSE;
        }
    }
    function obtenerProfesor($id){
        $this->db->where('idprofesor',$id);
        $consulta = $this->db->get('profesor');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        }else{
            return FALSE;
        }
    }
    
    function guardar_profesores($paramPr){
        $campoPr= array(
            'nombrep'=>$paramPr['nombrep'],
            'email'=>$paramPr['email'],
            'especialidad'=>$paramPr['especialidad'],
            'descripcion'=>$paramPr['descripcion'],
            'telefono'=>$paramPr['telefono'],
            'fotop_url'=>$paramPr['fotop_url']
            );
            $this->db->insert('profesor',$campoPr);
    }
}
