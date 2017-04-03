<div class="container col-xs-12">
  <?php 
    $tam = count($datosSala);
    $i = 0;
    
    define("R_EMP","adminInicio.php?");
    define("R_ADM","empleadoInicio.php?");
    
    if(!isset($_SESSION['nombre'])){
        session_start();
    }

    if($_SESSION['niv'] == "1") 
    {
        $ruta = R_EMP;
    }
    else if($_SESSION['niv'] == "2")
    {
        $ruta = R_ADM;
    }
  ?>	
	<h3>Control de Salas</h3>
	<hr/>
	<div class="form-group">
    <input type="text" class="search form-control" placeholder="Ingresa cualquier palabra">
  </div>

  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addSala">
    <span class="glyphicon glyphicon-plus"></span> Agregar Sala
  </button>

  <span class="counter"></span>
  <div class="table-responsive">
    <table class="table table-bordered results">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="8"><i class="fa fa-warning"></i> Sin resultados</td>
        </tr>
      </thead>
      <tbody>
        <?php
        while($i!==$tam)
        {
        ?>
        <tr>
            <th scope="row"> <?php echo $datosSala[$i]->getId(); ?> </th>
            <td> <?php echo $datosSala[$i]->getNom(); ?>   </td>
            <td> 
              <div class="text-center">
                <form action="#">
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#e<?php echo $datosSala[$i]->getId(); ?>"><span class="glyphicon glyphicon-edit" ></span></a> 
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#<?php echo $datosSala[$i]->getId(); ?>"><span class="glyphicon glyphicon-remove"></span></a> 
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
      $i = 0;
      while($i !== $tam)
      {
        include("contenedores/frm/admFrmEliminarSala.php");
        //include("contenedores/frm/admFrmEditarPiso.php");
        $i++;
      }
      include("contenedores/frm/admFrmNewSala.php");
     ?>
  </div>
</div>