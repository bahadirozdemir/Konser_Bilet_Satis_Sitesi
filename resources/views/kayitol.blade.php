<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TONIGHT | Kayıt Ol</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		  <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div class="wrapper">
			<div class="inner">
				<form action="{{route('verikontrol')}}" method="post">
					@csrf
					@if($errors->any())
					<ul style="margin-top:-2%;">
						@foreach($errors->all() as $hatalar)
						<li style="font-size:15px;color:red">{{$hatalar}}</li>
						@endforeach
					</ul>
					@endif
					<h3>Hesap oluşturun</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">İsim soyisim</label>
							<input name="adsoyad" type="text" class="form-control" placeholder="" >
						</div>
						<div class="form-wrapper">
							<label for="">Telefon numaranız</label>
							<input name="telno" type="phone" maxlength="10" class="form-control" placeholder="" >
						</div>
					</div>
          <div class="form-row">
            <div class="form-wrapper">
              <label for="">E-Mail Adresiniz</label>
              <input type="email" name="email" class="form-control" placeholder="" >
            </div>
						<div class="form-wrapper">
              <label for="">Şifre</label>
              <input type="password" name="sifre"class="form-control" placeholder="" >
            </div>
          </div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Doğum Tarihiniz</label>
							<span class="lnr lnr-calendar-full"></span>
							<input type="text" name="tarih" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp1" >
						</div>
            <div class="form-wrapper">
              <label for="">Cinsiyet</label>
              <select name="cinsiyet" id="" class="form-control" >
                <option value="Erkek">Erkek</option>
                <option value="Kadın">Kadın</option>
              </select>
              <i class="zmdi zmdi-chevron-down"></i>
            </div>
					</div>

					<div class="checkbox">
						<label>
							<input name="Kosullar" type="checkbox" > Kişisel Verilerin Korunması Hakkında Bilgilendirme metnini okudum ve içeriğini anladım.
							<span class="checkmark"></span>
						</label>
					</div>
					<button data-text="Kayıt Ol">
						<span>Kayıt ol</span>
					</button>
					<div class="form-wrapper">
						@if(session()->has('message'))
					 <label style="margin-left:15%;margin-top:10%;color:red;">{{ session()->get('message')}}</label>
					</div>
					@endif
					</div>
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
