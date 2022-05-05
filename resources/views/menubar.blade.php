<ul>
  @auth
  <li ><a class="nav-link scrollto " href="{{route('anasayfa')}}">Ana Sayfa</a></li>
  <li ><a class="nav-link scrollto" href="{{route('EtkinlikTuru','Konserler')}}">Konserler</a></li>
  <li><a class="nav-link scrollto" href="{{route('EtkinlikTuru','Festivaller')}}">Festivaller</a></li>
  <li><a class="nav-link scrollto " href="{{route('biletlerim')}}">Biletlerim</a></li>
  <li><a class="nav-link scrollto" href="{{route('bilgilerim')}}">Profil Bilgilerim</a></li>
  <li><a class="nav-link scrollto" href="{{route('cikis')}}">Çıkış Yap</a></li>
 <li><a class="nav-link scrollto" href="{{route('satinal')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> &nbsp; Sepetim</a></li>

  @endauth
  @guest
  <li><a class="nav-link scrollto" href="{{route('girisyap')}}">Giriş Yap</a></li>
  <li><a class="nav-link scrollto" href="{{route('hakkimizda')}}">Hakkımızda</a></li>
  <li><a class="nav-link scrollto" href="{{route('iletisim')}}">Bize Ulaşın</a></li>
  @endguest
</ul>
