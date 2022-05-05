<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Giriş Yap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		  <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
	  	<div class="wrapper">
			@if($errors->any())
			<div class="alert" id="alert">
			<script>
		   <?php
			  include 'js/alert.js';?>
		  </script>
	    <strong id="yazi1" class="yazi1">Giriş Başarısız </strong>&nbsp;<text id="yazi2" class="yazi2">{{$errors->first()}}</text>
			@endif
			</div>
			<div class="inner">
				<form action="{{route('giriskontrol')}}" method="post">
					@csrf
					<h3 style="">Giriş Yap</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">E-Mail Adresiniz</label>
							<input name="mailadres" type="email" class="form-control" placeholder="">
						</div>
						<div class="form-wrapper">
							<label for="">Şifreniz</label>
							<input name="pwd" type="password" minlength="2" class="form-control" placeholder="">
						</div>
					</div>
					<div>
					<a href="{{route('sifremiunuttum')}}" style="color:gray;float:right;margin-top:-3%;font-size:13px;font-weight:bold;">Şifrenizi mi Unuttunuz?</a>
					</div>
					<button data-text="Giriş Yap">
						<span>Giriş Yap</span>
					</button>

				<!--	<div class="form-wrapper">
						@if($errors->any())
						<label style="margin-left:20%;margin-top:10%;color:red;">{{$errors->first()}}</label>
						@endif
					</div>
-->
				</form>
			</div>
		</div>


		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
