<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Şifremi Unuttum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body> 

		<div class="wrapper">
			<div class="inner">
				<form action="{{route('remember')}}" method="get">
					@csrf
					<h3 style="">Şifremi Unuttum</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">E-Mail Adresiniz</label>
							<input name="mailadres" type="email" class="form-control" placeholder="">
						</div>
					</div>
					<button data-text="Gönder">
						<span class="me" name="as" id="sa">Gönder</span>
					</button>
					<div class="form-wrapper">
						@if($errors->any())
						<label style="margin-left:12%;margin-top:10%;color:red;">{{$errors->first()}}</label>
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

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
