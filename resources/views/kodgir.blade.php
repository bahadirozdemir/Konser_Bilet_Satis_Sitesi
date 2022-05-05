<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Şifremi Unuttum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
  <link rel="icon" type="image/x-icon" href="assets/img/alpha_t_circle_icon_138951.ico">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<form action="{{route('aktif')}}" method="post">
					@csrf
					<h3 style="">Şifremi Unuttum</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Şifre Sıfırlama Kodunuz</label>
							<input name="kullanicikod" type="number" class="form-control" placeholder="" required>
						</div>
					</div>
					<button type="submit" data-text="Gönder">
						<input type="hidden" name="realkod" value={{session()->get('rastgele')}}>
						<input type="hidden" name="realadres" value={{session()->get('adres')}}>
						<span class="me" name="as" id="sa">Gönder</span>
					</button>
					<div class="form-wrapper">
						@if(session()->has('hatamesaj'))
           <label style="margin-left:15%;margin-top:10%;color:red;">{{ session()->get('hatamesaj')}}</label>
           </div>
            @endif
            @if(session()->has('message'))
           <label style="margin-left:15%;margin-top:10%;color:green;">{{ session()->get('message')}}</label>
          </div>
          @endif
					</div>
				</form>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
