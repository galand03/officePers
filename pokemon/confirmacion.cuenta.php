<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="fashionar">
  <meta name="author" content="Fashionar">
  <title>Fashionar</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css" type="text/css">

  <style>
  .navbar-horizontal.navbar-transparent .navbar-nav .nav-link {
    color: rgba(255, 255, 255, .95);
}
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link:hover,
    .navbar-horizontal.navbar-transparent .navbar-nav .nav-link:focus
    {
        color: rgba(255, 255, 255, .65);
    }
</style>
</head>

<body class="bg-default">
  <!-- Navbar -->
<?php include("section/menu.php"); ?>
  <!-- Main content -->
  <div class="main-content" style="background-image: url(assets/img/theme/background.login.jpg) !important;
    background-size: cover;
    background-position: top;">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9">
      <div class="container">

      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3">Tu cuenta se a creado con éxito.</div>
              <div class="text-muted text-center mt-2 mb-3">Gracias por unirte a nuestra comunidad! </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5" >
              <form role="form">
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Iniciar sesión</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="olvido-pass.php" class="text-light"><small>Olvidé mi contraseña</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="registracion.php" class="text-light"><small>Crear cuenta</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">FashionAR</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">Blog</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>