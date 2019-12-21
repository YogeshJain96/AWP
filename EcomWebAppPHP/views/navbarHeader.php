<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/AWP_0227_0234/EcomWebApp/">E-Kart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/AWP_0227_0234/EcomWebApp/"> Home </a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
          <!-- Button trigger modal -->
          <button id ="loginBtn" class="btn btn-primary my-2 my-sm-0" type="button" data-toggle="modal" data-target="#LoginModal">
            Login
          </button>
          <button id ="logoutBtn" class="btn btn-primary my-2 my-sm-0" type="button" style="display: none">
            Logout
          </button>
        </form>
      </div>
    </nav>
  </header>
  <?php include_once('loginModal.php');
  ?>