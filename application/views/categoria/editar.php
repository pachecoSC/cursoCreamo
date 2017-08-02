<?php $this->load->view('plantilla/header');?>

<div class="my-content" >
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 myform-cont" >
            <div class="myform-top">
                <div class="myform-top-left">
                    <h3>Actualizar datos de Categoria.</h3>
                    <p>Por favor ingresa nuevos datos:</p>
                    <?php
                    echo $error;
                    ?>
                </div>
                <div class="myform-top-right">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="myform-bottom">
                 <form action="<?= base_url() . 'Controlador_categoria/actualizar/' . $catg->id_categoria_curso;?>" enctype="multipart/form-data" method="post" >
                    <div class="form-group ">
                        <label class="myform-top-left" >Nombre: </label>
                        <input type="text" name="txtNombre"class="form-control" id="nombreCategoria" value="<?php echo $catg->nombre_categoria;?>">
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Descripcion: </label>
                        <input type="text" name="txtDecripcion" class="form-control" id="descripcion" value="<?php echo $catg->descripcion_categoria;?>" >
                    </div>
                    <div class="form-group">
                        <label class="myform-top-left" >Foto de categoria: </label>
                        <input type="file" name="foto_categoria" value="<?php echo $catg->foto_categoria;?>">
                    </div>
                    
                    <div class="form-group col-sm-offset-4">
                        <input type="submit" class=" btn btn-primary" value="Guardar"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="submit"  class="btn btn-danger" href="<?= base_url();?>Controlador_categoria">Cancelar</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('plantilla/footer'); ?>