<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="documents/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="documents/css/util.css">
	<link rel="stylesheet" type="text/css" href="documents/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('store')}}">
                @csrf
					<span class="login100-form-title bg-info">
						Formulaire de connection
					</span>
					<div class="wrap-login60">



						</div>
						<label for="lastName" class="text2"> Login:</label>
						<div class="wrap-input100 validate-input m-b-16" data-validate="Ce champ doit être rempli">
							<input class="input100" type="text" name="login" placeholder="Votre login">
							<span class="focus-input100"></span>
						</div>

						<label for="firstName" class="text2"> mot de passe :</label>
						<div class="wrap-input100 validate-input m-b-16" data-validate="Ce champ doit être rempli">
							<input class="input100" type="password" name="password" placeholder="Votre mot de passe">
							<span class="focus-input100"></span>
						</div>



					<div class="container-login100-form-btn">

							<input class="login100-form-btn bg-info" type="submit" value="Se connecter"/>


					</div>

					<div class="flex-col-c p-t-170 p-b-40">

					</div>
				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="documents/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="documents/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="documents/vendor/bootstrap/js/popper.js"></script>
	<script src="documents/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="documents/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="documents/vendor/daterangepicker/moment.min.js"></script>
	<script src="documents/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="documents/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="documents/js/main.js"></script>
	<script src="jquery1.1.min.js"></script>
		<script src="form.js"></script>
</body>
</html>
