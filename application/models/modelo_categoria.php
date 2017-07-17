<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Modelo_categoria extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listarCategorias(){
        $consulta= $this->db->get('categoria_curso');
        if($consulta->num_rows() > 0){
            return $consulta->result();
        }else{
            return FALSE;
        }
    }
    function obtenerCategoria($id){
        $this->db->where('id_categoria_curso',$id);
        $consulta = $this->db->get('categoria_curso');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        }else{
            return FALSE;
        }
    }
    
    function insertarCategoria($paramCategoria){
        $campoCategoria= array(
            'categoria_curso'=>$paramCategoria['nombre_categoria'],
            'foto_categoria'=>$paramCategoria['foto_categoria']
            );
            $this->db->insert('categoria_curso',$campoCategoria);
    }
}
