<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    function getLevel($level){
        $filename = 'views/menu.'.$level.'.view.html';
        return getMenu($filename);
    }

    function getMenu($filename){
        if(is_file($filename)){
            ob_start();
            include($filename);
            return ob_get_clean();
        }
        return false;
    }