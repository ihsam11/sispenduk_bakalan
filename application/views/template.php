<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pemerintah Desa Bakalan">
    <title>{title}</title>
    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url('assets/img/favicons/favicon.png') ?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">   
    <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome/css/fontawesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome/css/all.min.css') ?>">

    <!-- Jquery Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js')?>"></script>    
    <script src="<?= base_url('assets/js/dashboard.js')?>"></script>

  </head>
  <body>

    <header class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= site_url() ?>">SISPENDUK BAKALAN</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= site_url('login/logout')?>">Keluar</a>
        </li>
      </ul>
    </header>

    <section class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Pilihan Menu</span>              
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>">
                  <span data-feather="home"></span>
                  Beranda <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('list_kk') ?>">
                  <span data-feather="home"></span>
                  Pengajuan KK <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{page_title}</h1>
          </div>

          {page_content}
                    

        </main>
      </div>
    </section>

    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    
    <!-- Custom -->
    <script src="<?= base_url('assets/js/jquery.dataTables.min.js')?>"></script>
    
  </body>
</html>
