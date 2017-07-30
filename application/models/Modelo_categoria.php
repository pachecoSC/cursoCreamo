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
    
    public function listarCategoria(){
        $this->db->order_by('nombre_categoria','asc');
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
            'nombre_categoria'=>$paramCategoria['nombre_categoria'],
            'foto_categoria'=>$paramCategoria['foto_categoria'],
            'descripcion_categoria'=>$paramCategoria['descripcion_categoria']
            );
            $this->db->insert('categoria_curso',$campoCategoria);
    }
    
    function listarCursos($ida){
        $consulta= $this->db->query('select c.id_curso as id_cu,c.nombre_curso as nombre,c.descripcion_curso as descripcion,c.enlace as enlace,c.precio as precio,c.cantidad_horas as horas,
                    c.foto_curso as foto_cu,tc.nombre_tipo_curso as tipo,p.nombre_profesor as profesor,ec.descripcion_estado as estado
                    from curso as c inner join tipo_curso as tc on c.tipo_curso_id_tipo_curso=tc.id_tipo_curso
                    inner join profesor as p on c.profesor_id_profesor=p.id_profesor
                    inner join categoria_curso as ca on c.categoria_curso_id_categoria_curso=ca.id_categoria_curso
                    inner join estado_curso as ec on c.estado_curso_id_estado_curso=ec.id_estado_curso
                    where ca.nombre_categoria="'.$ida.'"');
        //$consulta= $this->db->query('select * from curso where categoria_curso_id_categoria_curso='. $id);
        if($consulta->num_rows()>0){
            return $consulta->result();
        }else{
            return FALSE;
        }
    
    }
}
