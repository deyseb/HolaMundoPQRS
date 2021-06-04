<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include_once('../dataBase/conexionLogin.php');
    include_once('seguridad_controller.php');




    if(isset($_POST['responder'])){
        $conexionLogin = new conexionLogin();
        $conexion = $conexionLogin->conectar();
		try{


            $response = array();


            $path = "img/documentos/";
        
            if($_FILES['documento']['tmp_name'] != ""){
                $fileTemp = $_FILES['documento']['tmp_name'];
                $fileInfo = new SplFileInfo($_FILES['documento']['name']);
                $fileExtension = $fileInfo->getExtension();
                $documento = $path.$id_pqr.'.'.$fileExtension;
                if(!move_uploaded_file($fileTemp,'../'.$documento)){
                    $response['estado'] = false;
                    $response['mensaje'] = 'Error al mover el archivo';
                    echo json_encode($response);
                    exit();
                }
            }else{
                $documento = null;
            }



            $id_pqr = $_GET['id'];
            $documento = $_POST['documento'];
            $respuesta = $_POST['respuesta'];

			$sql = "INSERT INTO `respuestas` (`id_pqr`, `documento`, `respuesta`) VALUES ('$id_pqr', '$documento', '$respuesta')";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $conexion->exec($sql) ) ? 'respondido correctamente' : 'No se puso responder';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}


	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../pqrs.php');

    ?>

    <meta http-equiv="refresh" content="0;url=../pqrs.php">