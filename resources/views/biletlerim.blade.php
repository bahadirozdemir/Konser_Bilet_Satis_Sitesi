<!DOCTYPE html>
<html lang="en">
<head>
	<title>Biletlerim</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="biletlerim/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="biletlerim/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="biletlerim/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="biletlerim/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="biletlerim/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="biletlerim/css/util.css">
	<link rel="stylesheet" type="text/css" href="biletlerim/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
				@if($sayac > 0)
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
							 Sanatçı
							</div>
							<div class="cell">
								Etkinlik Tarihi
							</div>
							<div class="cell">
              Etkinlik Yeri
							</div>
							<div class="cell">
								Kupon
							</div>
						</div>
            @for($i=0; $i <$sayac; $i++)
						<div class="row">
							<div class="cell" data-title="Full Name">
								{{$bilgiler[$i]->sanatci}}
							</div>
							<div class="cell" data-title="Age">
							 	{{$bilgiler[$i]->konsertarih}}
							</div>
							<div class="cell" data-title="Job Title">
									{{$bilgiler[$i]->konseryeri}}
							</div>
							<div class="cell" data-title="Location">
						 <button type="button" onclick='yazdir("{{$bilgiler[$i]->id}}")' class="btn btn-outline-info">Kuponu Yazdır</button>
							</div>
						</div>
            @endfor
					</div>
			</div>
		</div>
	</div>
	@else
	<div>
	 	<div>
	 <div style="font-size:25px;">Üzgünüz Satın Aldığınız Herhangi Bir Bilet Bulamadık.</div>
  </div>
</div>
	 @endif



<!--===============================================================================================-->
	<script src="biletlerim/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="biletlerim/vendor/bootstrap/js/popper.js"></script>
	<script src="biletlerim/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="biletlerim/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="biletlerim/js/main.js"></script>
<script>
 function yazdir(konserid)
 {

   window.location.href=`{{url('kuponyazdir/`+konserid+`')}}`;
 }
</script>
</body>
</html>
