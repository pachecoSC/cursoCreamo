<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
    }
    
    function index(){
        $this->load->model('Curso_model');
        $datos['cursitos'] = $this->Curso_model->lista_curso();
        $this->load->view('Curso',$datos);
         
    }
}
