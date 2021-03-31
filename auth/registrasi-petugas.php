<?php

require ("../function.php");

if ( isset($_POST["register"])) {
	
	if (registrasi_petugas($_POST) > 0 ) {
		echo "<script>
		        alert('Data berhasil ditambahkan!, silahkan login')
		      </script>" ;
	} else {

		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<!-- <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nik" id="nik" placeholder="nik">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-fax" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nama" id="nama" placeholder="nama">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" id="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password Confirmation is required">
						<input class="input100" type="password" name="password2" id="password2" placeholder="Password Confirmation">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="telp" id="telp" placeholder="telp">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="register">
							Regist
						</button>
					</div>
					</form>
					<div class="text-center p-t-136">
						<a class="txt2" href="login-masyarakat2.php">
							Have an Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
			</div>
		</div>
	</div> -->
	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post" >
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama_petugas" id="nama_petugas" size="25" placeholder="Nama Petugas" >
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" id="username" size="25" placeholder="Username" >
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="telp" id="telp" size="25" placeholder="Telp" >
					</div>

					<!-- <div class="wrap-input100 validate-input">
						<select name="cars" id="cars">
						  <option value="volvo">Volvo</option>
						  <option value="saab">Saab</option>
						  <option value="mercedes">Mercedes</option>
						  <option value="audi">Audi</option>
						</select>
					</div> -->

					<div class="wrap-input100 validate-input">
						<input type="radio" id="admin" name="level" value="admin">
						 <label  for="admin">Admin</label><br>
						 <input type="radio" id="petugas" name="level" value="petugas">
						 <label for="petugas">Petugas</label><br>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" size="25" placeholder="Password" >
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password2" id="password2" size="25" placeholder="Konfirmasi Password" >
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="register" >
								Daftar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Sudah Punya Akun?
						</span>

						<a class="txt2" href="login-petugas.php">
							Masuk
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>