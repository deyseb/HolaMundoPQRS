<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include_once('controllers/menu_controller.php');
    include_once('controllers/seguridad_controller.php');
   
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
               <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
            <div class="sidebar-brand-icon rotate-n-10">
                <i class="far fa-chart-bar"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pqrs Institucional</div>
        </a>
                   <?php echo getLevel($_SESSION['level'])?>
           
               </ul>
           
               <div id="content-wrapper" class="d-flex flex-column">
           
                   <div id="content">
           
                       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
           
                           <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                               <i class="fa fa-bars"></i>
                           </button>
           
                           <form
                               class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                               <div class="input-group">
                                   <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar en..."
                                       aria-label="Search" aria-describedby="basic-addon2">
                                   <div class="input-group-append">
                                       <button class="btn btn-primary" type="button">
                                           <i class="fas fa-search fa-sm"></i>
                                       </button>
                                   </div>
                               </div>
                           </form>
           
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
                                   <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['nombre']?></span>
                                       <img class="img-profile rounded-circle"
                                           src="<?=$_SESSION['avatar']?>">
                                   </a>
                               
                                   <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                       aria-labelledby="userDropdown">
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                salir
                            </a>
                                   </div>
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
                        
                    <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                    </a>
                           
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para cerrar sesion?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciono "salir" a continuación cerrara sesion .</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="Controllers/salir_controller.php">Salir</a>
            </div>
        </div>
    </div>
</div>
                       </div>
                           
                   </div>
                   
                   <footer class="sticky-footer bg-white">
                       <div class="container my-auto">
                           <div class="copyright text-center my-auto">
                               <span>&copy; Hola mundo! <?=date('Y')?></span>
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