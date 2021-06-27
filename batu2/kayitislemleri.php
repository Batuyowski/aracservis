
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
            
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Servise Gelen Kişi Bilgileri</h4>
                  <form class="form-sample" action="servisdb.php" method="post">
                    <p class="card-description">
                      Kişisel / Araç Bilgileri
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ad Soyad</label>
                          <div class="col-sm-9">
                            <input type="text" name="arac_sahibi"class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Telefon</label>
                          <div class="col-sm-9">
                            <input type="text" name="telefon"class="form-control" />
                          </div>
                        </div>
                      </div>

                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Araç Plaka</label>
                          <div class="col-sm-9">
                            <input type="text" name="arac_plaka" class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Araç Marka</label>
                          <div class="col-sm-9">
                            <input type="text" name="arac_marka"  class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Araç Model</label>
                          <div class="col-sm-9">
                            <input type="text" name="arac_model" class="form-control" />
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Servise Giriş</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="servis_giris" placeholder="01/01/2021"/>
                          
                          </div>
                        </div>
                      </div>
                   

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Araç Durum</label>
                          <div class="col-sm-9">
                            <label class="form-control" for="arac_durum">
                                <select name="arac_durum" id="arac_durum">
                                  <option value="BeklemeAsamasi">Bekleme Aşamasında</option>
                                  <option value="ServisBasladi">Servis İşlemleri Başladı</option>
                                  <option value="TamirEdildi">Tamir Edildi</option>
                                  <option value="TeslimEdildi">Teslim Edildi</option>
                                </select>
                                
                          </div>  
                        </div>
                      </div>
                            <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
                           <button class="btn btn-light">Temizle</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="" target="_blank"></a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
