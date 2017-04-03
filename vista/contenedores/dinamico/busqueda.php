<?php 
	$tam = count($datos);
	$i = 0;
?>
<div class="container">
<div class="form-group">
    <input type="text" class="search form-control" placeholder="Ingresa cualquier palabra">
  </div>

  <span class="counter"></span>
  
    <table class="table results">
      <thead>
        <tr class="warning no-result">
          <td colspan="7"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody>
        <?php
        while($i !== $tam)
        {
          if($datos[$i]->getSt() == "1"){
            $estado ='bg-success' ;
          }else{
            $estado = 'bg-danger';
          }

        ?>
        <tr class = <?php echo $estado ; ?> >
            <!--th scope="row"> <?php echo $datos[$i]->getId(); ?> </th-->
            <td class="hidden-xs"> <?php echo $datos[$i]->getFoto(); ?>   </td>
            <td> 
              <p class="hidden-lg hidden-sm hidden-md"><?php echo $datos[$i]->getFoto(); ?></p>
              <h2><strong>Museo: </strong> <?php echo $datos[$i]->getNom(); ?></h2>
              <br><strong>Direccion: </strong> <?php echo $datos[$i]->getCyn(); ?>
              
              <br><strong>Delegacion: </strong> 
              <?php 
                $datosDelegacion = $delegacion->getById($datos[$i]->getDelId()); 
                echo $datosDelegacion->getNom();
              ?>
              
              <br><strong>Telefono: </strong> <?php echo $datos[$i]->getTel(); ?>
              <br><strong>Codigo Postal: </strong> <?php echo $datos[$i]->getCp(); ?>
              <br><strong>Costo: </strong>$<?php echo $datos[$i]->getCos(); ?> MXN
              
              <?php 
              if($datos[$i]->getSt() == "1"){
                echo "<p><strong>Estado: </strong>Activo</p>";
              }else{
                echo "<p><strong>Estado: </strong>Cerrado</p>";
              }
             ?>
              <form action="#">
                <a href="#" style="font-size: 25px" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId();?>"><button type="button" class="btn btn-primary">Ver mas<span class="glyphicon glyphicon-chevron-right"></span> </button></a>
              </form>
            </td>      
            
        </tr>
        <?php
			include("contenedores/dinamico/modalBusqueda.php");
          	$i++;
          }
        ?>
      </tbody>
    </table>
 
  </div>