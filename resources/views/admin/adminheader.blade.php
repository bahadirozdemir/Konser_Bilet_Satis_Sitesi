<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">{{$bildirimsayisi}}</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>{{$bildirimsayisi}} Bildiriminiz Var</p>
                                </div>
                                @for($i=0;$i<$bildirimsayisi;$i++)
                                <div class="mess__item">

                                    <div class="content">
                                        <h6>{{$bildirimler[$i]->name}}</h6>
                                        <p>Konu : {{$bildirimler[$i]->konu}}</p>
                                        @if($zamanlar[$i]["gun_farki"]!=0)<span class="time">{{$zamanlar[$i]["gun_farki"]}} Gün</span>@endif @if($zamanlar[$i]["saat_farki"]!=0)<span class="time">{{$zamanlar[$i]["saat_farki"]}} Saat</span>@endif @if($zamanlar[$i]["dakika_farki"]!=0)<span class="time">{{$zamanlar[$i]["dakika_farki"]}} Dakika</span>@endif @if($zamanlar[$i]["saniye_farki"]!=0)<span class="time">{{$zamanlar[$i]["saniye_farki"]}} Saniye Önce</span>@endif
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap" style="margin-left:700%;">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="admin/images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="admin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{Auth::guard("root")->user()->name}}</a>
                                        </h5>
                                        <span class="email">{{Auth::guard("root")->user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Hesap</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Çıkış</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
