<?php
    include_once('templateInicio.php');
?>
<!DOCTYPE html>
<html lang="es">
<?=head('inicio')?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  

  <!-- Favicons -->
  <link rel="shortcut icon" href="img\favicon.ico" type="image/x-icon">
  <link rel="icon" href="img\favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>
<?=startBody()?>
<body>

  

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-text" data-aos="zoom-out">
    <h2>Bienvenido a tu PQRS</h2>
    <p>Aca podras encontrar todo lo relacionado con tus PQRS</p>
    
  </div>

  <div class="product-screens">

    <div class="product-screen-1" data-aos="fade-up" data-aos-delay="500">
      <img src="img/product-screen-1.png" alt="">
    </div>

    <div class="product-screen-3" data-aos="fade-up">
      <img src="img/product-screen-3.png" alt="">
    </div>

  </div>

</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="section-bg">
    <div class="container-fluid" data-aos="fade-up">
      <div class="section-header">
        <h3 class="section-title">Que es PQRS</h3>
        <span class="section-divider"></span>
        <p class="section-description">
        PQR es una sigla que significa, literalmente, ”peticiones, quejas y reclamos”.
        Se trata de una actividad mediante la cual, ya sea un cliente o un usuario, de un bien o servicio, 
        se dirige al proveedor del mismo o a la autoridad competente, para expresarle una solicitud, una inconformidad, 
        o que adelante una acción, 
        o deje de hacer algo que pueda ser perjudicial para el consumidor o ciudadano.
        </p>
      </div>

      <div class="row">
        <div class="col-lg-6 about-img" data-aos="fade-right" dat-aos-delay="100">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
          <h2>¿Cómo se aplica una queja?</h2>
          <h3>La queja deberá contener por lo menos:
        
          <ul>
            <li><i class="bi bi-check-circle"></i> 1-Los nombres y apellidos complementos del quejoso con indicación del documento de identidad.</li>
            <li><i class="bi bi-check-circle"></i> 2-Dirección de notificación y teléfono del contacto.</li>
            <li><i class="bi bi-check-circle"></i>3-Relación clara y detallada de los presuntos hechos irregulares y las pruebas que puedan servir de sustento a la queja presentada.</li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Featuress Section ======= -->
  <section id="features">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 offset-lg-4">
          <div class="section-header">
            <h3 class="section-title">Servicios ofrecidos</h3>
            <span class="section-divider"></span>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 features-img">
          <img src="img/product-features.png" alt="" data-aos="fade-right">
        </div>

        <div class="col-lg-8 col-md-7 ">

          <div class="row">

            <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Usuario Propio</a></h4>
              <p class="description">Contara con un usuarios adecuado a su nivel dentro del sistema.</p>
            </div>
            <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Opciones del sistema</a></h4>
              <p class="description">Opciones para el usuario dentro del sistema de acuerdo a su nivel adquirido.</p>
            </div>
            <div class="col-lg-6 col-md-6 box" data-aos="fade-up" dat-aos-delay="100">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Busquedas</a></h4>
              <p class="description">Contara con una opcion para buscar las PQRS que desea conocer.</p>
            </div>
            <div class="col-lg-6 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Vistas amigables</a></h4>
              <p class="description">Algo a resaltar en nuestro sistema son las vistas amigables.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- End Featuress Section -->

  <!-- ======= Advanced Featuress Section ======= -->
  <section id="advanced-features">

    <div class="features-row section-bg" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img class="advanced-feature-img-right wow fadeInRight" src="img/advanced-feature-1.jpg" alt="">
            <div>
              <h2>¿Cuál es el objetivo de un reclamo?</h2>
              <p>El motivo de la queja debe ser corregido de cara al cliente. El objetivo de la gestión de las reclamaciones es reforzar la relación con el cliente y garantizar la calidad del producto o servicio. En prácticamente todas las empresas hay reclamaciones de clientes, nadie se libra del todo</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="features-row" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-15">
            <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt="">
            <div>
              <h2>Conceptos</h2>
              <p>Petición: es una solicitud verbal o escrita que se dirige a una entidad, con el propósito de requerir su intervención en un asunto puntual y concreto. La petición puede ser una solicitud o una información.</p>
              <p>Queja: es una inconformidad verbal o escrita que presenta un usuario contra la actuación de determinado funcionario u oficina.</p>
              <p>Reclamo: cualquier expresión verbal, escrita o en medio electrónico, de insatisfacción referida a la prestación de un servicio o incumplimiento de un derecho que ha sido perjudicado o amenazado, ocasionado por la deficiente prestación del servicio o producto comercializado.</p>
              <p>Sugerencia: cualquier expresión verbal, escrita o en medio electrónico de recomendación entregada por el cliente, que tiene por objeto mejorar el servicio y/o productos ofrecidos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Advanced Featuress Section -->

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
<?=endBody()?>
</html>