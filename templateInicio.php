<?php

   
   function Head($title){
       ob_start();
?>
       <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title> <?=$title?> </title>
            <link rel="shortcut icon" href="img\favicon.ico" type="image/x-icon">
            <link rel="icon" href="img\favicon.ico" type="image/x-icon">

            <!-- Librerías -->
            <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
            <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
            <link href="css/sb-admin-2.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

             <!-- Google Fonts -->
             <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

             <!-- Vendor CSS Files -->
             <link href="assets/vendor/aos/aos.css" rel="stylesheet">
             <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
             <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
             <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  
             <link href="assets/css/style.css" rel="stylesheet">

 

       </head>
<?php
        return ob_get_clean();
   }
   function startBody(){
        ob_start();
?>
       <body id="page-top">
           
           <div id="wrapper">
           
               <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
               <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
            <div class="sidebar-brand-icon rotate-n-10">
                <i class="far fa-chart-bar"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pqrs Institucional</div>
        </a>
           
               </ul>
           
               <div id="content-wrapper" class="d-flex flex-column">
           
                   <div id="content">
           
                       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
           
                           <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                               <i class="fa fa-bars"></i>
                           </button>
           
                           <ul class="navbar-nav ml-auto">
           
                               <li class="nav-item dropdown no-arrow d-sm-none">
                                   <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="fas fa-search fa-fw"></i>
                                   </a>
           
                                   <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                       aria-labelledby="searchDropdown">
                                       <form class="form-inline mr-auto w-100 navbar-search">
                                           <div class="input-group">
                                               <input type="text" class="form-control bg-light border-0 small"
                                                   placeholder="Search for" aria-label="Search"
                                                   aria-describedby="basic-addon2">
                                               <div class="input-group-append">
                                                   <button class="btn btn-primary" type="button">
                                                       <i class="fas fa-search fa-sm"></i>
                                                   </button>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                               </li>
                               
                               <div class="topbar-divider d-none d-sm-block"></div>
                               
                               <li class="nav-item dropdown no-arrow">
                                   <a class="nav-link dropdown-toggle" href="login.html" id="userDropdown" role="button">
                                       <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                                       <i class="fas fa-users" href="login.html"></i>
                                   </a>
                               </li>
                               <li class="nav-item dropdown no-arrow">
                                   <a class="nav-link dropdown-toggle" href="ingresarpqrs.php" id="userDropdown" role="button">
                                       <span class="mr-2 d-none d-lg-inline text-gray-600 small">Realizar PQRS</span>
                                       <i class="fas fa-poll" href="ingresarpqrs.php"></i>
                                   </a>
                                </li>
                           </ul>
                       </nav>

                       <div class="container-fluid">
<?php 
        return ob_get_clean();
   }
   function endBody(){
      ob_start();
?>

                       </div>
                           
                   </div>
                   
                   <footer class="sticky-footer bg-white">
                       <div class="container my-auto">
                           <div class="copyright text-center my-auto">
                               <span>&copy; Hola mundo! <?=date('Y')?> </span>
                           </div>
                       </div>
                   </footer>
                
               </div>
              
           </div>
            

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>
            
            <!-- Core plugin sweetAlert2 -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
            
            <script type="text/javascript">
            function salir(){
                    $(location).attr('href', '../../index.php');                
                }
            </script>
       </body>
<?php
    return ob_get_clean();
   }
?>