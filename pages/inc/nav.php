<nav class="navbar  navbar-expand-lg sticky-top bg-white">
        <div class="container">
          <a class="navbar-brand" href="#">
            <h1 class="fw-bold text-info">Oop App</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-lg-3 active" aria-current="page" href="<?=url('index.php')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-lg-3" href="<?=url('pages/students')?>">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-lg-3" href="#">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-lg-3" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-lg-3" href="<?=url('contact.php')?>">Contact</a>
              </li>
            </ul>
            <div class="search ps-3 pe-3 d-none d-lg-block" >
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <a class="btn rounded-pill main-btn">Login</a>
          </div>
         
        </div>
      </nav>