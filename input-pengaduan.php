<?php
	if (isset($_POST['tambah'])) {
		include ('function.php');
		$judul_laporan            =$_POST['judul_laporan'];
		$isi_laporan            =$_POST['isi_laporan'];
		$tgl_pengaduan          =$_POST['tgl_pengaduan'];
		$nik             		=$_POST['nik'];
		$status             	=$_POST['status'];
		$namaFile 				= $_FILES['foto']['name'];
		$namaSementara 		    = $_FILES['foto']['tmp_name'];
		$dirUpload 				= "terupload/";
		$terupload 				= move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		if ($terupload) {
		    echo "Upload berhasil!<br/>";
		    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
		} else {
		    echo "Upload Gagal!";
		}	
		$sql = "INSERT INTO laporan_pengaduan VALUES(NULL ,'$tgl_pengaduan', '$nik', '$judul_laporan', '$isi_laporan','$namaFile', '$status' )";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='index.php'</script>";
			// header("location:index.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		}else{ 
	   echo '<script>window.history.back()</script>';
		}
?>