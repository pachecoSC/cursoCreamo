
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
        $this->load->view('categoria/nuevo',array('error' => ' '));
        $this->load->library('upload');
    }
    //envia a pagina donde lista las categorias;
    public function index(){
        $datos['categorias']= $this->Modelo_categoria->listarCategoria();
        $this->load->view('categoria/index',$datos);
    }
    //meotodo recive de boton de formulario y envia a modelo
    public function guardarCategoria(){//http://www.creamos.la/creamos/
                 $config=["upload_path"=>"./img/categoria/",
                     'allowed_types'=>"png|jpg|jpeg|gif"];
                 $this->load->library("upload",$config);
                 if($this->upload->do_upload('foto_categoria') ){
                     $data=array("upload_data" => $this->upload->data());
                     
                     $paramCategoria['nombre_categoria']= $this->input->post('txtNombre');
                    $paramCategoria['foto_categoria']= $data['upload_data']['file_name'];
                    $paramCategoria['descripcion_categoria']= $this->input->post('txtDecripcion');
                    $this->Modelo_categoria->insertarCategoria($paramCategoria);
                    $datos['categorias']= $this->Modelo_categoria->listarCategoria();
                    $this->load->view('categoria/index',$datos);
                 }else{
                     $error = array('error'=>$this->upload->display_errors());

                     $this->load->view('categoria/nuevo',$error);
                 }
    }
    
    public function verCursos(){
        $idca= $this->uri->segment(3);
        $data['curCat']= $this->Modelo_categoria->listarCursos($idca);
        $data['id']=$idca;
        //$datos['curCat'] =$this->Modelo_categoria->listarCursosCategoria($id);
        $this->load->view('categoria/cursosCategoria',$data);
    }
    
   public function editar(){
        $id= $this->uri->segment(3);
        $datos['error']='';
        $datos['catg'] =$this->Modelo_categoria->obtenerCategoria($id);
        $this->load->view('categoria/editar',$datos);
    }
    public function actualizar(){
        $config = ["upload_path" => "./img/categoria/",
            'allowed_types' => "png|jpg|jpeg|gif"];
        $this->load->library("upload", $config);
        if ($this->upload->do_upload('foto_categoria')) {
            $id = $this->uri->segment(3);
            $data = array("upload_data" => $this->upload->data());

            $paramCategoria['nombre_categoria'] = $this->input->post('txtNombre');
            $paramCategoria['foto_categoria'] = $data['upload_data']['file_name'];
            $paramCategoria['descripcion_categoria'] = $this->input->post('txtDecripcion');
            
            $this->Modelo_categoria->actualizarCategoria($id, $paramCategoria);
            $datos['categorias'] = $this->Modelo_categoria->listarCategoria();
            $this->load->view('categoria/index', $datos);
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('categoria/nuevo', $error);
        }
    }
    
    public function eliminar(){
        $id= $this->uri->segment(3);
        $this->Modelo_categoria->eliminarCategoria($id);
        
        $datos['categorias'] = $this->Modelo_categoria->listarCategoria();
        $this->load->view('categoria/index',$datos);
    }
}