<?php $this->load->view('plantilla/header');?>

<div class="my-content" >
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 myform-cont" >
            <div class="myform-top">
                <div class="myform-top-left">
                    <h3>Actualizar datos de Profesores.</h3>
                    <p>Por favor ingresa tus nuevos datos personales:</p>
                    <?php
                    echo $error;
                    ?>
                </div>
                <div class="myform-top-right">
                    <i class="fa fa-address-card-o"></i>
                </div>
            </div>
            <div class="myform-bottom">
                <form action="<?= base_url() . 'Controlador_profesor/actualizar/' . $pro->id_profesor;?>" enctype="multipart/form-data" method="post" >
                    <div class="form-group ">
                        <label class="myform-top-left" >Nombre: </label>
                        <input type="text" name="txtNombre" class="form-control" id="nombreProfesor" value="<?php echo $pro->nombre_profesor?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Email: </label>
                        <input type="text" name="txtEmail" class="form-control" id="email" value="<?php echo $pro->email?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Especialidad: </label>
                        <input type="text" name="txtEspecialidad" class="form-control" id="especialidad" value="<?php echo $pro->especialidad ?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Descripcion: </label>
                        <input type="text" name="txtDescripcion" class="form-control" id="descripcion" value="<?php echo $pro->descripcion_profesor?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Telefono: </label>
                        <input type="text" name="txtTelefono" class="form-control" maxlength="9" value="<?php echo $pro->telefono?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Foto del profesor: </label>
                        <input type="file" name="foto_profesor" value="<?php echo $pro->foto_profesor?>">
                    </div>
                    <div class="form-group col-sm-offset-4">
                        <input type="submit" class=" btn btn-primary" value="Guardar"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="submit"  class="btn btn-danger" href="<?= base_url();?>Controlador_Profesor">Cancelar</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('plantilla/footer');?>