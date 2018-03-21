<div class="box box-primary">

<div class="box-header">
                  <h3 class="box-title">Usuarios</h3>
                </div>

<div class="box-body">              
<?php 

if( count($usuarios) >0){
?>

<table id="tabla_pacientes" class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>email</th>
                <th>Perfil</th>
                <th>Departamento</th>
                <th>Tipo de Personal</th>
                <th>Fecha Creado</th>
             
              <th>Acción</th>
            </tr>
        </thead>
 
        
       
<tbody>


<?php 

   foreach($usuarios as $usuario){  
?>

 <tr role="row" class="odd">
    <td class="sorting_1"><?= $usuario->id; ?></td>
    <td><?= $usuario->ciudad;  ?></td>
    <td class="mailbox-messages mailbox-name" ><a href="javascript:void(0);" onclick="mostrarficha(<?= $usuario->id; ?>);"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;<?= $usuario->nombres." ".$usuario->apellidos;  ?></a></td>
    <td><?= $usuario->email;  ?></td>
    <td><?= $usuario->pais;  ?></td>
    <td><?= $usuario->institucion;  ?></td>
    <td><?= $usuario->ocupacion;  ?></td>
    <td><?= $usuario->created_at;  ?></td>
    <td><button class="btn  btn-skin-green btn-xs" onclick="mostrarficha(<?= $usuario->id; ?>);" ><i class="fa fa-fw fa-eye"></i>Editar</button> <button class="btn  btn-skin-green btn-xs" onclick="mostrarficha(<?= $usuario->id; ?>);" ><i class="fa fa-fw fa-eye"></i>Eliminar</button>
    <button class="btn  btn-skin-green btn-xs" onclick="mostrarficha(<?= $usuario->id; ?>);" ><i class="fa fa-fw fa-eye"></i>Ver</button></td>
</tr>

<?php        
}
?>


  

    </table>



    <?php


echo str_replace('/?', '?', $usuarios->render() )  ;

}
else
{

?>


<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun usuario...</label>  </div> 

<?php
}

?>
</div>



