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
    
    function ListarCurso(){
        
        
        /*volver a realizar la consulta con los nuevos campos..
        $consulta= $this->db->query('select tc.nombre as nombre1,ttc.nombre as nombre2,tca.nombre as nombre3
            from tcurso as tc inner join ttipocurso as ttc on tc.idTipo=ttc.idTipo
            inner join tcategoria as tca on tc.idCategoria=tca.idCategoria order by tc.idCurso');
        return $consulta->result();
         * 
         */
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
    function insertarCurso(){
        
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
}

