<?php

// $host = "localhost";
// $user = "root";
// $pass = "";
// $name = "lpm";
$host = "us-cdbr-east-03.cleardb.com";
$user = "b6f6ed8f159d8e";
$pass = "df63285b";
$name = "heroku_0bfd57e4782b20c";


$conn = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal");
mysqli_select_db($conn, $name) or die('Database is not found!');



function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$row = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
    return $rows;
}

function registrasi($data) {
	global $conn;

	$nik = strtolower(stripslashes($data["nik"]));
	$nama = strtolower(stripslashes($data["nama"]));
	$username = strtolower(stripslashes($data["username"]));
	$telp = strtolower(stripslashes($data["telp"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $sql = "SELECT username FROM masyarakat WHERE username = '$username'";
    $result = $conn->query($sql);
    
      if ( mysqli_fetch_assoc($result) ) {
      	   echo "<script>
      	         alert('username sudah ada')
      	         </script>";
      	    return false;     
      }

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
		        alert('konfirmasi password tidak sesuai!')
		      </script>";
		return false;      
      }


      // enkripsi password
      $password = password_hash($password, PASSWORD_DEFAULT);

      // tambah user bari ke database
      $sql = "INSERT INTO masyarakat VALUES('$nik','$nama','$username', '$password','$telp' )";
		if (mysqli_query($conn, $sql)) {
			    
			} 

      return mysqli_affected_rows($conn);
      mysql_close($conn);
}

function registrasi_petugas($data) {
	global $conn;

	$nama_petugas = strtolower(stripslashes($data["nama_petugas"]));
	$telp = strtolower(stripslashes($data["telp"]));
	$level = strtolower(stripslashes($data["level"]));
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $sql = "SELECT username FROM petugas WHERE username = '$username'";
    $result = $conn->query($sql);
    
      if ( mysqli_fetch_assoc($result) ) {
      	   echo "<script>
      	         alert('username sudah ada')
      	         </script>";
      	    return false;     
      }

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
		        alert('konfirmasi password tidak sesuai!')
		      </script>";
		return false;      
      }


      // enkripsi password
      $password = password_hash($password, PASSWORD_DEFAULT);

      // tambah user bari ke database
      $sql = "INSERT INTO petugas VALUES(NULL,  '$nama_petugas', '$username', '$password', '$telp', '$level')";
		if (mysqli_query($conn, $sql)) {
			    
			} 

      return mysqli_affected_rows($conn);
      mysql_close($conn);
  }

?>