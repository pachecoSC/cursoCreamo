<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Curso_model');
    }
    
    function index(){
        $datos['curso'] = $this->Curso_model->lista_curso();
        $this->load->view('Curso',$datos);
    }
}
