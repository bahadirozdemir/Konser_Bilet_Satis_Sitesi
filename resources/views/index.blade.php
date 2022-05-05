<!DOCTYPE html>
<meta content="" name="description">
  <meta content="" name="keywords">
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TONIGHT | ETKİNLİK BİLETLERİ</title>

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div id="logo"></div>
      <nav id="navbar" class="navbar">
       @include("menubar")
      </nav>
    </div>
  </header>
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="1">
      @auth
      <h1 style="font-size:33px;opacity:0.9"><p style="font-size:30px;opacity:0.9">Merhaba</p>{{Auth::guard("kullanici")->user()->name}}</h1>
      @endauth
      @guest
      <h1 data-aos="zoom-in" data-aos-delay="10">Bu Gece Heyecana Hazır Mısın?</h1>
      <h2 data-aos="zoom-in" data-aos-delay="1000" >Birbirinden Eğlenceli Etkinlikler TONİGHT'ta</h2>
      <div data-aos="zoom-in" data-aos-delay="1800">
      <a href="{{route('kayitol')}}" class="btn-get-started">Kayıt Ol</a>
      </div>
      @endguest
    </div>
  </section><!-- End Hero Section -->
  <main id="main">
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Biz kimiz?</h2>
            <p>
             Hiç bir konuda mağduriyet yaşatmadan, sizin memnuniyetiniz için çalışıyoruz.
            </p>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-ticket-detailed"></i></div>
              <h4 class="title"><a href="">Dünyanın Lider Biletleme Firması</a></h4>
              <p class="description">Türkiye'nin eğlenceye giriş noktası" olarak 2000 yılından beri eğlence ve sanat tutkunları etkinliklerle buluşturan TONIGHT: Live Nation Entertainment çatısı altında Kuzey Amerika, Avrupa ve Ortadoğu başta olmak üzere 21 ülkede faaliyet gösteren dünyanın lider biletleme firması Ticketmaster Ailesi'nin bir üyesidir.</p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-question-circle"></i></div>
              <h4 class="title"><a href="">Live Nation Entertainment Hakkında</a></h4>
              <p class="description">Live Nation Entertainment, canlı etkinlik ve e-ticaret konularında dünyanın önde gelen firmalarından biridir. Etkinlik organizasyonu, e-ticaret, sanatçı yönetimi ve pazarlama çözümlerini de içeren her biri kendi alanında lider dört şirketten oluşmaktadır:</p>
            </div>
          </div>
          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>
      </div>
    </section>
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Hizmetlerimiz</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-server"></i></a></div>
              <h4 class="title"><a href="">Kaliteli Hizmet</a></h4>
              <p class="description">Hiç bir konuda mağduriyet yaşatmadan, sizin memnuniyetiniz için çalışıyoruz.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-bank"></i></a></div>
              <h4 class="title"><a href="">En Uygun Fiyat</a></h4>
              <p class="description">İnternet siteleri arasında en uygun fiyatı size garanti ediyoruz.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="bi bi-fingerprint"></i></a></div>
              <h4 class="title"><a href="">Güvenli Ödeme</a></h4>
              <p class="description">256 bit SSL ve 3D güvenli ödeme sistemi ile rahatça alışveriş yapabilirsiniz.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Sizi Dinliyoruz</h3>
            <p class="cta-text"> Size daha iyi hizmet verebilmek için 7 gün 24 saat hizmetinizdeyiz.Aklınıza takılan bir soru mu var ? Bize Ulaşın.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{route('iletisim')}}">Bize Ulaşın</a>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">TONIGHT BLOG</h3>
          <p class="section-description">Birbirinden İlginç Bilgiler TONIGHT Blogta</p>
        </div>
        <br>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
             <div class="col-lg-4 col-md-6 portfolio-item" >
                 <img src="assets/img/1.jpeg" class="img-fluid" alt="">
                 <div class="portfolio-info" style="background:#AAAAAA">
                   <h4 style="color:white">Tiyatro ve Sinema Arasındaki Farklar & Benzerlikler Nelerdir?</h4>
                   <strong style="color:white; font-size:13px;">Sinema ve tiyatro her ne kadar birbirlerine benzer özellikler gösterse de birbirinden farklı sanat dallarıdır. Her iki sanatın da kendine has özellikleri bulunur. Bunları birbirinden farklı yapan şey sadece sahne değildir. Bu farkları daha detaylı bilmek için hem tiyatroyu hem de sinemayı tanımak gerekir. Gelin hep birlikte sinema ve tiyatro hakkında daha fazla bilgi sahibi olalım.</strong>
                 </div>
               </div>
               <div class="col-lg-4 col-md-6 portfolio-item" >
                   <img src="assets/img/2.jpeg" class="img-fluid" alt="">
                   <div class="portfolio-info" style="background:#AAAAAA">
                     <h4 style="color:white">Rap Müziğin Tarihçesi: Rap İsmi Nereden Geliyor?</h4>
                         <strong style="color:white; font-size:13px;">Müzik, insan ruhunu dinlendiren, sakinleştiren ve vücuttan stresi uzaklaştıran bir araçtır. Kendi arasında pek çok türe ayrılan müzik, insanların müzikte bir parçasını bulmasını sağlıyor. Rap müzik sevenler ve rap müzikte kendinden bir parça bulan kişiler için özel olarak hazırladığımız yazıda, müziğin derinlerine inmeyi ve tarihini araştırmak isteyenleri buluşturuyoruz. Rap müziğin tarihçesi, sizleri epey bir şaşırtacak.</strong>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-6 portfolio-item" >
                     <img src="assets/img/3.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info" style="background:#AAAAAA">
                       <h4 style="color:white">İlkbahar Şarkıları: Baharı Bu Şarkılarla Karşılayın</h4>
                               <strong style="color:white; font-size:13px;">Doğanın yeniden uyanmasını, ilkbaharın gelişini sen de coşkuyla karşılamak istersen doğru yerdesin. Bu çalma listesiyle ilkbaharı hep birlikte neşeyle karşılıyoruz.

