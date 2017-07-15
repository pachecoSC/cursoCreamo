<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_curso extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_curso');
    }
    
    public function index(){
        // obtenemos el array con los datos dentro de la tabla curso
        $datos['cursos'] = $this->Model_curso->listar_curso();
        //enviamos los atributos a la vista
        $this->load->view('curso/index',$datos);
        
    }
    
    public function nuevo(){
        
        
        //obtener el array con los datos de tipo curso
        $datos['tipoc']= $this->Model_curso->obtenerTipoCurso() ;
         //obtener el arrau con los datos de profesores
         $datos['nombre_p']= $this->Model_curso->obtenerProfesor();
        
         $this->load->view('curso/nuevo',$datos);
         //$this->load->view('curso/nuevo',$datoprofesor);
    }
}