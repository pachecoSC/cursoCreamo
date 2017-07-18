<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Modelo_curso extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function listarCurso(){
        $this->db->order_by('nombre_curso','asc');
        $consulta= $this->db->query('select c.nombre_curso as nombre,c.descripcion_curso as descripcion,c.enlace as enlace,c.precio as precio,c.cantidad_horas as horas,
                    c.foto_curso as foto,tc.nombre_tipo_curso as tipo,p.nombre_profesor as profesor,ca.nombre_categoria as categoria,ec.descripcion_estado as estado
                    from curso as c inner join tipo_curso as tc on c.tipo_curso_id_tipo_curso=tc.id_tipo_curso
                    inner join profesor as p on c.profesor_id_profesor=p.id_profesor
                    inner join categoria_curso as ca on c.categoria_curso_id_categoria_curso=ca.id_categoria_curso
                    inner join estado_curso as ec on c.estado_curso_id_estado_curso=ec.id_estado_curso');
        return $consulta->result();
    }
    
    /*function obtenerCurso($id){
        $this->db->where('id_curso',$id);
        $consulta = $this->db->get('curso');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        }else{
            return FALSE;
        }
    }*/
    function insertarCurso($paramCurso){
        $campoCurso=array(
            'nombre_curso'=>$paramCurso['nombre_curso'],
            'descripcion_curso'=>$paramCurso['descripcion_curso'],
            'enlace'=>$paramCurso['enlace'],
            'precio'=>$paramCurso['precio'],
            'cantidad_horas'=>$paramCurso['cantidad_horas'],
            'foto_curso'=>$paramCurso['foto_curso'],
            'tipo_curso_id_tipo_curso'=>$paramCurso['tipo_curso_id_tipo_curso'],
            'profesor_id_profesor'=>$paramCurso['profesor_id_profesor'],
            'categoria_curso_id_categoria_curso'=>$paramCurso['categoria_curso_id_categoria_curso'],
            'estado_curso_id_estado_curso'=>$paramCurso['estado_curso_id_estado_curso']
        );
        $this->db->insert('curso',$campoCurso);
    }
    //metodo que obtiene consulta para llenar combo
    function llenarTipoCurso(){
        $this->db->order_by('nombre_tipo_curso','asc');
        $consulta = $this->db->get('tipo_curso');
        
        // hay 1 a mas resultados
        if($consulta->num_rows() > 0){
            return $consulta->result();
        }
    }
    //meotodo que llena el combo box de estado
    function llenarEstadoCurso(){
        $this->db->order_by('descripcion_estado','asc');
        $consulta = $this->db->get('estado_curso');
        //existe 1 a mas resultado
        if($consulta->num_rows()>0){
            return $consulta->result();
        }
    }
    // metodo que llena combo box de profesores
    function llenarProfesor(){
        $this->db->order_by('nombre_profesor','asc');
        $consulta = $this->db->get('profesor');
        
        // existe 1 a mas resultados
        if($consulta->num_rows()>0){
            return $consulta->result();
        }
    }
    // metodo que llena combo box de categorias
    function llenarCategoriaCurso(){
        $this->db->order_by('nombre_categoria','asc');
        $consulta = $this->db->get('categoria_curso');
        if($consulta->num_rows()>0){
            return $consulta->result();
        }
    }
}

