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
    //envia a la pagina donde se encuentra el formulario;
    public function nuevo(){
        $this->load->view('categoria/nuevo');
    }
    //envia a pagina donde lista las categorias;
    public function index(){
        $datos['categorias']= $this->ModeloCategoria->listarCategoria();
        $this->load->view('categoria/index',$datos);
    }
    //meotodo recive de boton de formulario y envia a modelo
    public function guardarCategoria(){
        $paramCategoria['categoria_curso']= $this->input->post('txtNombre');
        $paramCategoria['foto_categoria']= $this->input->post('txtFoto');
        //guardar los parametros y enviarlos al modelo categoia a la funcion 
        $this->Modelo_Categoria->insertarCategoria($paramCategoria);
        
        //cargar vista con la lista de categorias
        $datos['categorias']= $this->Modelo_categoria->listarCategoria();
        $this->load->view('categoria/index',$datos);
    }
   
}
