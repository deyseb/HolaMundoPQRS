<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once 'dataBase\conexionLogin.php';
    include_once('Controllers\tablaUsuarios_controller.php');
   
class queries{
    function getUsuariosT(){
        $conexionLogin = new conexionLogin();
        $conexion = $conexionLogin->conectar();

        $sql = $conexion->prepare('
        SELECT * FROM usuarios
        ');
        
        // Ejecutamos
        $sql->execute();

        $UsuariosT = $sql->fetchAll();

        return $UsuariosT;
    }
    function getPQRS(){
        $conexionLogin = new conexionLogin();
        $conexion = $conexionLogin->conectar();

        $sql = $conexion->prepare('
        SELECT * FROM pqrs
        ');
        
        // Ejecutamos
        $sql->execute();

        $PQR = $sql->fetchAll();

        return $PQR;
    
        }
    
        function getAreasC(){
            $conexionLogin = new conexionLogin();
            $conexion = $conexionLogin->conectar();
    
            $sql = $conexion->prepare('
            SELECT * FROM controla
            ');
            
            // Ejecutamos
            $sql->execute();
    
            $AreasC = $sql->fetchAll();
    
            return $AreasC;
        }
        function getPQRSLV1(){
            $conexionLogin = new conexionLogin();
            $conexion = $conexionLogin->conectar();
            $moj_lidera = $_SESSION['lidera'];
            $sql = $conexion->prepare("
            SELECT * FROM pqrs WHERE AREA = '$moj_lidera'
            ");
                
             // Ejecutamos
            $sql->execute();
        
            $PQR = $sql->fetchAll();
        
            return $PQR;
            
            }
            function getRespuestas(){
                $conexionLogin = new conexionLogin();
                $conexion = $conexionLogin->conectar();
        
                $sql = $conexion->prepare('
                SELECT * FROM respuestas
                ');
                
                // Ejecutamos
                $sql->execute();
        
                $respuestas = $sql->fetchAll();
        
                return $respuestas;
            
                }


}