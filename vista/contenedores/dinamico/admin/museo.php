<div class="container col-xs-12">
  <?php 
    define("R_EMP","adminInicio.php?");
    define("R_ADM","empleadoInicio.php?");

    $tam = count($datos);
    $i = 0;
    
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
	<h3>Control de Museo</h3>
	<hr/>
	<div class="form-group">
    <input type="text" class="search form-control" placeholder="Ingresa cualquier palabra">
  </div>

  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addMuseo">
    <span class="glyphicon glyphicon-plus"></span> Agregar Museo
  </button>

  <span class="counter"></span>
  <div class="table-responsive">
    <table class="table table-bordered results">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Codigo Postal</th>
          <th>Costo</th>
          <th>Estado</th>
          <th>Acciones</th>
          <th>Agregar</th>
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
            <th scope="row"> <?php echo $datos[$i]->getId(); ?> </th>
            <td> <?php echo $datos[$i]->getNom(); ?>   </td>
            <td> <?php echo $datos[$i]->getTel(); ?> </td>
            <td> <?php echo $datos[$i]->getCp(); ?> </td>
            <td> $<?php echo $datos[$i]->getCos(); ?> MXN </td>
            <?php 
              if($datos[$i]->getSt() == "1"){
                echo "<td class='bg-info'>Activo</td>";
              }else{
                echo "<td class='bg-danger'>Cerrado</td>";
              }
             ?>
            <td> 
              <div class="text-center">
                <form action="#">
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#e<?php echo $datos[$i]->getId();?>"><span class="glyphicon glyphicon-edit" ></span></a> 
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId();?>"><span class="glyphicon glyphicon-remove"></span></a> 
                </form>
              </div>
            </td>
            <td>
              <a href="<?php echo $ruta ?>page=piso&id=<?php echo $datos[$i]->getId();?>" type="button" class="btn btn-default">Pisos</a>
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
        include("contenedores/frm/admFrmEliminarMuseo.php");
        include("contenedores/frm/admFrmEditarMuseo.php");
        $i++;
      }
      include("contenedores/frm/admFrmNewMuseo.php");
     ?>
  </div>
</div>