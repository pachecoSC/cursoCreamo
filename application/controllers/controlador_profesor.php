<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_profesor extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_profesor');
    }
    public function nuevo(){
        $this->load->view('profesor/nuevo');
        
    }
    public function index(){
        $datos['profesores'] = $this->Model_profesor->index();
        $this->load->view('profesor/index',$datos);
    }
    public function guardarProfesor(){// accionProfesor..
        $paramProfesor['nombre_profesor']= $this->input->post('txtNombre');
        $paramProfesor['email']= $this->input->post('txtEmail');
        $paramProfesor['especialidad']= $this->input->post('txtEspecialidad');
        $paramProfesor['descripcion']= $this->input->post('txtDescripcion');
        $paramProfesor['telefono']= $this->input->post('txtTelefono');
        $paramProfesor['foto_profesor']= $this->input->post('txtFoto');
        
        $this->Model_profesor->nuevo($paramProfesor);
        
        $datos['profesores']= $this->Model_profesor->index();
        $this->load->view('profesor/index',$datos);
        
    }
}