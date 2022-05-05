<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('admin')}}">
            <img src="../assets/img/logo2.png" alt="Admin " />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('admin')}}">
                     <i class="fas fa-tachometer-alt"></i>Ana Sayfa</a>
                </li>
                <li>
                    <a href="{{route('Urunsayfasi')}}">
                        <i class="fas fa-chart-bar"></i>Etkinlik Ekle</a>
                </li>
                <li>
                    <a href="{{route('listele','TumEtkinlikler')}}">
                        <i class="far fa-check-square"></i>Etkinlikleri Listele</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
