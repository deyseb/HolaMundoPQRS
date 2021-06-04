<?php

session_name("LOGIN");
session_start();

setcookie(session_name(),'',0,'/');
session_unset();
session_destroy();
session_write_close();
header('Location: ../login.html');