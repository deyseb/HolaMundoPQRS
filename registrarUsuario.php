<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    include_once('Controllers\tablaUsuarios_controller.php');
    include_once('template.php');

    $llamado = new queries();
    $UsuariosT = $llamado->getUsuariosT();
    $AreasC = $llamado->getAreasC();
?>

<!DOCTYPE html>
<html lang="es">
<?=head('Registrar Usuario')?>
<?=startBody()?>

    <h1>Registrar usuario</h1>

    <form id="formRegistrarUsuario" enctype="multipart/form-data">
        <div class="row form-group pt-5">
            <div class="col-md-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-3">
                <label for="identificacion" class="form-label">Identificación</label>
                <input type="text" class="form-control" id="identificacion" name="identificacion" required>
            </div>
            <div class="col-md-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-3">
                <label for="level" class="form-label">Nivel de acceso</label>
                <select class="form-control" name="level" id="level">
                    <option value="1">Nivel 1</option>
                    <option value="2">Nivel 2</option>
                    <option value="3">Nivel 3</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control" name="avatar" id="avatar">
            </div>
            <div class="col-md-3" style="padding-top: 2em;">
                <button type="submit" class="btn btn-primary"><i class="fas fa-share"></i>&nbsp;Registrar</button>
            </div>
        </div>
    
    </form>
     

    <?php 
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
?>
    <!-- DataTales usuarios -->
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">usuarios</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Identificacion</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Nivel</th>
                                            <th>editar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Identificacion</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Nivel</th>
                                            <th>editar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                           foreach ($UsuariosT as $key) {
                                      ?> 
                                        <tr>
                                            <th><?=$key['id']?></th>
                                            <th><?=$key['identificacion']?></th>
                                            <th><?=$key['nombre']?></th>
                                            <th><?=$key['email']?></th>
                                            <th><?=$key['level']?></th>
                                            <th><a href="#editar_<?php echo $key['id']; ?>" class="btn btn-dark btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> editar</a></th>
                                        </tr>
                                        <?php include('modals.php'); ?>
                                        <?php
                                           }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


    


    



    

<?=endBody()?>

    <script src="js/registrarUsuario.js"></script>
    <script src="js/registrarArea.js"></script>
</html>