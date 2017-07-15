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
    public function nuevo(){
        $this->load->view('curso/nuevo');
        
    }
    public function index(){
        $datos['cursos'] = $this->Model_curso->lista_curso();
        $this->load->view('curso/index',$datos);
    }
}