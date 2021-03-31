<?php
session_start();

if ( isset($_SESSION["login"]) ) {
	header("Location: ../index.php");
	exit;
}

require ("../function.php");

if (isset($_POST['login'])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM masyarakat WHERE username = '$username'";
    $result = $conn->query($sql);

    // cek username
    if (mysqli_num_rows($result)  == 1 ) {
    	
    	// cek password
    	$row = mysqli_fetch_assoc($result);
    	if(password_verify($password, $row["password"]) ) {
    		$_SESSION['username'] = $username;
    		$_SESSION['nik'] = $nik;
    		$_SESSION["login"] = true;
    		header("Location: ../index.php");
    		exit;
    	}
    }

    $error = true;

}

?>
<!DOCTYPE html>
<html>
<head>

     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">


	<title>Halaman Login</title>
</head>
<body>
	


<?php if (isset($error) ) : ?> 
	<script>
      alert('username atau password salah')
    </script>
<?php endif; ?>
<?php if (isset($berhasil) ) : ?>
echo "<script>
       alert('user baru berhasil ditambahkan!')
     </script>" ;

<?php endif; ?>		      

<!-- <div class="card">
  <i class="fas fa-user-circle"></i>
  <form action="" method="post">

	<ul>
		<li>
			<label for="username">Username</label>
			<input class="input" type="text" name="username" id="username" size="25">
			<label for="password">Password</label>
			<input class="input" type="password" name="password" id="password" size="25">
		</li>
		<li class="login">
			<button class="btn btn-primary" type="submit" name="login" size="25">Login</button>
		</li>
		<li>
			<a class="buatakun" href="registrasi.php">Buat akun</a>
		</li>
	</ul>
	
</form>
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
						<input class="input100" type="text" name="username" id="username" size="25" placeholder="Username" >
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" size="25" placeholder="Password" >
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login" >
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="registrasi-masyarakat.php">
							Daftar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>