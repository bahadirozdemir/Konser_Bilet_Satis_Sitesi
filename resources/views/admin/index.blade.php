<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Title Page-->
      <title>Admin Paneli</title>

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Main CSS-->
    <link href="admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.blade.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Ana Sayfa</a>
                        </li>
                        <li>
                            <a href="chart.blade.php">
                                <i class="fas fa-chart-bar"></i>Ürün Ekle</a>
                        </li>
                        <li>
                            <a href="table.blade.php">
                                <i class="fas fa-table"></i>Ürün Sil</a>
                        </li>
                        <li>
                            <a href="form.blade.php">
                                <i class="far fa-check-square"></i>Ürünleri Listele</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.blade.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.blade.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.blade.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.blade.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.blade.php">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.blade.php">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.blade.php">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.blade.php">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.blade.php">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.blade.php">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.blade.php">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.blade.php">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.blade.php">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.blade.php">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
       @include("admin/menubar");
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
          @include("admin/adminheader");
            <div class="main-content">
              @if(session('onay'))
              <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Başarılı</span>
                 Kişi Başarıyla Güncellendi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$kullanicisayisi}}</h2>
                                                <span>Üye Sayısı</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$satilanmiktar}}</h2>
                                                <span>Bilet Satıldı</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi">&#x20BA;</i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$toplamkazanc}}</h2>
                                                <span>Toplam Kazanç</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-14">
                                @if($kullanicisayisi!=0)
                                <h2 class="title-1 m-b-25">Kullanıcı Listesi</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-bordered table-earning">
                                        <thead>
                                            <tr>
                                                <th>İsim Soyisim</th>
                                                <th>E-Mail Adresi</th>
                                                <th>Telefon Numarası</th>
                                                <th class="text-right">Doğum Tarihi</th>
                                                <th class="text-right">Cinsiyet</th>
                                                <th class="text-right">Kullanıcıyı Yönet</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @for($i=0;$i<$kullanicisayisi;$i++)
                                            <tr>
                                                <td>{{$kisiler[$i]->name}}</td>
                                                <td>{{$kisiler[$i]->email}}</td>
                                                <td>{{$kisiler[$i]->telno}}</td>
                                                <td>{{$kisiler[$i]->dtarih}}</td>
                                                <td>{{$kisiler[$i]->cinsiyet}}</td>
                                                <td style="position:absolute">
                                                    <div class="table-data-feature">
                                                      <button onclick="editgoster('{{$i}}')" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                          <i class="zmdi zmdi-edit"></i>
                                                      </button>
                                                        <button onclick="sil('{{$kisiler[$i]->email}}')"class="item" data-toggle="tooltip" data-placement="top" title="Sil">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           @endif
                        </div>
                        @for($i=0;$i<$kullanicisayisi;$i++)
                        <div class="main-content" id="{{$i}}" style="opacity:0">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>TONIGHT</strong> Üye Bilgilerini Düzenle
                                                </div>
                                                <div class="card-body card-block">
                                                    <form  id="ekleform" method="post" action="{{route('uyeleriduzenle',$kisiler[$i]->email)}}" enctype="multipart/form-data" class="form-horizontal">
                                                        @csrf
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">İsim Soyisim</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="sanatci" name="isim" value="{{$kisiler[$i]->name}}" class="form-control" required>
                                                                <small class="form-text text-muted"> </small>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="email-input" class=" form-control-label">E-Mail Adresi</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="email" id="tarih" name="mailadres" value="{{$kisiler[$i]->email}}" class="form-control" required>
                                                                <small class="help-block form-text"></small>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="password-input" class=" form-control-label">Şifre</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="mekan" name="sifre" value="{{$kisiler[$i]->password}}" class="form-control" required>
                                                                <small class="help-block form-text"></small>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="password-input" class=" form-control-label">Telefon Numarası</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="mekan" name="telefon" value="{{$kisiler[$i]->telno}}" class="form-control" required>
                                                                <small class="help-block form-text"></small>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="password-input" class=" form-control-label">Doğum Tarihi</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="date" id="fiyat" name="dogum" value="{{$kisiler[$i]->dtarih}}" class="form-control" required>
                                                                <small class="help-block form-text"></small>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="password-input" class=" form-control-label">Cinsiyet</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="text" id="bilet" name="bilet" value="{{$kisiler[$i]->cinsiyet}}" class="form-control" disabled>
                                                                <small class="help-block form-text"></small>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-dot-circle-o"></i> Tamamla
                                                            </button>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="admin/vendor/jquery-3.2.1.min.js"></script>
  	<!-- Bootstrap JS-->
  	<script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
  	<script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
  	<!-- Vendor JS       -->
  	<script src="admin/vendor/slick/slick.min.js">
  	</script>
  	<script src="admin/vendor/wow/wow.min.js"></script>
  	<script src="admin/vendor/animsition/animsition.min.js"></script>
  	<script src="admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  	</script>
  	<script src="admin/vendor/counter-up/jquery.waypoints.min.js"></script>
  	<script src="admin/vendor/counter-up/jquery.counterup.min.js">
  	</script>
  	<script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
  	<script src="admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  	<script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  	<script src="admin/vendor/select2/select2.min.js">
  	</script>

  	<!-- Main JS-->
  	<script src="admin/js/main.js"></script>
    <script>
    function sil(deger)
    {
      const swalWithBootstrapButtons = Swal.mixin({
       customClass: {
         confirmButton: 'btn btn-success',
         cancelButton: 'btn btn-danger'
       },
     })

     swalWithBootstrapButtons.fire({
      title: 'İşlem Tamamlansın Mı?',
      text: "Bu Kaydı Silmek İstediğinize Emin Misiniz?.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#28a745',
      cancelButtonColor: '#dc3545',
      confirmButtonText: 'Onayla',
      cancelButtonText: 'Geri Dön',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed)
      {

        $.ajax({
     url:"{{route('uyesil')}}",
     method:"POST",
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     data:{deger:deger},
     success:function(data)
     {

       Swal.fire({
                title: 'Silme İşlemi Başarıyla Tamamlanmıştır.',
                icon: 'success',
                confirmButtonText:"Tamam"
            }).then(function(){
              window.location.reload();
            });
     },error:function(error)
      {
        console.log(error);
      }
     });
      }
       else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        $('#öneri-ekle-modal').modal('show');
      }
    })
    }
   </script>
   <script>
   function editgoster(formid)
   {
    var deneme={{$kullanicisayisi}}-1;

    while(deneme != -1)
    {
      document.getElementById(deneme).style.display="none";
      deneme--;

    }
    var sayi=0;
    document.getElementById(formid).style.display="block";
    function arttir()
    {
    if(sayi<1)
    {
    sayi=sayi+0.01;
    document.getElementById(formid).style.opacity=sayi;

    }
   }
   if(sayi <1)
   {
    setInterval(arttir,10);

   }
   }

   </script>
</body>

</html>
<!-- end document-->
