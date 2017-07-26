<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_curso extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_curso');
    }
    //pagna que lista las categorias
    public function index(){
        // obtenemos el array con los datos dentro de la tabla curso
        $datos['cursos'] = $this->Modelo_curso->listarCurso();
        //enviamos los atributos a la vista
        $this->load->view('curso/index',$datos);
    }
    public function mostrarCurso(){
        $idcu= $this->uri->segment(3);
        $data['nombre'] = $this->Modelo_curso->obtenerNombreCurso($idcu);
        $data['cursos'] = $this->Modelo_curso->mostrarCurso($idcu);
        $this->load->view('curso/index',$data);
    }
    //pagina que carga el formulario
    public function nuevo(){
        $this->load->library('upload');
        //obtener el array con los datos de tipo curso
        $datos['tipos']= $this->Modelo_curso->llenarTipoCurso() ;
         //obtener el arrau con los datos de profesores
        $datos['profesores']= $this->Modelo_curso->llenarProfesor();
        //obtener el array con los datos de estados
        $datos['estados']= $this->Modelo_curso->llenarEstadoCurso();
        //obtener el array de los datos de categorias
        $datos['categorias']= $this->Modelo_curso->llenarCategoriaCurso();
        $datos['error']='';
         $this->load->view('curso/nuevo',$datos);
         //$this->load->view('curso/nuevo',$datoprofesor);
    }
    public function guardarCurso(){
        $config=["upload_path"=>"./img/cursos/",'allowed_types'=>"png|jpg|jpeg|gif"];
        $this->load->library("upload",$config);
        
        if($this->upload->do_upload('foto_curso')){$data=array("upload_data"=> $this->upload->data());
            $paramCurso['nombre_curso']= $this->input->post('txtNombre');
            $paramCurso['descripcion_curso']= $this->input->post('txtDescripcion');
            $paramCurso['enlace']= $this->input->post('txtEnlace');
            $paramCurso['precio']= $this->input->post('txtPrecio');
            $paramCurso['cantidad_horas']= $this->input->post('txtHoras');
            $paramCurso['foto_curso']= $data['upload_data']['file_name'];
            $paramCurso['tipo_curso_id_tipo_curso']= $this->input->post('id_tipo');
            $paramCurso['profesor_id_profesor']= $this->input->post('id_profesor');
            $paramCurso['categoria_curso_id_categoria_curso']= $this->input->post('id_categoria');
            $paramCurso['estado_curso_id_estado_curso']= $this->input->post('id_estados');
            $this->Modelo_curso->insertarCurso($paramCurso); //envia el array al metodo en el modelo
        }else{
            $error= array('error'=> $this->upload->display_errors());
            $this->load->view('curso/nuevo',$error);
        }
        $datos['cursos']= $this->Modelo_curso->listarCurso();
        $this->load->view('curso/index',$datos);
    }
}