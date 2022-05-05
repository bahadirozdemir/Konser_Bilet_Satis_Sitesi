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
    <title>Etkinlikleri Düzenle</title>

    <!-- Fontfaces CSS-->
    <link href="../admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../admin/css/theme.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.blade.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.blade.php">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.blade.php">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.blade.php">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.blade.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.blade.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.blade.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.blade.php">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.blade.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
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
              @include("admin/bildirimler");
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Etkinlik Tablosu</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select id="filtre" class="js-select2" name="property">
                                               @if($tur=="tum")
                                               <option selected value="0">Tüm Etkinlikler</option>
                                               <option value="1">Konser</option>
                                               <option value="2">Festival</option>
                                               @elseif($tur=="konser")
                                               <option selected value="0">Tüm Etkinlikler</option>
                                               <option selected value="1">Konser</option>
                                               <option value="2">Festival</option>
                                               @elseif($tur=="festival")
                                                <option value="0">Tüm Etkinlikler</option>
                                                <option value="1">Konser</option>
                                                <option selected value="2">Festival</option>
                                                @endif
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>Filtrele</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Sanatçı</th>
                                                <th>Etkinlik Tarihi</th>
                                                <th>Etkinlik Yeri</th>
                                                <th>Etkinlik Fiyatı</th>
                                                <th>Etkinlik Şehri</th>
                                                <th>Kalan Bilet</th>
                                            </tr>
                                        </thead>
                                        @for($i=0;$i<$say;$i++)
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>{{$data[$i]->sanatci}}</td>
                                                <td>{{$data[$i]->konsertarih}}</td>
                                                <td>{{$data[$i]->konseryeri}}</td>
                                                <td>{{$data[$i]->konserfiyat}}</td>
                                                <td>{{$data[$i]->konsersehri}}</td>
                                                <td>{{$data[$i]->kalanbilet}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button onclick="editgoster('{{$i}}')" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button onclick="sil('{{$data[$i]->id}}')"class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endfor
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                                @for($i=0;$i<$say;$i++)
                                <div class="main-content" id="{{$i}}" style="opacity:0">
                                    <div class="section__content section__content--p30">
                                        <div class="container-fluid">
                                            <div class="row">


                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <strong>TONIGHT</strong> Etkinlik Düzenle
                                                        </div>
                                                        <div class="card-body card-block">
                                                            <form  id="ekleform" method="post" action="{{route('duzenle',$data[$i]->id)}}" enctype="multipart/form-data" class="form-horizontal">
                                                                @csrf
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Sanatçı</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="sanatci" name="sanatci" value="{{$data[$i]->sanatci}}" class="form-control" required>
                                                                        <small class="form-text text-muted"> </small>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="email-input" class=" form-control-label">Tarih</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="date" id="tarih" name="tarih" value="{{$data[$i]->konsertarih}}" class="form-control" required>
                                                                        <small class="help-block form-text"></small>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="password-input" class=" form-control-label">Mekan</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="mekan" name="mekan" value="{{$data[$i]->konseryeri}}" class="form-control" required>
                                                                        <small class="help-block form-text"></small>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="password-input" class=" form-control-label">Etkinlik Fiyatı</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="fiyat" name="fiyat" value="{{$data[$i]->konserfiyat}}" class="form-control" required>
                                                                        <small class="help-block form-text"></small>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="password-input" class=" form-control-label">Bilet Sayısı</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="bilet" name="bilet" value="{{$data[$i]->toplambilet}}" class="form-control" required>
                                                                        <small class="help-block form-text"></small>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="selectSm" class=" form-control-label">Etkinlik Türü</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="etkinlikturu" id="etkinlikturu" class="form-control-sm form-control" required>
                                                                            <option value="Konser">Konser</option>
                                                                            <option value="Festival">Festival</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="selectSm" class=" form-control-label">Konser Şehri</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="sehir" id="sehir" class="form-control-sm form-control">
                                                                            <option value="İstanbul">İstanbul</option>
                                                                            <option value="İzmir">İzmir</option>
                                                                            <option value="Antalya">Antalya</option>
                                                                            <option value="Kocaeli">Kocaeli</option>
                                                                            <option value="Eskişehir">Eskişehir</option>
                                                                            <option value="Muğla">Muğla</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="file-input" class=" form-control-label">Etkinlik Resmi</label>

                                                                    </div>
                                                                  <div class="col col-md-3">
                                                                    <img src="../assets/img/portfolio/{{$data[$i]->sanatci}}.jpeg">
                                                                  </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="file" id="resim" name="resim" class="form-control-file" required>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="../admin/vendor/jquery-3.2.1.min.js"></script>
  	<!-- Bootstrap JS-->
  	<script src="../admin/vendor/bootstrap-4.1/popper.min.js"></script>
  	<script src="../admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
  	<!-- Vendor JS       -->
  	<script src="../admin/vendor/slick/slick.min.js">
  	</script>
  	<script src="../admin/vendor/wow/wow.min.js"></script>
  	<script src="../admin/vendor/animsition/animsition.min.js"></script>
  	<script src="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  	</script>
  	<script src="../admin/vendor/counter-up/jquery.waypoints.min.js"></script>
  	<script src="../admin/vendor/counter-up/jquery.counterup.min.js">
  	</script>
  	<script src="../admin/vendor/circle-progress/circle-progress.min.js"></script>
  	<script src="../admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  	<script src="../admin/vendor/chartjs/Chart.bundle.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  	<script src="../admin/vendor/select2/select2.min.js">
  	</script>

  	<!-- Main JS-->
  	<script src="../admin/js/main.js"></script>
    <script>
    function sil(deger)
    {
      $.ajax({
       url:"{{route('urunsil')}}",
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
    </script>
    <script>
    $("#filtre").change(function(){

      var filtre=$(this).children("option:selected").val();
      if(filtre==0)
      {
        window.location.href="{{route('listele','TumEtkinlikler')}}";
      }
      else if(filtre==1)
      {
        window.location.href="{{route('listele','Konserler')}}";
      }
      else if(filtre==2)
      {
        window.location.href="{{route('listele','Festivaller')}}";
      }
    });
    </script>

<script>
function editgoster(formid)
{
 var deneme={{$say}}-1;

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
