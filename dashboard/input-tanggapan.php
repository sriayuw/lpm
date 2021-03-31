<?php
	if (isset($_POST['tambah'])) {
		include ('../function.php');
		$id_pengaduan           =$_POST['id_pengaduan'];
		$tgl_tanggapan          =$_POST['tgl_tanggapan'];
		$tanggapan             	=$_POST['tanggapan'];
		$id_petugas             =$_POST['id_petugas'];

		$sql = "INSERT INTO tanggapan VALUES(NOT NULL , '$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas' )";

		if (mysqli_query($conn, $sql)) {
			header("location:index.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		}else{ 
	   echo '<script>window.history.back()</script>';
		}
?>