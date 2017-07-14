<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_profesor extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Profesor_model');
    }
    public function vista_FormProfesor(){
        $this->load->view('profesor/formProfesor');
        
    }
    public function vista_ListaProfesores(){
        $datos['profesores'] = $this->Profesor_model->lista_profesores();
        $this->load->view('profesor/vistaProfesor',$datos);
    }
    public function guardarPr(){
        $paramPr['nombrep']= $this->input->post('txtNombre');
        $paramPr['email']= $this->input->post('txtEmail');
        $paramPr['especialidad']= $this->input->post('txtEspecialidad');
        $paramPr['descripcion']= $this->input->post('txtDescripcion');
        $paramPr['telefono']= $this->input->post('txtTelefono');
        $paramPr['fotop_url']= $this->input->post('txtFoto');
        
        $this->Profesor_model->guardar_profesores($paramPr);
        
        $datos['profesores']= $this->Profesor_model->lista_profesores();
        $this->load->view('profesor/vistaProfesor',$datos);
        
    }
}

