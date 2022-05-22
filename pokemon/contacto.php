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
</head>

<body >
  <!-- Navbar -->
<?php include("section/menu.php"); ?>
  <!-- Main content -->
  <div class="main-content" >


    


    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">

      <div class="container">

          <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>



            </div>
          </div>
        </div>
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
        <div class="col-lg-12 col-md-12">
                <div class="col-md-12">
                <!--div class="row">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="assets/img/theme/img-1-1000x600.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="assets/img/theme/img-1-1000x600.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="assets/img/theme/img-1-1000x600.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div-->

                <div class="row">
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card-wrapper">
            <!-- Custom form validation -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Custom styles</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <p class="mb-0">
                      For custom form validation messages, you’ll need to add the novalidate boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form
                      validation APIs in JavaScript.

                    </p>
                  </div>
                </div>
                <hr>
                <form class="needs-validation" novalidate="">
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label class="form-control-label" for="validationCustom01">First name</label>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required="">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label class="form-control-label" for="validationCustom02">Last name</label>
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required="">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label class="form-control-label" for="validationCustomUsername">Username</label>
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label class="form-control-label" for="validationCustom03">City</label>
                      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required="">
                      <div class="invalid-feedback">
                        Please provide a valid city.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label" for="validationCustom04">State</label>
                      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required="">
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-control-label" for="validationCustom05">Zip</label>
                      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required="">
                      <div class="invalid-feedback">
                        Please provide a valid zip.
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input class="custom-control-input" id="invalidCheck" type="checkbox" value="" required="">
                      <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      
    </div>
          <!--div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Inicia sesión en tu cuenta</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="assets/img/icons/common/facebook.png"></span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5" >
              <div class="text-center text-muted mb-4">
                <small>Login</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Recuérdame</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Inicia sesión</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Olvidé mi contraseña</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Crear cuenta</small></a>
            </div>
          </div-->
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