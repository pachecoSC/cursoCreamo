<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controlador_login extends CI_Controller{
    
   public function __construct(){
       parent::__construct();
       $this->load->model('Modelo_login');
   }
       
   public function index(){
       $email = $this->input->post('txtusuario');
       $password= $this->input->post('txtpassword');
       //guardar resultado de consulta en una variable
       $fila= $this->Modelo_login->obtenerUsuario($email);
       if($fila != null){//si no esta vacio.. tiene objetos
           if($fila->password == $password){// el usuario existe
               $data= array('email'=>$email,'cargo'=>$fila->tipo_usuario,'login'=> TRUE);
               $this->session->set_userdata($data);
               header("Location:". base_url()."controlador_index");
           }else{
               print '<script language="javaScript">'; 
               print 'alert("Error!! contraseña erronea.")'; 
               print '</script>';
               header("Location:". base_url()."controlador_index/");
               //http://localhost/repositorio/trunk/
           }
       }else{
           header("Location:". base_url());
       }
          
   }
   public function logout(){
    $this->session->sess_destroy();
    header("Location:". base_url()."controlador_index/");
   }
}