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
    <title>Etkinlik Ekle</title>

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
            @include("admin/bildirimler");
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
              @if(session('onay'))
              <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Başarılı</span>
                Etkinlik Başarıyla Eklendi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>TONIGHT</strong> Etkinlik Ekle
                                    </div>
                                    <div class="card-body card-block">
                                        <form  id="ekleform" method="post" action="{{route('urunekle')}}" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Sanatçı</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sanatci" name="sanatci" placeholder="Sanatçı İsmini Giriniz" class="form-control" required>
                                                    <small class="form-text text-muted"> </small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tarih</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="tarih" name="tarih" placeholder="Etkinlik Tarihini Giriniz." class="form-control" required>
                                                    <small class="help-block form-text"></small>
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
                                                        <option value="Eskişehir">Eskişehir</option>
                                                        <option value="Muğla">Muğla</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col col-md-3">
                                                    <label for="selectSm" class=" form-control-label">Konser Yeri</label>
                                                  </div>
                                                    <div class="col-12 col-md-9" >
                                                        <select name="mekan" id="mekan" class="form-control-sm form-control" >

                                                        </select>
                                                   </div>
                                                </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Etkinlik Fiyatı</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="fiyat" name="fiyat" placeholder="Etkinlik Fiyatını Giriniz." class="form-control" required>
                                                    <small class="help-block form-text"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Bilet Sayısı</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="bilet" name="bilet" placeholder="Bilet Sayısını Giriniz." class="form-control" required>
                                                    <small class="help-block form-text"></small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectSm" class=" form-control-label">Etkinlik Türü</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="etkinlikturu" id="etkinlikturu" class="form-control-sm form-control">
                                                        <option value="Konser">Konser</option>
                                                        <option value="Festival">Festival</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Etkinlik Resmi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="resim" name="resim" class="form-control-file">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button id="ekle" type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Tamamla
                                        </button>

                                    </div>
                                </div>

                    </div>
                </div>
            </div>
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
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  	<script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
  	<script src="admin/vendor/select2/select2.min.js">
  	</script>

  	<!-- Main JS-->
  	<script src="admin/js/main.js"></script>
<script>
 $('#ekle').click(function(){

   if($('#sanatci').val()=="" || $('#tarih').val()=="" || $('#mekan').val()=="" || $('#etkinlikturu').val()=="" || $('#fiyat').val()=="" || $('#sehir').val()=="" || $('#resim').val()=="" || $('#bilet').val()=="")
   {
     Swal.fire({
                   title: 'Hata!',
                   text: "Lütfen Boş Alanları Doldurun.",
                   icon: 'error',
                   confirmButtonText: 'Tamam'
              })
   }
   else
   {
       $('#ekleform').submit();
   }

 });
</script>
<script>
$(document).ready(function(){
  var istanbul=["Babylon","Dorock XL","Zorlu Center Performans Sanatları Merkezi","Wolkswagen Arena","Jolly Joker","Bronx Pi Sahne","Shaft","Küçükçiftlik Park","IF Performance Hall Beşiktaş"];
  for (var i = 0;i <istanbul.length; i++)
  {
  $('#mekan').append(`
  <option id="`+i+`" value="`+istanbul[i]+`">`+istanbul[i]+`</option>
  `);

  }
});
$('#sehir').change(function(){
var istanbul=["Babylon","Dorock XL","Zorlu Center Performans Sanatları Merkezi","Wolkswagen Arena","Jolly Joker","Bronx Pi Sahne","Shaft","Küçükçiftlik Park","IF Performance Hall Beşiktaş"];
var izmir=["Hayal Kahvesi","İzmir Arena Etkinlik","Cinatı","Kime Ne Alaçatı","Before Sunset Beach","Ooze Venue","Tac Mahal","6:45 Kaybedenler Kulübü Alsancak"];
var antalya=["Aura club","The RoxxPub","Shaker Pub","Simurg Temple","Joly Joker Concert Hall","Barabar Sahne","Tudors Arena"];
var eskisehir=["222 Club","Spr Pub","5 Stars","4.04 Stars","Public Tube Arena","Peyote Eskişehir"];
var mugla=["Marina Yacht Club","Tudors Bodrum","Posh Club","Hillside Beach","Fink Club","Mandalin"];
var sehir=$('#sehir').children("option:selected").val();
document.getElementById("mekan").innerHTML="";
if(sehir=="Eskişehir")
{

 document.getElementById("mekan").innerHTML=""
for (var i = 0;i <eskisehir.length; i++)
{
$('#mekan').append(`
<option id="sec" value="`+eskisehir[i]+`">`+eskisehir[i]+`</option>
`);
}
}
else if(sehir=="Muğla")
{

  for (var i = 0;i <mugla.length; i++)
  {
  $('#mekan').append(`
  <option value="`+mugla[i]+`">`+mugla[i]+`</option>
  `);
  }
}
else if(sehir=="Antalya")
{

  for (var i = 0;i <antalya.length; i++)
  {
  $('#mekan').append(`
  <option value="`+antalya[i]+`">`+antalya[i]+`</option>
  `);
  }
}
else if(sehir=="İzmir")
{

  for (var i = 0;i <izmir.length; i++)
  {
  $('#mekan').append(`
  <option value="`+izmir[i]+`">`+izmir[i]+`</option>
  `);
  }
}
else if(sehir=="İstanbul")
{

  for (var i = 0;i <istanbul.length; i++)
  {
  $('#mekan').append(`
  <option value="`+istanbul[i]+`">`+istanbul[i]+`</option>
  `);
  }
}

});
</script>
</body>

</html>
<!-- end document-->
