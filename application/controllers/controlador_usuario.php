<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_usuario');
    }
    public function nuevo(){
        $this->load->view('usuario/nuevo');
    }
    
     function guardarUsuario(){
        // guardar datos en un array 
        $paramUsuario['email'] = $this->input->post('txtEmail');
        $paramUsuario['password'] = $this->input->post('txtPassword');
        $paramUsuario['nombre_usuario'] = $this->input->post('txtNombre');
        $paramUsuario['apellidos']= $this->input->post('txtApellido');
        $paramUsuario['telefono'] = $this->input->post('txtTelefono');
        $paramUsuario['estado_usuario'] = $this->input->post('txtEstado');
        
        $this->Modelo_usuario->insertarUsuario($paramUsuario);//envia el array al metodo en el modelo
        
        $datos['usuarios'] = $this->Modelo_usuario->listarUsuario();
        $this->load->view('usuario/index',$datos);
    }
    public function index(){
        $datos['usuarios'] = $this->Modelo_usuario->listarUsuario();
        $this->load->view('usuario/index',$datos);
    }
}