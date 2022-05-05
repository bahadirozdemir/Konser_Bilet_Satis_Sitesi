<!DOCTYPE html>
<meta content="" name="description">
  <meta content="" name="keywords">
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
  <title>Bize Ulaşın</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
             @include("menubar");
        </nav>
      </div>
  </header><!-- End Header -->
<br><br><br>
 <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Bize Ulaşın</h3>
          <p class="section-description">İstek ve Şikayetlerinizi Bildirin Size Dönüş Yapalım.</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.2129235980838!2d29.923211915368466!3d40.823286579319934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4e8ad751f097%3A0xdb29061ce8f77254!2zS29jYWVsaSDDnG5pdmVyc2l0ZXNpIFVtdXR0ZXBlIEthbXDDvHPDvCBCIEthcMSxc8Sx!5e0!3m2!1str!2str!4v1646343634433!5m2!1str!2str" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Kocaeli Üniversitesi<br>Umuttepe Kampüsü</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>koubsm@edu.tr</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>(0262) 303 10 00</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="{{route('bizeulasin')}}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="İsim Soyisim" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Adresiniz" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Mesajınız" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Gönder</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->





    <!-- ======= Footer ======= -->

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


</body>
</html>
