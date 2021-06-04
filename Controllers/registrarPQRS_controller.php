<?php
    include_once('../dataBase/conexionLogin.php');








    if(isset($_POST['ingresaPQR'])){
        $conexionLogin = new conexionLogin();
        $conexion = $conexionLogin->conectar();
		try{


            $response = array();


            $path = "img/adjuntos/";

            if($_FILES['adjunto']['tmp_name'] != ""){
                $fileTemp = $_FILES['adjunto']['tmp_name'];
                $fileInfo = new SplFileInfo($_FILES['adjunto']['name']);
                $fileExtension = $fileInfo->getExtension();
                $adjunto = $path.$identificacion.'.'.$fileExtension;
                if(!move_uploaded_file($fileTemp,'../'.$adjunto)){
                    $response['estado'] = false;
                    $response['mensaje'] = 'Error al mover el archivo';
                    echo json_encode($response);
                    exit();
                }
            }else{
                $adjunto = null;
            }



            $nombre = $_POST['nombre'];
            $identificacion = $_POST['identificacion'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $area = $_POST['area'];
            $asunto = $_POST['asunto'];
            $adjunto = $_POST['adjunto'];
            $descripcion = $_POST['descripcion'];

			$sql = "INSERT INTO `pqrs` (`nombre`, `identificacion`, `telefono`, `email`, `area`, `asunto`, `adjunto`, `descripcion`) VALUES ('$nombre', '$identificacion', '$telefono', '$email', '$area', '$asunto', '$adjunto', '$descripcion')";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $conexion->exec($sql) ) ? 'PQR ingresada correctamente' : 'No se puso ingresar la PQR';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}


	}
	else{
		$_SESSION['message'] = 'Complete el formulario de PQR';
	}

	header('location: ../ingresarpqrs.php');
    ?>