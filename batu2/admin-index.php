
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Araç Servis Takip - Memnuniyet</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 Tamir Edildi-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="admin-index.php"><img src="images/newlogo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="admin-index.php"><img src="images/newlogo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Ara..." aria-label="search" aria-describedby="search">
            </div>

          </li>
        </ul>
        <?php
            session_start();
            if(isset($_SESSION['user'])){
            echo "Oturum aktif: ".$_SESSION['user']['k_kullaniciadi']."";
        }
            else{
            echo "";
        }
?>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Mesajlar</p>
            <!-- <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              -->
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Bildirimler</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                
                <div class="item-content">
                  <h6 class="font-weight-normal">Uygulama Hatası</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    şimdi
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Ayarlar</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    1 gün önce
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Yeni üye kaydı</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 gün önce
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/user.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
               Ayarlar
              </a>
             
              <a href="oturumkapat.php" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Çıkış
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="admin-index.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Yönetim Anasayfa</span>
            </a>
          </li>
    
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kayitliaraclar.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Sisteme Kayıtlı Araçlar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kayitislemleri.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Sisteme Araç Ekleme</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servisyaklasanlar.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Servis Takip</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="memnuniyet.php">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Memnuniyet Takip</span>
            </a>
          </li>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Araç Servis - Yönetim Paneli</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>Bildir
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">SERVİSE GELEN ARAÇ</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                  <?php
                      require 'dbconfig.php';
                      $query = "SELECT servis_id FROM servise_gelenler ORDER BY servis_id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><small>(30 gün içinde)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">MÜŞTERİLER</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  
                  <?php
                      require 'dbconfig.php';
                      $query = "SELECT id FROM k_bilgiler ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><small>(30 gün içinde)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">BEKLENİYOR</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                     
                  <?php
                      require 'dbconfig.php';
                      $query = "SELECT servis_id FROM servise_gelenler  WHERE arac_durum = 'BeklemeAsamasi' ORDER BY servis_id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><small>(30 gün içinde)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">SERVİS AŞAMASINDA</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                    
                    <?php
                      require 'dbconfig.php';
                      $query = "SELECT servis_id FROM servise_gelenler  WHERE arac_durum = 'ServisBasladi' ORDER BY servis_id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    
                    
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><small>(30 gün içinde)</small></span></p>
                </div>
              </div>
            </div>
         

          <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">SERVİS SONU</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                    
                    <?php
                      require 'dbconfig.php';
                      $query = "SELECT servis_id FROM servise_gelenler  WHERE arac_durum = 'TamirEdildi' ORDER BY servis_id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    
                    
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><small>(30 gün içinde)</small></span></p>
                </div>
              </div>
            </div>
       

          
          <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">TESLİM EDİLDİ</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    
                    
                    <?php
                      require 'dbconfig.php';
                      $query = "SELECT servis_id FROM servise_gelenler  WHERE arac_durum = 'TeslimEdildi' ORDER BY servis_id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    
                    
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success"><small>(30 gün içinde)</small></span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
           
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">Kayıt</p>
                
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Kullanıcıların Eklediği Araçlar</p>

                      <?php
                      require 'dbconfig.php';
                      $query = "SELECT arac_id FROM araclar ORDER BY arac_id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Kullanıcılar</p>
                      
                      <?php
                      require 'dbconfig.php';
                      $query = "SELECT id FROM k_bilgiler ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h3>'.$row.'</h3>';
                      ?>

                    </div>
                  
                    <div class="mt-3">
                      <p class="text-muted">Geri Dönüş</p>
                      <h3>0</h3>
                    </div> 
                  </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
              </div>
            </div>

            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Yapılacaklar Listesi</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Düzenlenecek
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li class="Teslim Edildi">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
                            Düzenlenecek
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Düzenlenecek
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li class="Teslim Edildi">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Düzenlenecek
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
                            Düzenlenecek
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-4">
										<input type="text" class="form-control todo-list-input mr-2"  placeholder="Yeni not ekle">
										<button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
									</div>
								</div>
							</div>
            </div>
          </div>
         
              
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

