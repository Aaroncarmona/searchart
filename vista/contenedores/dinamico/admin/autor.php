<div class="container col-xs-12">
  <?php 
    $tam = count($datos);
    $i = 0;
  ?>	
	<h3>Control de Autores</h3>
	<hr/>
	<div class="form-group">
    <input type="text" class="search form-control" placeholder="Ingresa cualquier palabra">
  </div>

  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addAutor">
    <span class="glyphicon glyphicon-plus"></span> Agregar Autor
  </button>

  <span class="counter"></span>
  <div class="table-responsive">
    <table class="table table-bordered results">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre(s)</th>
          <th>Apellido(s)</th>
          <th>Apodo</th>
          <th>Descripción</th>
          <th>Acciones</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="6"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody>
        <?php
        while($i!==$tam)
        {
        ?>
        <tr>
            <th scope="row"> <?php echo $datos[$i]->getId(); ?> </th>
            <td> <?php echo $datos[$i]->getNom(); ?>   </td>
            <td> <?php echo $datos[$i]->getAppat() . ' ' . $datos[$i]->getApmat() ; ?> </td>
            <td> <?php echo $datos[$i]->getApodo(); ?> </td>
            <td> <?php echo substr($datos[$i]->getDes(),0,15); ?> </td>
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
      $i = 0;
      while($i !== $tam)
      {
        include("contenedores/frm/admFrmEliminarAutor.php");
        include("contenedores/frm/admFrmEditarAutor.php");
        $i++;
      }
        $i++;
     
      include("contenedores/frm/admFrmNewAutor.php");
     ?>
  </div>
</div>