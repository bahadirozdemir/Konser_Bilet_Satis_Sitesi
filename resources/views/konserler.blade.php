<!DOCTYPE html>
<meta content="" name="description">
  <meta content="" name="keywords">
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{csrf_token()}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Etkinlikler</title>

  <!-- Favicons -->
   <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Regna - v4.7.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" style=" background: rgba(52, 59, 64, 0.9);" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between align-items-center">
        <div id="logo"></div>
        <nav id="navbar" class="navbar">
           @include("menubar")
        </nav>
      </div>
  </header><!-- End Header -->
<br><br><br>
<!-- ======= Call To Action Section ======= -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
        <h3 class="section-title"></h3>
      </div>
        <br>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            @if($say!=0)
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tüm Şehirler</li>
              <?php
              for ($i=0; $i <$degiskenn; $i++)
              {
              echo '<li onclick="ui()" data-filter=".'.$konsersehri[$i].'">'.$konsersehri[$i].'</li>';
              }
              ?>
            </ul>
          </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @for($i=0; $i <$say; $i++)
           @if($goster[$i] <= 0 )
            <div class="col-lg-2 col-md-6 portfolio-item {{$sehirler[$i]}}">
           <div style="width:94%;height:100%;background:gray;z-index:999;position:absolute;opacity:0.7;text-align:center;">
             <h3 style="color:white;margin-top:40%;">Üzgünüz</h3>
             <h3 style="color:white;margin-top:10%;">Bu Etkinliği Kaçırdınız.</h3>
           </div>
           <img src="../assets/img/portfolio/{{$sanatci[$i]}}.jpeg" class="img-fluid" alt="" id="deneme">
         </div>
           @else
          <div class="col-lg-2 col-md-6 portfolio-item {{$sehirler[$i]}}">
          <img src="../assets/img/portfolio/{{$sanatci[$i]}}.jpeg" class="img-fluid" alt="" id="deneme">
           <div class="portfolio-info">
             <h4>{{$sanatci[$i]}}</h4>
             <strong style="color:white">{{$konsertarihleri[$i]}}</strong>
                <p style="font-size:15px;">{{$veriler[$i]->konsersehri}} / {{$konseryer[$i]}}</p>
                  <p style="font-size:15px;">Son {{$veriler[$i]->kalanbilet}} Bilet</p>
               <button onclick="sepetfonksiyon('{{$id[$i]}}')" class="btn btn-outline-light">{{$konserfiyatlari[$i]}} ₺</button>
           </div>
         </div>
         @endif
          @endfor
          @else
          <h3 style="color:black;margin-top:10%;">Üzgünüz. Herhangi Bir Etkinlik Bulunamadı.</h3>
          @endif
        </div>
      </div>
      </div>
    </section><!-- End Portfolio Section -->
    <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <h6>BİLGİLENDİRME</h6>
                <p class="text-justify">Satış : Almak istediğiniz bileti “Satın Al” butonuna tıkladıktan sonra, Kredi ya da Banka kartınızı kullanarak satın alabilirsiniz.</p>
                  <p class="text-justify">Güvenlik : Web sitemizde "3D" güvenli ödeme sistemi ve "256 bit SSL" sertifikası kullanılmaktadır.</p>
                    <p class="text-justify">Kvkk : Kişisel Verileri Koruma Kanunu Hakkında Aydınlatma Metnimizi İnceleyiniz</p>

              </div>

              <div class="col-xs-6 col-md-3">
                <h6>POLİTİKALAR & BİLDİRİMLER</h6>
                <ul class="footer-links">
                  <li><a href="http://scanfcode.com/category/c-language/">Sözleşme ve Politikalar</a></li>
                  <li><a href="http://scanfcode.com/category/front-end-development/">Çerez Politikası</a></li>
                  <li><a href="http://scanfcode.com/category/back-end-development/">Tercihleri Yönet</a></li>
                  <li><a href="http://scanfcode.com/category/java-programming-language/">TTK Bildirimleri</a></li>
                  <li><a href="http://scanfcode.com/category/android/">Kişisel Verilerin Korunması Hakkında</a></li>
                </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                <h6>Bizimle Çalışın</h6>
                <ul class="footer-links">
                  <li><a href="http://scanfcode.com/about/">Reklam Verin</a></li>
                  <li><a href="http://scanfcode.com/contact/">Kariyer</a></li>
                  <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Affiliate Programı</a></li>
                </ul>
              </div>
            </div>
            <hr>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">2018 TONIGHT Bilet Dağıtım Basım ve Tic. A.Ş. Tüm hakları saklıdır.
                </p>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
    </footer>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function sepetfonksiyon(id)
      {
        $.ajax({
     url:"{{route('sepet')}}",
     method:"POST",
     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     data:{id:id},
     success:function(data)
     {
       if(data=="hata")
       {
         Swal.fire({
                  title: 'Hata.',
                  text:"Bu Ürün Zaten Sepette Mevcut.",
                  icon: 'warning',
                  confirmButtonText:"Tamam"
              })
       }
       else {

       Swal.fire({
                title: 'Bilet Sepete Eklendi.',
                text:"Sepetim Sekmesinden Alışverişi Tamamlayabilirsiniz.",
                icon: 'success',
                confirmButtonText:"Tamam"
            })
      }
     },error:function(error)
      {
        console.log(error);
      }
     });
      }
    </script>
  </body>

  <html>




































    <!-- ======= Footer ======= -->

<script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
