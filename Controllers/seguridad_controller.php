<?php
    
    date_default_timezone_set('America/Bogota');

    session_name('LOGIN');
    session_start();

    if ($_SESSION['sesionActiva'] != 1){
        setcookie(session_name(),'',0,'/');
        session_unset();
        session_destroy();
        session_write_close();
        header('Location: login.html');
    }else{
        $fechaGuardada = $_SESSION['ultimoAcceso'];
		$ahora = date('Y-n-j H:i:s');
        $tiempoTranscurrido = (strtotime($ahora)-strtotime($fechaGuardada));

        if ($tiempoTranscurrido >= 36000) { //7200
            setcookie(session_name(),'',0,'/');
            session_unset();
            session_destroy();
            session_write_close();
            header('Location: login.html');
		}else{
            $_SESSION['ultimoAcceso'] = $ahora;
        }
    }
