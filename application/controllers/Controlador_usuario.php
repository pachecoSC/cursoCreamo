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
        $paramUsuario['tipo_usuario']= $this->input->post('txtCargo');
        
        $this->Modelo_usuario->insertarUsuario($paramUsuario);//envia el array al metodo en el modelo
        
        header("Location:". base_url()."controlador_index/");
    }
    public function index(){
        $datos['usuarios'] = $this->Modelo_usuario->listarUsuario();
        $this->load->view('usuario/index',$datos);
    }
    public function editar(){
        $id= $this->uri->segment(3);
        $datos['usu'] =$this->Modelo_usuario->obtenerUsuario($id);
        $this->load->view('usuario/editar',$datos);
    }
    public function actualizar(){
        $id= $this->uri->segment(3);
        $paramUsuario['email'] = $this->input->post('txtEmail');
        $paramUsuario['password'] = $this->input->post('txtPassword');
        $paramUsuario['nombre_usuario'] = $this->input->post('txtNombre');
        $paramUsuario['apellidos']= $this->input->post('txtApellido');
        $paramUsuario['telefono'] = $this->input->post('txtTelefono');
        $paramUsuario['estado_usuario'] = $this->input->post('txtEstado');
        $paramUsuario['tipo_usuario']= $this->input->post('txtCargo');
        
        $this->Modelo_usuario->actualizarUsuario($id,$paramUsuario);
        
        $datos['usuarios'] = $this->Modelo_usuario->listarUsuario();
        $this->load->view('usuario/index',$datos);
    }
    public function eliminar(){
        $id= $this->uri->segment(3);
        $this->Modelo_usuario->despedirUsusario($id);
        
        $datos['usuarios'] = $this->Modelo_usuario->listarUsuario();
        $this->load->view('usuario/index',$datos);
    }
}