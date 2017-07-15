<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_index extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Curso_model');
        $this->load->model('Usuario_model');
        
    }
    //se llama a la vista
    public function index(){
        //$this->load->helper('url');
        $this->load->view('plantilla');
         
    }
    
}
