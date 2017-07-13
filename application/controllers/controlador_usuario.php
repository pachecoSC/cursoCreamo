<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }
    public function vista_FormUser(){
        $this->load->view('usuario/formUser');
    }
    
    public function guardarUs(){
        $paramUs['usser'] = $this->input->post('txtUsser');
        $paramUs['password'] = $this->input->post('txtPassword');
        $paramUs['nombre'] = $this->input->post('txtNombre');
        $paramUs['telefono'] = $this->input->post('txtTelefono');
        
        $this->
        
        $this->load->view('usuario/vistaUsuario');
    }
}