Türkçe şarkılardan oluşan "İlkbahar Şarkıları" çalma listemizi Spotify üzerinde dinleyebilirsin. Ayrıca Spotify profilimizden düzenli aralıklarla oluşturacağımız yeni çalma listeleri ve sürprizler için takipte kalmanızı öneriyoruz.</strong>
                     </div>
                   </div>
                   <div class="col-lg-4 col-md-6 portfolio-item" >
                       <img src="assets/img/4.jpg" class="img-fluid" alt="">
                       <div class="portfolio-info" style="background:#AAAAAA">
                        <h4 style="color:white">Konser Günü İşinize Yarayacak İpuçları</h4>
                                 <strong style="color:white; font-size:13px;">Konser günleri eğlenceli ve güzel geçmeli. Konsere giderken ve konser sırasında yapacağınız bazı değişikliklerle o günü daha da unutulmaz hale getirebilirsiniz. Bu yazımızda konser günlerinde işinize yarayacak ipuçlarını derledik.Rahat Giysiler Tercih EdinKıyafetleriniz hareketlerinizi kısıtlayabilir. Bu yüzden içinde hem güzel hem de rahat hissedebileceğiniz kıyafetlet seçerek konserde dilediğinizce eğlenebilirsiniz</strong>
                       </div>
                     </div>
                     <div class="col-lg-4 col-md-6 portfolio-item" >
                         <img src="assets/img/5.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info" style="background:#AAAAAA">
                           <h4 style="color:white">Konserlerde Fotoğraf/Video Nasıl Çekilir?</h4>
                         <strong style="color:white; font-size:13px;">Hayatımızın vazgeçilmez zevklerinden biri müziktir. Sevdiğimiz müzikleri yaratan sanatçıları canlı canlı dinlemek günlük hayatın stresinden kaçmak için harika bir etkinliktir. Peki gittiğimiz konserleri fotoğraf ve videolarla ölümsüzleştirirken nelere dikkat etmek gerekir? Bu yazımızda konserlerde daha iyi fotoğraflar çekebilmek, videolar kaydedebilmek için uygulamanız gereken taktikleri derledik.</strong>
                         </div>
                       </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/submit.js"></script>


</body>

</html>
