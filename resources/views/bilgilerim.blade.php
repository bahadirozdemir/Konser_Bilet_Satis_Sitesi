<html>
  <head>
     <title>Profil Bilgilerim</title>
     <link rel="stylesheet" type="text/css" href="css/bilgilerim.css">;
  </head>
  <body>
      <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container emp-profile">
            <form method="post" action="{{route('guncelle')}}" id="form1">
              @csrf
                <div class="row">
                    <div class="col-md-2">
                      <div onclick="git()">
                      <i style="cursor:pointer;position:absolute;top:0;"onclick="geri" class="fa fa-arrow-left" aria-hidden="true"><strong> Geri Dön</strong></i>
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                                    <h5>
                                     {{Auth::user()->name}}
                                    </h5>
                                    <h6>
                                       Üye
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil Bilgileriniz</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2" >
                        <input type="submit" form="form1" class="profile-edit-btn" name="btnAddMore" value="Düzenle"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>İsim Soyisim</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-Mail Adresi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}}</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telefon</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->telno}}</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Doğum Tarihi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->dtarih}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cinsiyet</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->cinsiyet}}</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </form>
    <script>
    function git()
    {
      window.location.href="{{route('anasayfa')}}";
    }
    </script>
  </body>
</html>
