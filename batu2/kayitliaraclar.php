<?php
include("vtayar.php");
   
    $sorgu=$vt->prepare('SELECT * FROM servise_gelenler');
    $sorgu->execute();
    $servisegelenler=$sorgu-> fetchAll(PDO::FETCH_OBJ);

?>
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
            
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kayıtlı Araçlar</h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Ad Soyad
                          </th>
                          <th>
                            Telefon
                          </th>
                          <th>
                            Plaka
                          </th>
                          <th>
                            Araç Durum
                          </th>
                          <th>
                          Marka
                          </th>
                          <th>
                            Model
                          </th>
                          <th>
                          Servise Giriş
                          </th>
                          <th>
                          Silme
                          </th>
                          <th>
                          Güncelleme
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td></td>
                          <td></td> 
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                          
                          
                        <?php
                    foreach($servisegelenler as $person){?>

                    <tr>
                    <td><?= $person->servis_id ?></td>
                    <td><?= $person->arac_sahibi ?></td>
                    <td><?= $person->Telefon ?></td>
                    <td><?= $person->arac_plaka ?></td>
                    <td><?= $person->arac_durum ?></td>
                    <td><?= $person->arac_marka ?></td>
                    <td><?= $person->arac_model ?></td>
                    <td><?= $person->servis_giris ?></td>
                    <td><a href="#" class="btn btn-danger">Sil</a></td>
                    <td><a href="#" class="btn btn-primary">Güncelle</a></td>
                    
                </tr>
                <?php } ?>           
                          
                            
                          
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="" target="_blank"></span>
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
