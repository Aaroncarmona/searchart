
<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $datos[$i]->getId()?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><strong>Detalles de la transaccion</strong></h3>
      </div>
      <div class="modal-body">
        
        <strong>Usuario: </strong><?php echo $datos[$i]->getUsu();?><br>
        <strong>Tabla afectada: </strong><?php echo $datos[$i]->getTabla(); ?><br>
        <strong>Transaccion: </strong><span class="text-primary"><?php echo $datos[$i]->getTran(); ?></span><br>
        <strong>Descripción: </strong><h3><?php echo $datos[$i]->getDesc(); ?></h3><br>
        <strong>Fecha: </strong><?php echo $datos[$i]->getFecha(); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->