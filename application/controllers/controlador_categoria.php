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
    }
    public function nuevo(){
        $this->load->view('categoria/nuevo');
    }
}
