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
        // guardar datos en un array 
        $paramUs['email'] = $this->input->post('txtEmail');
        $paramUs['password'] = $this->input->post('txtPassword');
        $paramUs['nombres'] = $this->input->post('txtNombre');
        $paramUs['apellidos']= $this->input->post('txtApellido');
        $paramUs['telefono'] = $this->input->post('txtTelefono');
        $paramUs['estado'] = $this->input->post('txtEstado');
        
        $this->Usuario_model->guardar_usuarios($paramUs);//envia el array al metodo en el modelo
        
        $datos['usuarios'] = $this->Usuario_model->lista_usuarios();
        $this->load->view('usuario/vistaUsuario',$datos);
    }
    public function vista_ListaUsuarios(){
        $datos['usuarios'] = $this->Usuario_model->lista_usuarios();
        $this->load->view('usuario/vistaUsuario',$datos);
    }
}