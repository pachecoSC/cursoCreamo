<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_index extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_categoria');
        $this->load->library('session');
        $this->load->model('Modelo_login');
    }
    //se llama a la vista
    public function index(){

         //$this->load->view('principal');
       
        $this->load->helper('url');

         $this->load->view('principal');
       
       /* $this->load->helper('url');

        $datos['categorias']= $this->Modelo_categoria->listarCategoria();
        $datos['contenido']=$this->load->view('index/index',$datos);
        
        
        $this->load->view('plantilla',$datos);
        

=======
        */

         
    }
    
}
