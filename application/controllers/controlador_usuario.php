<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_usuario');
    }
    public function nuevo(){
        $this->load->view('usuario/nuevo');
    }
    
    public function guardarUsuario(){
        // guardar datos en un array 
        $paramUsusario['email'] = $this->input->post('txtEmail');
        $paramUsuario['password'] = $this->input->post('txtPassword');
        $paramUsuario['nombres_usuario'] = $this->input->post('txtNombre');
        $paramUsuario['apellidos']= $this->input->post('txtApellido');
        $paramUsuario['telefono'] = $this->input->post('txtTelefono');
        $paramUsuario['estado'] = $this->input->post('txtEstado');
        
        $this->Model_usuario->insertarUsuario($paramUsuario);//envia el array al metodo en el modelo
        
        $datos['usuarios'] = $this->Usuario_model->listarUsuario();
        $this->load->view('usuario/index',$datos);
    }
    public function index(){
        $datos['usuarios'] = $this->Model_usuario->index();
        $this->load->view('usuario/index',$datos);
    }
}