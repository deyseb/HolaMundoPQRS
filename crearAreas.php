<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    include_once('Controllers\tablaUsuarios_controller.php');
    include_once('template.php');

    $llamado = new queries();
    $AreasC = $llamado->getAreasC();
    $UsuariosT = $llamado->getUsuariosT();
?>
<!DOCTYPE html>
<html lang="es">
<?=head('Home')?>
<?=startBody()?>
<h1>Registrar Area</h1>

<form id="formCrearArea" enctype="multipart/form-data">
    <div class="row form-group pt-5">
        <div class="col-md-3">
            <label for="nombreArea" class="form-label">Nombre del Area</label>
            <input type="text" class="form-control" id="nombreArea" name="nombreArea" required>
        </div>
        <div class="col-sm-2">
        <label for="id" class="form-label">Nombre del lider</label>
                    <select class="form-control" name="lider" required>
                    <?php
                                           foreach ($UsuariosT as $key) {
                                   ?> 
                                       <option value="<?php echo $key['nombre']; ?>"><?php echo $key['nombre']; ?></option>
                                    <?php
                                           }
                                    ?>    
                                   </select>
						
					</div>
        <div class="col-md-3" style="padding-top: 2em;">
            <button type="submit" class="btn btn-primary"><i class="fas fa-share" onclick="registrarArea()"></i>&nbsp;Registrar</button>
        </div>
        
    </div>
</form>

<!-- DataTales Areas -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">areas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>lider</th>
                                            <th>area</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>lider</th>
                                            <th>area</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                           foreach ($AreasC as $key) {
                                      ?> 
                                        <tr>
                                            <th><?=$key['id']?></th>
                                            <th><?=$key['lider']?></th>
                                            <th><?=$key['nombreArea']?></th>
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

<script src="js/registrarArea.js"></script>
</html>