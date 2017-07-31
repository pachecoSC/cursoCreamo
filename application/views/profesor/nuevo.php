<?php $this->load->view('plantilla/header');?>

<div class="my-content" >
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 myform-cont" >
            <div class="myform-top">
                <div class="myform-top-left">
                    <h3>Formulario de Profesores.</h3>
                    <p>Por favor ingresa tus datos personales:</p>
                    <?php
                    echo $error;
                    ?>
                </div>
                <div class="myform-top-right">
                    <i class="fa fa-address-card-o"></i>
                </div>
            </div>
            <div class="myform-bottom">
                <form action="<?= base_url();?>Controlador_profesor/guardarProfesor" enctype="multipart/form-data" method="post" >
                    <div class="form-group ">
                        <label class="myform-top-left" >Nombre: </label>
                        <input type="text" name="txtNombre" placeholder="Nombres..." class="form-control" id="nombreProfesor">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Email: </label>
                        <input type="text" name="txtEmail" placeholder="Email@ejemplo.com" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Especialidad: </label>
                        <input type="text" name="txtEspecialidad" placeholder="especializacion del docente" class="form-control" id="especialidad">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Descripcion: </label>
                        <input type="text" name="txtDescripcion" placeholder="datos especiales" class="form-control" id="especialidad">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Telefono: </label>
                        <input type="text" name="txtTelefono" placeholder="#########" class="form-control" maxlength="9">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Foto del profesor: </label>
                        <input type="file" name="foto_profesor">
                    </div>
                    <div class="form-group col-sm-offset-4">
                        <input type="submit" class=" btn btn-primary" value="Guardar"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="submit"  class="btn btn-danger" href="<?= base_url();?>Controlador_index">Cancelar</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('plantilla/footer');?>