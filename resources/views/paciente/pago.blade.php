<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interfaz Pago</title>
    <link rel="icon" type="image/x-icon" href="img/icono.svg" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style_pago.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/index/logo.png" class="logo" alt="" />
          </a>
          <button
            class="navbar-toggler toggler-border-color"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list icon-navbar"></i>
          </button>
          <div
            class="collapse navbar-collapse align-content-end"
            id="navbarTogglerDemo02"
          >
            <!-- items del navbar-->
            <ul class="navbar-nav me-10 mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Especialidades</a>
              </li>
              <li class="nav-item">
                <a role="button" class="btn btn-pers btn-lg" href="login.html"
                  >Iniciar sesion</a
                >
              </li>
              <li class="nav-item">
                <a
                  role="button"
                  class="btn btn-pers green btn-lg"
                  href="register.html"
                  >Registrate</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class="main_pago">
      <div class="main_pago-div">
        <form action="#" method="POST" class="credit-card-div">
          <legend class="main_pago-title">Pago con Visa</legend>
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Número de la tarjeta"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font">Expiry Month</span>
                  <input type="text" class="form-control" placeholder="MM" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font">Expiry Year</span>
                  <input type="text" class="form-control" placeholder="YY" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font"> CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <img src="img/index/tarjeta-de-credito.png" class="img-rounded"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pad-adjust">
                  <input type="text" class="form-control" placeholder="Nombre del titular"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pad-adjust">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked class="text-muted" /> Save details for fast payments <a href="#"> learn how ?</a>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit" class="btn btn-secondary" value="REGRESAR" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit" class="btn btn-secondary btn-block" value="PAGAR"/>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            distinctio earum repellat quaerat voluptatibus placeat nam, commodi
            optio pariatur est quia magnam eum harum corrupti dicta, aliquam
            sequi voluptate quas.
          </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
          >MDBootstrap.com</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>