<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    include_once('Controllers\tablaUsuarios_controller.php');
    include_once('template.php');

    $llamado = new queries();

    $PQR = $llamado->getPQRSLV1();
    $AreasC = $llamado->getAreasC();
?>
<!DOCTYPE html>
<html lang="es">
<?=head('Home')?>
<?=startBody()?>

    <h1>R&R PQRS</h1>
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">pqrs de <?php echo ($_SESSION['lidera'])?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Identificacion</th>
                                            <th>telefono</th>
                                            <th>Email</th>
                                            <th>area</th>
                                            <th>asunto</th>
                                            <th>descripcion</th>
                                            
                                            <th>responder</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Identificacion</th>
                                            <th>telefono</th>
                                            <th>Email</th>
                                            <th>area</th>
                                            <th>asunto</th>
                                            <th>descripcion</th>
                                           
                                            <th>responder</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                           foreach ($PQR as $key) {
                                      ?> 
                                        <tr>
                                            <th><?=$key['id']?></th>
                                            <th><?=$key['nombre']?></th>
                                            <th><?=$key['identificacion']?></th>
                                            <th><?=$key['telefono']?></th>
                                            <th><?=$key['email']?></th>
                                            <th><?=$key['area']?></th>
                                            <th><?=$key['asunto']?></th>
                                            <th><?=$key['descripcion']?></th>
                                            
                                            <th><a href="#responder_<?php echo $key['id']; ?>" class="btn btn-dark btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> responder</a></th>
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
</html>