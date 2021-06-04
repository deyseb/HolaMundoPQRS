<?php

    include_once('templateInicio.php');
    include_once('Controllers\tablaUsuarios_controller.php');

    $PQRS = new queries();
    
    $AreasC = $PQRS->getAreasC();
?>
<!DOCTYPE html>
<html lang="en">
<?=head('PQR')?>
<?=startBody()?>

<center><h1>ingrese su PQR</h1></center>
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


<body class="bg-gradient-primary">
<form method="POST" action="controllers/registrarPQRS_controller.php">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-3">
                        <!-- datos de emisor -->
                        <div class="row">
                           <div class="col-md-3 form group">
                               <label>Nombre Completo</label>
                               <input type="text" class="form-control" id="nombre" name="nombre" required>
                           </div>
                           <div class="col-md-3 form group">
                               <label>Identificacion</label>
                               <input type="number" class="form-control" id="identificacion" name="identificacion" required>
                           </div>
                           <div class="col-md-3 form group">
                            <label>Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" required>
                           </div>
                           <div class="col-md-3 form group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                           </div>
                           </div><br><br>
                           <!-- datos -->
                           <div class="row">
                               <div class="col-md-4 form-group">
                                   <label for="">Area destino</label>
                                   <select class="form-control" name="area" required>
                                   <?php
                                           foreach ($AreasC as $key) {
                                   ?> 
                                       <option value="<?=$key['nombreArea']?>"><?=$key['nombreArea']?></option>
                                    <?php
                                           }
                                    ?>
                                   </select>
                               </div>
                               <div class="col-md-4 form-group">
                                   <label for="">Asunto</label>
                                   <input type="text" class="form-control" id="asunto" name="asunto" required>
                               </div>
                               <div class="col-md-4">
                               <label for="adjunto">Adjunto</label>
                               <input type="file" class="form-control" name="adjunto" id="adjunto">
                               </div>
                           </div>
                           
                               <div class="row">
                                  <div class="form-group">
                                  <label for="">Descripcion</label>
                                  <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                               </div>
                               
                               <button type="submit" name="ingresaPQR" class="btn btn-dark"><i class="fas fa-share"></i>&nbsp;Registrar</button>
                           </div><br>
                           
                           
                           <!-- CopyRight -->
                           <div class="col-md-12 text-center text-gray-900">
                            <a class="small" href="#">&copy; HolaMundo</a>
                           </div>
                        </div>
                    </div>
                </div>

              </div>
           </div>
        </div>

        </div>


    </div>
</form>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!--  js user -->
    <script src="js/login.js"></script>

</body>
<?=endBody()?>

<script src="js/registrarPQRS.js"></script>

</html>