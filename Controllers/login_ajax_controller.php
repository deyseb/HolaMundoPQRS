<?php
    require_once '../dataBase/conexionLogin.php';

    $conexionLogin = new conexionLogin();
    $conexion = $conexionLogin->conectar();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $response = array();

    $sql = $conexion->prepare("select * from usuarios where email = :email");
    $sql->bindParam(":email", $email);
    $sql->execute();
    $usuarios = $sql->fetch();

    if($sql->rowCount() > 0){
        $passwordBd = $usuarios['password'];
        
        if(password_verify($password, $passwordBd)){

            session_name('LOGIN');
            session_start();

            $_SESSION['sesionActiva'] = 1;
            $_SESSION['ultimoAcceso'] = date('Y-n-j H:i:s');

            $_SESSION['nombre'] = $usuarios['nombre'];
            $_SESSION['identificacion'] = $usuarios['identificacion'];
            $_SESSION['email'] = $usuarios['email'];
            $_SESSION['level'] = $usuarios['level'];
            $_SESSION['avatar'] = $usuarios['avatar'];
            $_SESSION['lidera'] = $usuarios['lidera'];
            

            $response['flag'] = true;           
            echo json_encode($response);
            exit;
        }else{
            $response['flag'] = false;
            $response['mensaje'] = "<label class='alert alert-danger' role='alert'>Password incorrecto!</label>";
            
            echo json_encode($response);
            exit;
        }
    }else{
        $response['flag'] = false;
        $response['mensaje'] = "<label class='alert alert-danger' role='alert'>El email no se encuentra asociado con un usuario!</label>";

        echo json_encode($response);
        exit;
    }