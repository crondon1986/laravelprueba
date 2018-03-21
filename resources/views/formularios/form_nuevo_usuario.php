<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Crear Usuario</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  id="f_nuevo_usuario"  method="post"  action="agregar_nuevo_usuario" class="form-horizontal form_entrada" >                
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="ciudad">Cedula</label>
                      <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="cedula" >
</div>
<div class="form-group col-xs-6">
                      <label for="nombre">Nombres*</label>
                      <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" >
</div>
<div class="form-group col-xs-6">
                      <label for="apellido">Apellidos</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
</div>

<div class="form-group col-xs-6">
                      <label for="pais">Perfil</label>
                      
                     
                       <select id="pais" name="pais" class="form-control">



<option value="Administrador">Administrador</option>
<option value="Secretaria">Secretaria</option>
<option value="Coordinador">Coordinador</option>
                     
                      </select>              
</div>


<div class="form-group col-xs-12">
                      <label for="institucion">Departamento</label>
                      <input type="text" class="form-control" id="institucion" name="institucion" placeholder="institucion" >
</div>
<div class="form-group col-xs-12">
                      <label for="ocupacion">Cargo</label>
                      <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="ocupacion" >
</div>
<div class="form-group col-xs-12">
                      <label for="email">Email*</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="email" >
</div>

<div class="form-group col-xs-12">
                      <label for="email">password*</label>
                      <input type="password" class="form-control" id="password" name="password" p required >
</div>

</div>




<div class="box-footer col-xs-12 ">
                    <button type="submit" class="btn btn-primary">Guardar</button>
</div>


</form>

</div>
