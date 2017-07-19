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
    }
    //envia a pagina donde lista las categorias;
    public function index(){
        $datos['categorias']= $this->Modelo_categoria->listarCategoria();
        $this->load->view('categoria/index',$datos);
    }
    //meotodo recive de boton de formulario y envia a modelo
    public function guardarCategoria(){
        //confgura donde se va a guardar las imagenes y cuales son los archivos que acepta
         $config['upload_path'] = '.\img\uploads' ;
                 $config['allowed_types'] = 'gif|jpg|png' ;
                 $config [ 'max_size' ] = 100 ;
                 $config [ 'max_width' ] = 1024 ;
                 $config [ 'max_height' ] = 768 ;

                 $this->load->library ('upload',$config);

                 if ( ! $this->upload->do_upload ( 'txtFoto' ))
                 {
                         $error = array ( 'error' => $this -> upload -> display_errors ());

                         $this -> load -> view ( 'categoria/nuevo' , $error );
                 }
                 else
                 {
                         $data = array ( 'upload_data' => $this -> upload -> data ());
                         
                         $paramCategoria['nombre_categoria']= $this->input->post('txtNombre');
                         $paramCategoria['foto_categoria']= $data['upload_data']['file_name'];
                         $this -> load -> view ( 'categoria/index' , $data );
                 }
        
        
    }
   
}
