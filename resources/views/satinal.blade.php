<!doctype html>
<html lang="en">
  <head>
  	<title>Satın Al</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="satinal/css/style.css">
	<link rel="stylesheet" href="satinal/css/tablo.css">
	</head>
	<body>
	<section class="ftco-section">
    <div id="generic_price_table">
    <section>
            <div class="container">
                <div class="row">
                    @if($sayac > 0)
                    <div class="col-md-12">
                        <!--PRICE HEADING START-->

                        <div class="price-heading clearfix">
                            <h1>Sepetteki Ürünler</h1>
                        </div>
                        <!--//PRICE HEADING END-->
                    </div>
                    @else
                    <div class="col-md-12">
                        <!--PRICE HEADING START-->

                        <div class="price-heading clearfix" style="margin-top:20%;">
                            <h1>Sepetinize Ürün Eklemediniz.</h1>
                        </div>
                        <!--//PRICE HEADING END-->
                    </div>
                    @endif
                </div>
            </div>
            <div class="container">
                <!--BLOCK ROW START-->
                <div class="row">
                    @for($i=0;$i < $sayac;$i++)
                    <div class="col-md-4">

                    	<!--PRICE CONTENT START-->
                        <div class="generic_content clearfix">

                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">

                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">

                                	<!--HEAD START-->

                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>{{$veriler[$i]->sanatci}}</span>
                                    </div>
                                    <!--//HEAD END-->

                                </div>
                                <!--//HEAD CONTENT END-->

                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">
                                    <span class="price">
                                        <span class="currency" id="tutar">{{$veriler[$i]->konserfiyat}}</span>
                                        <span class="sign">&#8378;</span>
                                    </span>
                                </div>
                                <!--//PRICE END-->

                            </div>
                            <!--//HEAD PRICE DETAIL END-->

                            <!--FEATURE LIST START-->
                            <div class="generic_feature_list">
                            	<ul>
                                	<li><span>Etkinlik Yeri : </span>{{$veriler[$i]->konseryeri}}</li>
                                  <li><span>Bilet Sayısı : </span><i    id="eksi" onclick="azalt('{{$veriler[$i]->konserfiyat}}','{{$i}}')" class="fa fa-minus" aria-hidden="true"></i><text id="{{$i}}">1</text> <i   id="arti" onclick="arttir('{{$veriler[$i]->konserfiyat}}','{{$i}}','{{$veriler[$i]->id}}')" class="fa fa-plus" aria-hidden="true"></i></li>
                                  <li><span>Etkinlik Tarihi : </span>{{$tarih[$i]}}</li>
                                  <li><span>Etkinlik Türü : </span>{{$veriler[$i]->etkinlikturu}}</li>
                                </ul>
                            </div>
                            <div class="generic_price_btn clearfix">
                            	<a class="" href="{{route('sepettencikar',$veriler[$i]->id)}}">Sepetten Çıkar</a>
                            </div>
                            <!--//BUTTON END-->
                        </div>
                        <!--//PRICE CONTENT END-->
                    </div>
                    @endfor

                        <!--//PRICE CONTENT END-->

                    </div>

                </div>
                <!--//BLOCK ROW END-->

            </div>
        </section>
    </div>
    @if($sayac > 0)
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper"  style="margin-top:-8%;">
						<div class="row no-gutters">
							<div class="col-lg-12 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
                  <p style="display:block;color:green;font-size:15px; margin-left:85%;" id="chekyazi">Toplam Fiyat : <text id="toplamfiyat">{{$fiyat}}</text> &#8378;</p>
									<h3 class="mb-4">Satın Alma İşlemi</h3>
									<div id="form-message-warning" class="mb-4"></div>
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="post" action="{{route('satinaltamamla',$veriler)}}" class="contactForm" id="satinalform">
                    @csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Kart Üzerindeki İsim</label>
													<input type="text" class="form-control" style="background:transparent;" name="name" id="name" placeholder="Örn:Bahadır Özdemir">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Kart Numarası </label>
													<input type="text" class="form-control" style="background:transparent;" name="kartno" id="kartno" maxlength="19" placeholder="0000-0000-0000-0000">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="subject">Son Kullanma Tarihi</label>
													<input type="text" class="form-control" style="background:transparent;" name="starih" id="starih" placeholder="Ay / Yıl">
												</div>
											</div>
                      <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="subject">CSV Kodu</label>
													<input type="number" class="form-control" style="background:transparent;" name="CSV" id="CSV" maxlength="3"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="000">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<div style="width:20%;margin-top:5%;" onclick="sa()" class="btn btn-primary">Satın Al</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
    @endif
	</section>

	<script src="satinal/js/jquery.min.js"></script>
  <script src="satinal/js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>


 function arttir(deger,numara,id)
 {
    var divsToHide = document.getElementsByClassName("fa fa-minus");
    for(var i = 0; i < divsToHide.length; i++){
        divsToHide[i].style.display = "none"; // depending on what you're doing
    }
    var divsToHide = document.getElementsByClassName("fa fa-plus");
    for(var i = 0; i < divsToHide.length; i++){
        divsToHide[i].style.display = "none"; // depending on what you're doing
    }
   var x=$('#'+numara).html();
   $.ajax({
    url:"{{route('biletkontrolet')}}",
    method:"POST",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:{x:x,id:id},
    success:function(data)
    {
      if(data=="true")
      {
        $('#'+numara).html(parseInt(x)+1);
        $('#toplamfiyat').html(parseInt($('#toplamfiyat').html())+parseInt(deger));
        var divsToHide = document.getElementsByClassName("fa fa-minus");
        for(var i = 0; i < divsToHide.length; i++){
            divsToHide[i].style.display = "inline-block"; // depending on what you're doing
        }
        var divsToHide = document.getElementsByClassName("fa fa-plus");
        for(var i = 0; i < divsToHide.length; i++){
            divsToHide[i].style.display = "inline-block"; // depending on what you're doing
        }
      }
      else {
        Swal.fire({
                      title: 'Hata!',
                      text: "Bilet Sayısı En Fazla "+x+" Olabilir.",
                      icon: 'error',
                      confirmButtonText: 'Tamam'
                 })
                 document.getElementById("eksi").style.display="inline-block";
                 document.getElementById("arti").style.display="inline-block";
      }
    },error:function(error)
    {
      console.log(error);
    }
    });

 }
 function azalt(deger,numara)
 {

   var x=$('#'+numara).html();
   if(parseInt(x)==1)
   {
     Swal.fire({
                   title: 'Hata!',
                   text: "Bilet Sayısı En Az 1 Olmalıdır.",
                   icon: 'error',
                   confirmButtonText: 'Tamam'
              })
   }
   else {
        $('#'+numara).html(parseInt(x)-1);
        $('#toplamfiyat').html(parseInt($('#toplamfiyat').html())-parseInt(deger));
   }
 }

  $('#kartno').keyup(function () {
    var deger=$('#kartno').val();
    if(deger.length==4)
    {
      yenideger=$('#kartno').val()+"-";
      $('#kartno').val(yenideger);
    }
    else if(deger.length==9)
    {
      yenideger=$('#kartno').val()+"-";
      $('#kartno').val(yenideger);
    }
    else if(deger.length==14)
    {
      yenideger=$('#kartno').val()+"-";
      $('#kartno').val(yenideger);
    }
  });

  $('#starih').keyup(function () {
    var deger=$('#starih').val();
    if(deger.length==2)
    {
      if(deger > 31)
      {
        alert("Gün Sayısı 31 den büyük olamaz.");
        $('#starih').val("");
      }
      else {
        yenideger=$('#starih').val()+" / ";
        $('#starih').val(yenideger);
      }
    }
  });

