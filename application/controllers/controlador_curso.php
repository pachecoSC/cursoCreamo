<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_curso extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_curso');
    }
    
    public function index(){
        // obtenemos el array con los datos dentro de la tabla curso
        $datos['cursos'] = $this->Modelo_curso->listar_curso();
        //enviamos los atributos a la vista
        $this->load->view('curso/index',$datos);
        
    }
    
    public function nuevo(){
        
        
        //obtener el array con los datos de tipo curso
        $datos['tipoc']= $this->Modelo_curso->llenarTipoCurso() ;
         //obtener el arrau con los datos de profesores
        $datos['profesores']= $this->Modelo_curso->llenarProfesor();
        //obtener el array con los datos de estados
        $datos['estados']= $this->Modelo_curso->llenarEstadoCurso();
        
         $this->load->view('curso/nuevo',$datos);
         //$this->load->view('curso/nuevo',$datoprofesor);
    }
}