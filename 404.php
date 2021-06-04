<?php
require_once('template.php');
?>
<!DOCTYPE html>
<html lang="es">
<?=head('Home')?>
<?=startBody()?>
    <h1></h1>
    

    <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Pagina no encontrada</p>
                        <p class="text-gray-500 mb-0">Lo que buscaste no sea localizado...</p>
                        <a href="home.php">← Volver a la pagina de inicio</a>
                    </div>

                </div>


<?=endBody()?>
</html>