<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_index extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
    }
    //se llama a la vista
    public function index(){
        //$this->load->helper('url');
        $this->load->view('principal');
         
    }
    
}
