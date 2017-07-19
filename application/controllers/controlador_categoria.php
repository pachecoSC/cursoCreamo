<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controlador_categoria extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_categoria');
         $this -> load -> library ( 'upload' );
    }
    //envia a la pagina donde se encuentra el formulario;
    public function nuevo(){
        $this->load->view('categoria/nuevo',array('error' => ' '));
        $this->load->library('upload');
    }
    //envia a pagina donde lista las categorias;
    public function index(){
        $datos['categorias']= $this->Modelo_categoria->listarCategoria();
        $this->load->view('categoria/index',$datos);
    }
    //meotodo recive de boton de formulario y envia a modelo
    public function guardarCategoria(){
        //confgura donde se va a guardar las imagenes y cuales son los archivos que acepta
                $mi_archivo=$_FILES['txtFoto']['name'];
                $config['upload_path'] = './img/foder/';
                $config['file_name']=$mi_archivo;
                $config['allowed_types'] = 'gif|jpeg|jpg|png';
               
                 $this->load->library('upload',$config);
                 
                 $this->upload->do_upload();
                         
                $paramCategoria['nombre_categoria']= $this->input->post('txtNombre');
                $paramCategoria['foto_categoria']= $config['file_name'];
                
                $this->Modelo_categoria->insertarCategoria($paramCategoria);
                
                $datos['categorias']= $this->Modelo_categoria->listarCategoria();
                $this->load->view('categoria/index',$datos);

                 /*if ( ! $this->upload->do_upload($mi_archivo))
                 {
                         $error = array('error'=>$this->upload->display_errors());

                         $this->load->view('categoria/nuevo',$error);
                 }
                 else
                 {
                         
                 }
                  * 
                  */
        
        
    }
   
}
