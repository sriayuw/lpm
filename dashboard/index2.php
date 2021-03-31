<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pengaduan Masyarakat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      th {
        text-align: center;
      }
      td {
        text-align: center;
      }
    </style>
</head>
<body>
  <?php 
    session_start();
    $username   =$_SESSION['username'];
    if($_SESSION['username'] == ""){
      header("location:../login-petugas.php");
    }
  ?>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3a47a6;">
    <a class="navbar-brand" href="#" style="color: white;">Laporan Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 940px;">
      <div class="navbar-nav">
      <a class="nav-item nav-link" href="../logout.php" style="color: white;">Logout</a>
      </div>
    </div>
  </nav>
  <br>
  <br>

  <center>
      <table class="table table-hover" style="width: 1100px;">
    <tr bgcolor="#3a47a6">
      <th>ID</th>
      <th>Tanggal Pengaduan</th>
      <th>Isi Laporan</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>

    <?php
    include ('../function.php');


    $sql = "SELECT * FROM laporan_pengaduan ORDER BY tanggal_pengaduan DESC";
    $result = $conn->query($sql);

    // cek apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if ($result->num_rows < 0) { // artinya jika data hasil query di atas kosong
      // jika data kosong, maka akan menampilkan kosong
      echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
    } else { // jika data di database ada
      // jika data tidak kosong makan akan menampilkan perulangan while
      $no = 1;
      while($row = $result->fetch_assoc()) {
        
        // menampilkan row dengan data di database
        echo "<tr>";
        echo "<td>".$row['id']."</td>"; 
        echo "<td>".$row['tgl_pengaduan']."</td>"; 
        echo "<td>".$row['isi_laporan']."</td>";
        echo "<td>".$row['status']."</td>";
        echo '<td>
        <p>
          <a href="lihatPengaduan.php?id_pengaduan='.$row['id'].'">
            <button class="btn btn-success">Lihat
            </button>
          </a>
         </p></td>';
        echo "</tr>";
        $no++;
      }

    }
    ?>
  </table></center>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>