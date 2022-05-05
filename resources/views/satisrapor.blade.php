<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kupon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../satistamamla/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../satistamamla/css/util.css">
	<link rel="stylesheet" type="text/css" href="../satistamamla/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
			 <h1 style="margin-top:-5%;">Kupon Bilgileri</h1><br><br><br>
				<div class="dbox w-100 d-flex align-items-start">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-music"></span>

					</div>
					<div class="text pl-3">
						<p><span><strong>Sanatçı</strong> : {{$dizi->sanatci}}</span></p>
					</div>
				</div>
				<br><br><br>
				<div class="dbox w-100 d-flex align-items-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-map-marker"></span>
					</div>
					<div class="text pl-3">
						<p><span><strong>Etkinlik Yeri</strong> : {{$dizi->konseryeri}}</span></p>
					</div>
				</div>
				<br><br>
				<div class="dbox w-100 d-flex align-items-center">
					<div class="icon d-flex align-items-center justify-content-center">

						<span class="fa fa-calendar"></span>
					</div>
					<div class="text pl-3">
						<p><span><strong>Etkinlik Tarihi</strong> : {{$tarih}} </span></p>
					</div>
				</div>
				<br><br><br><br><br>
				<div class="dbox w-100 d-flex align-items-center">
					<div class="icon d-flex align-items-center justify-content-center">

						<span class="fa fa-user"></span>
					</div>
					<div class="text pl-3">
						<p><span><strong>Satın Alan</strong> : {{Auth::guard("kullanici")->user()->name}} </span> <text style="color:white;" id="ucretim"></text></p>
					</div>
				</div>
				<div id="qrcode" style="margin-left:40%;margin-top:5%;"></div>
			</form>
		   <div style="background:#686868;width:50%;">
				 <img style="margin-top:15%;margin-left:20%;" src="../assets/img/logo.png">
			 </div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
  <script src="../QR/qrcode.min.js"></script>
<!--===============================================================================================-->
	<script src="../satistamamla/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../satistamamla/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../satistamamla/vendor/bootstrap/js/popper.js"></script>
	<script src="../satistamamla/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../satistamamla/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../satistamamla/vendor/daterangepicker/moment.min.js"></script>
	<script src="../satistamamla/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../satistamamla/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../satistamamla/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script type="text/javascript">
			new QRCode(document.getElementById("qrcode"), {
					text:{{$biletno}},
					width: 100,
					height: 100,
					colorDark: 'black',
					colorLight: 'white',
					correctLevel: QRCode.CorrectLevel.H
			});
	</script>
</body>
</html>
