<div class="container col-xs-12">
  <?php 
    $tam = count($datos);
    $i = 0;
  ?>	
	<h3>Control de Usuario</h3>
	<hr/>
	<div class="form-group">
    <input type="text" class="search form-control" placeholder="Ingresa cualquier palabra">
  </div>

  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#prueba">
    <span class="glyphicon glyphicon-plus"></span> Agregar usuario
  </button>

  <span class="counter"></span>
  <div class="table-responsive">
    <table class="table table-bordered results">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre(s)</th>
          <th>Apellido(s)</th>
          <th>Privilegio</th>
          <th>Acciones</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="5"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody>
        <?php
        while($i!==$tam){
    
          $tipoUsuarioId = $datos[$i]->getTuId();
          $datoTu = $tipoUsuario->getById($tipoUsuarioId);
        ?>
        <tr>
            <th scope="row"> <?php echo $datos[$i]->getId(); ?> </th>
            <td> <?php echo $datos[$i]->getNom(); ?>   </td>
            <td> <?php echo $datos[$i]->getApp(); ?> </td>
            <td> <?php echo $datoTu->getNom(); ?> </td>
            <td> 
              <div class="text-center">
                <form action="#">
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#e<?php echo $datos[$i]->getId();?>"><span class="glyphicon glyphicon-edit" ></span></a> 
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId();?>"><span class="glyphicon glyphicon-remove"></span></a> 
                </form>
              </div>
            </td>
        </tr>
        <?php
          $i++;
          }
        ?>
      </tbody>
    </table>
    <?php 
      $i=0;
      while($i!==$tam)
      {
        include("contenedores/frm/admFrmEditarUsuario.php");
        include("contenedores/frm/admFrmEliminarUsuario.php");
        $i++;
      }
      include("contenedores/frm/admFrmNewUsuario.php");
     ?>
  </div>
</div>