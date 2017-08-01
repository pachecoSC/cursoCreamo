<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_profesor extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_profesor');
    }
    public function nuevo(){
        $this->load->view('profesor/nuevo',array('error' => ' '));
        
        $this->load->library('upload');
    }
    public function index(){
        $datos['profesores'] = $this->Modelo_profesor->listarProfesor();
        $this->load->view('profesor/index',$datos);
    }


       public function guardarProfesor(){// accionProfesor..
        $config=["upload_path"=>"./img/",'allowed_types'=>"png|jpg|jpeg|gif"];
        $this->load->library("upload",$config);  
        if($this->upload->do_upload('foto_profesor')){
            $data= array("upload_data"=> $this->upload->data());
            $paramProfesor['nombre_profesor']= $this->input->post('txtNombre');
            $paramProfesor['email']= $this->input->post('txtEmail');
            $paramProfesor['especialidad']= $this->input->post('txtEspecialidad');
            $paramProfesor['descripcion_profesor']= $this->input->post('txtDescripcion');
            $paramProfesor['telefono']= $this->input->post('txtTelefono');
            $paramProfesor['foto_profesor']= $data['upload_data']['file_name'];
            $this->Modelo_profesor->insertarProfesor($paramProfesor);
            $datos['profesores']= $this->Modelo_profesor->listarProfesor();
            $this->load->view('profesor/index',$datos);
        }else{
            $error= array('error'=> $this->upload_>display_errors());
            $this->load->view('profesor/nuevo',$error);
        }
        
        

        
        
        
        
        
    }
}
