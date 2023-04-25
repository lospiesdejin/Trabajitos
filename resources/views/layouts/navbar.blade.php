<!--Main Navigation-->
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand nav-link" target="_blank">
        <strong>Bienvenido
        </strong>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/watch?v=rBG5L7UsUxA&list=PLH67FqH4KZrYbjwN_Fb1mu7fAxb_tJxJ_" target="_blank">EntretenimientoArmy</a>
          </li>
        </ul>

        <ul class="navbar-nav list-inline">
          <!-- Icons -->
          <li class="">
            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
              target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="">
            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Carousel wrapper -->
  <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h1 class="mb-3">Hola Army</h1>
              <h5 class="mb-4">La mejor pagina de productos de bts</h5>
              <main class="container align-center p-5">
                <form method="POST" action="{{route('inicia-sesion')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable">
                    </div>
                    <div class="mb-3">
                        <label for="`passwordInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                        <label class="form-check-label" for="rememberCheck">Mantener sesion iniciada</label>
                    </div>
                    <div>
                        <p>¿No tienes cuenta? <a href="{{route('registro')}}">Registrate</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary">Acceder</button>
                </form>
            </main>
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h2>You can place here any content</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <div class="mask" style="
              background: linear-gradient(
                45deg,
                rgba(29, 236, 197, 0.7),
                rgba(91, 14, 214, 0.7) 100%
              );
            ">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h2>And cover it with any mask</h2>
              <a class="btn btn-outline-light btn-lg m-2"
                href="https://mdbootstrap.com/docs/standard/content-styles/masks/" target="_blank" role="button">Learn
                about masks</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<style>

.carousel-item:nth-child(1) {
  background-image: url('https://i.ytimg.com/vi/UpCoChHK1Fk/maxresdefault.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}


/* Height for devices larger than 576px */
@media (min-width: 992px) {
  #introCarousel {
    margin-top: -58.59px;
  }
}

.navbar .nav-link {
  color: #fff !important;
}

</style>