function sa()
{
  if($('#name').val()=="" || $('#CSV').val()=="" || $('#kartno').val()=="" || $('#starih').val()=="")
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
    if($('#kartno').val().length < 19)
    {
      Swal.fire({
                    title: 'Hata!',
                    text: "Kart Numarası Hatalı.",
                    icon: 'error',
                    confirmButtonText: 'Tamam'
               })
    }
    else
    {
      if( $('#starih').val().length < 7)
      {
        Swal.fire({
                      title: 'Hata!',
                      text: "Tarih Uzunluğu Çok Kısa.",
                      icon: 'error',
                      confirmButtonText: 'Tamam'
                 })
      }
      else {
        if($('#CSV').val().length < 3)
        {
          Swal.fire({
                        title: 'Hata!',
                        text: "CSV Kodu Hatalı.",
                        icon: 'error',
                        confirmButtonText: 'Tamam'
                   })
        }
        else
        {
          Swal.fire({
                   title: 'İşleminiz tamamlanmıştır.',
                   text:'Biletlerim Kısmından Aktif Biletlerinizi Görebilirsiniz.',
                   icon: 'success',
                   confirmButtonText:"Tamam"
               }).then(function(){
                 var deger=[];
                 for (var i = 0; i <{{$sayac}}; i++) {
                  deger[i]=$('#'+i).html();
                 }
                  $.ajax({
              url:"{{route('sepetbiletekle')}}",
              method:"POST",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data:{deger:deger},
              success:function(data)
              {
                $('#satinalform').submit();
              },error:function(error)
               {
                 console.log(error);
               }
              });


               });
        }
      }
    }
  }
}



  </script>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

	</body>
</html>
