<!-- ModalRD -->
<!-- Ventana Redireccionar Area -->
<div class="modal fade" id="edit_<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">redireccionar area</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="controllers/redireccion_controller.php?id=<?php echo $key['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-10">
                    <label for="">Area destino</label>
                                   <select class="form-control" name="area" required>
                                   <?php
                                           foreach ($AreasC as $row) {
                                   ?> 
                                       <option value="<?=$row['nombreArea']?>"><?=$row['nombreArea']?></option>
                                    <?php
                                           }
                                    ?>
                                   </select>
					</div>
				</div>
				

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- ModalRD -->
<!-- Ventana responder pqrs -->
<div class="modal fade" id="responder_<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">responder pqrs</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="controllers/responder_controller.php?id=<?php echo $key['id']; ?>">
				<div class="row form-group">
				<div class="col-md-12">
                               <label for="documento">documento</label>
                               <input type="file" class="form-control" name="documento" id="documento">
                               </div>
                           </div>
					<div class="col-sm-12">
                        <label for="">respuesta</label>
                        <textarea class="form-control" id="respuesta" name="respuesta" rows="6" required></textarea>
                        </div>
				
				

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="responder" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> responder</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Ventana Editar usuarios -->
<div class="modal fade" id="editar_<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Usuario</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="controllers/editarUsuario_controller.php?id=<?php echo $key['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">identificacion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="identificacion" value="<?php echo $key['identificacion']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $key['nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $key['email']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">nivel:</label>
					</div>
					<div class="col-sm-10">
                    <select class="form-control" name="level" required>
                                       <option value="<?php echo $key['level']; ?>">su nivel es <?php echo $key['level']; ?></option>
                                       <option value="1">opcion de cambio: 1</option>
                                       <option value="2">opcion de cambio: 2</option>
                                       <option value="3">opcion de cambio: 3</option>
                                   </select>
						
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>
