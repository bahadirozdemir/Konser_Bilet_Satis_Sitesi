<html>
  <head>
     <title>Profil Bilgilerim</title>
      <meta name="csrf-token" content="{{csrf_token()}}">

     <link rel="stylesheet" type="text/css" href="css/edit.css">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-11">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-right">Profil Bilgilerini Düzenle</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><input type="email" name="gelenmail" class="form-control" value={{Auth::user()->email}}></div>
                        <div class="col-md-4"><input type="phone" name="gelentel" minlength="10" maxlength="10" class="form-control" value  ={{Auth::user()->telno}}></div>
                        <div class="col-md-4"><input type="password" name="sifre" class="form-control" placeholder="Mevcut Şifreniz"></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" id="kaydet">Bilgileri Kaydet</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

       $("#kaydet").click(function(){
       var sifre=$("input[name=sifre]").val();
       $.ajax({
        url:"{{route('sifrekontrol')}}",
        method:"POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{sifre:sifre},
        success:function(data)
        {
          if(data=="true")
          {
            var telno=$("input[name=gelentel]").val();
            var email=$("input[name=gelenmail]").val();
            $.ajax({
             url:"{{route('onkontrol')}}",
             method:"POST",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data:{sifre:sifre,telno:telno,email:email},
             success:function(data)
             {
               console.log(data);
               if(data=="E-Mail Adresi Zaten Mevcut" || data=="Telefon Numarası Zaten Mevcut")
               {
                 Swal.fire({
                           title: 'Hata!',
                           text: data,
                           icon: 'error',
                           confirmButtonText: 'Tamam'
                      })
               }
               else
               {
                 Swal.fire({
                        title: 'İşleminiz tamamlanmıştır.',
                        icon: 'success',
                        confirmButtonText:"Tamam",
                    }).then(function(){
                      window.location.href="{{route('bilgilerim')}}";
                    });
               }

             },error:function(error)
             {
               console.log(error);
             }
           });
          }
          else
          {
            Swal.fire({
                      title: 'Hata!',
                      text: "Parolanız Hatalı.",
                      icon: 'error',
                      confirmButtonText: 'Tamam'
                 })
          }
        }
      });
 });

    </script>
  </body>
  </html>
