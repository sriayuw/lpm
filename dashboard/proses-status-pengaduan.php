<?php


if (isset($_POST['simpan'])) {

	// cek koneksi ke database
	include ('../function.php');

   // jika tombol simpan di klik
	$id 		= $_POST['id'];
	$status         = $_POST['status'];


	// melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' diambil dari inputan hiiden id
	$sql = "UPDATE laporan_pengaduan SET id='$id', status='$status' WHERE id='$id'";

	if ($conn->query($sql) === TRUE)  {
		// echo 'Data berhasil di simpan! ';
		// echo '<a href="../halaman_admin.php">Kembali</a>';
		header("location:index.php");
	}else{
        
        echo 'Gagal menyimpan data! ';
        echo '<a href="../halaman_admin.php">Kembali</a>';
	}
}else{

	echo '<script>window.history.back()</script>';
}
?>