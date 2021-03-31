<!--Author: Template Stock
Author URL: http://templatestock.co
-->
<!DOCTYPE html>
<html>
<head>
<title>Laporan Pengaduan Masyarakat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
	 <?php 
		session_start();
		if($_SESSION['login'] == false ){
			header("location:auth/login-masyarakat.php");
		}
 ?>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<!-- <a href="index.html"><img src="images/logo.png" alt=""/></a> -->
				<ul>
					<nav class="cl-effect-5">
						<li><a href="#">Laporan Pengaduan Masyarakat</span></a></li>
					</nav>
				</ul>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a class="active" href="/lpm"><span data-hover="Home">home</span></a></li>
				<li><a class="" href="#laporkan">Laporkan</li>
				<li><a href="#layanan">Layanan</a></li>
				<li><a href="#kontak">Kontak</span></a></li>
				<li><a href="laporan-saya.php">laporan saya</span></a></li>
				<li><a href="auth/logout-masyarakat.php">logout</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>Laporan Pengaduan Masyarakat</h1> 
				   		 		<h2>Laporakan Segala Permasalahan</h2>
				   		 		</div>
				   		 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
				   	      <div class="banner_center">
				   		 		<h1>Privasi Anda Aman</h1> 
				   		 		</div>
				   		  </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  	<div class="banner-wrap">
				   	       <div class="banner_center">
				   		 		<h1>Anda Akan Dianggap Sebagai Anonim saat Melaporkan</h1> 
				   		 		</div>
				   		 </div>
					 </article>
				 </div>
				
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
	<div class="content">
		<div class="about-section" id="about" id="about">
	<div class="container">
		<!-- <div class="about-header">
			<h3>Ceritakan Laporan Anda</h3>
			<div class="about-imag">
			<img src="images/pic-9.jpg" alt=""/>
			</div>
			<div class="about-text">
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p> 
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. . </p>
			</div>
			<div class="clearfix"></div>
			</div> -->
			<div class="about-sectiongrids">
				<!-- <div class="col-md-6 about-leftgrid">
					<div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Graphic Design</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>
	                      <div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Ui/Ux</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>
	                      <div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Logo Design</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>
	                      <div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4>Html/Css</h4>
						</div>
						<div class="percentage">
							<p>75%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			              	<div style="width:75%"> </div>
	                      </div>
	                      </div>

	</div -->
	<form action="input-pengaduan.php" method="post" enctype="multipart/form-data" id="laporkan" >
		<?php 
		include ('function.php');
			$username   =$_SESSION['username'];
			$sql = "SELECT * FROM masyarakat WHERE username='$username'";
			$result = $conn->query($sql);
			if ($result->num_rows < 0) {
				echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
			} else { 
				while($row = $result->fetch_assoc()) {
					$nik = $row['nik'];
				}
			}
		?>
	  <div class="form-group">
		<input type="text" name="nik"value="<?php echo $nik ?>" placeholder="Masukan nik anda" required="" hidden="">
      </div>
      <div class="form-group">
		<label>Unggah Gambar</label>
		<input class="form-control" type="file" name="foto" />
      </div>
      <div class="form-group">
		<input type="text" name="status" value="Diterima" hidden="">
      </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="exampleInputEmail1" name="judul_laporan" placeholder="Isi Judul Laporan Anda">
	  </div>
	  <div class="form-group">
	    <input type="date" name="tgl_pengaduan" class="form-control" id="exampleInputPassword1" placeholder="Pilih Tanggal Kejadian">
	  </div>
	  <div class="form-group">
	  	<textarea class="ckeditor form-control " id="ckedtor" name="isi_laporan"></textarea>
	  </div>
	  <center>
	  		<input class="btn btn-primary" type="submit" name="tambah" value="Kirim	">
	  </center>
	</form>
		<div class="clearfix"></div>
	</div>
	<div class="arrow1">
	<a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
					</div>
	</div>
	</div>
	<!-- about-section-ends -->
	<!-- <div class="works-section" id="work" id="work">
	   <div class="works-header">
			<h3>works</h3>
				<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
		</div>
		<div class="portfolio-section-bottom-row" id="portfolio">
			<div class="container">
				
						<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<link rel="stylesheet" href="css/swipebox.css">
							<script src="js/jquery.swipebox.min.js"></script> 
								<script type="text/javascript">
									jQuery(function($) {
										$(".swipebox").swipebox();
									});
								</script>
							<!-- Portfolio Ends Here -->
						<!-- <div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Branding</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Print</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Web design</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Photography</span></li>
									  <div class="clearfix"></div>
								  </ul>	
								<div id="portfoliolist">
									<div class="resp-tabs-container">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-3.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-4.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-5.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-6.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-7.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-8.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="clearfix"></div>	
											</div>
																				 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="tab_img">
												<div class="col-md-3 img-top grid_box">
														<a href="images/pic-5.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-5.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-6.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-6.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-7.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-7.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-8.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-8.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
													<div class="clearfix"></div>	
											</div>	 	        					 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-3.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-4.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>		        					 
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-2.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>	
										</div>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
											<div class="tab_img">
													<div class="col-md-3 img-top grid_box">
														<a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
															  <img src="images/pic-1.jpg" class="img-responsive" alt="">
															  <span class="zoom-icon"></span> 
														</a>
													</div>
													
														<div class="clearfix"></div>
											</div>	
										</div>										
									</div>	
								</div>
							</div>
						</div>				
 
				<div class="arrow">
					<a href="#services" class="scroll"><img src="images/arrow.png" alt=""/></a>
				</div>
			</div>
		</div> -->
	<!-- </div> --> 



	<!-- portfolio-section-ends -->
	<div class="services-section" id="layanan">
			<div class="container"> 
			<div class="services-header">
				<h3>services</h3>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
			</div>
			<div class="services-sectiongrids">
				<div class="col-md-4 services-grid">
					<img src="images/img2.png" alt=""/>
					<h4>Laporkan</h4>
					<p>Laporkan Kejadian Masalah yang terjadi.</p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="images/img1.png" alt=""/>
					<h4>Tanggap</h4>
					<p>Kami akan selalu menanggapi setiap laporan anda.</p>
				</div>
				<div class="col-md-4 services-grid">
					<img src="images/img3.png" alt=""/>
					<h4>Proses</h4>
					<p>Setiap Laporan yang Diterima akan kami Proses hingga masalah selesai dan laporan terselesaikan .</p>
				</div>
				<div class="clearfix"></div>
				<div class="arrow1">
					<a href="#contact" class="scroll"><img src="images/arrow1.png" alt=""/></a>
					</div>
		</div>
		</div>
		</div>
		<!-- services-section-ends -->
	</div>
	<div class="footer-section" id="kontak">
			<div class="container"> 
			<div class="contact-header">
				<h3> Kontak</h3>
					<p>Laporan semua kejadian masalah yang terjadi semua data pelapor aman data anda kami rahasiakan </p>
			</div>
			<div class="social-icon">
				<a href="#"><i class="icon1"></i></a>
				<a href="#"><i class="icon2"></i></a>
				<a href="#"><i class="icon3"></i></a>
				<a href="#"><i class="icon4"></i></a>
				<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>
			</div>
			<div class="contact">
			</div>
			<div class="footer-bottom">

					<p>&copy; 2015 Onepage . All rights  Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a></p>

					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>