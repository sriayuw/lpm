<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laporan Pengaduan Masyarakat.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
  <title></title>
</head>
<body>
<?php
  require ("../function.php"); 
  $id = $_GET['id'];
  $sql = "SELECT * FROM laporan_pengaduan WHERE id ='$id'";
  $result = $conn->query($sql);
  if ($result->num_rows < 0)  {
    echo '<script>window.history.back()</script>';
  }else{
    $data = $result->fetch_assoc();
    $nik = $data['nik'];
  }
  $sql = "SELECT * FROM masyarakat WHERE nik='$nik'";
  $result = $conn->query($sql);
  if ($result->num_rows < 0)  {
    echo '<script>window.history.back()</script>';
    }else{
    $datamasy = $result->fetch_assoc();
    $username = $datamasy['username'];
   }
?>
<div class="container" >
   <center>
    <h2>Laporan Pengaduan Masyarakat</h2>
    <p>Jl Batujajar no 33 Desa Galanggang Kab Bandung Barat</p>
  </center>
  <hr style="color: black;">
  <br>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <h4>  
      ID Pengaduan&nbsp;&nbsp;&nbsp;&nbsp;:  <?php echo $data['id']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tanggal Laporan: <?php echo $data['tanggal_pengaduan']; ?>  <br>
      Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <b>Laporan Pengaduan Masyarakat</b> <br>
      Pelapor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <?php echo $username; echo "("; echo $nik; echo")"; ?>
      </h4>
      <h4>  
        <br>
       <!-- Tanggal Laporan: <?php echo $data['tanggal_pengaduan']; ?> <br> -->
      </h4>
    </div>
  </div>
      <h4>
        Judul Laporan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $data['judul_laporan']; ?> <br>
      </h4> 
  <br>
    <center>
       <?php echo "<img src='../terupload/$data[foto]' width='400' height='300' />";?> <br>
    </center>
    <div>
       <p>
         Dengan Hormat, 
       <?php echo $data['isi_laporan']; ?>
       </p>
    </div>
</div>
</div>
<script>
window.print();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>