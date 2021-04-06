<?php 
// $host = "localhost";
// $user = "root";
// $pass = "";
// $name = "lpm";
$host = "sql110.epizy.com";
$user = "epiz_28324066";
$pass = "tL8CrKvjhH02xI";
$name = "epiz_28324066_laporanpengaduanmasyarakat";

$koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");
$conn = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal");
mysqli_select_db($conn, $name) or die('Database is not found!');
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 

?>