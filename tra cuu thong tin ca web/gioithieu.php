<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>B.AQUARIUM</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" type="text/css" href="css/ie8-and-down.css" />
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<?php
	$severname="localhost";
	$username="root";
	$password="";
	$dbname="cacanh";
	
	$conn = new mysqli($severname, $username, $password, $dbname);
	mysqli_set_charset($conn, 'UTF8');
	
	if ($conn->connect_error)
	{
		die("ket noi that bai".$conn->connect_error);
		}
	?>
	<?php
	$sql_gioithieu="select * from thongtinnoibat UTF8";
	$row_gioithieu = $conn->query($sql_gioithieu);
	
	$sql_loai="select * from thongtincacanh ";
	$row_loai = $conn->query($sql_loai);
	
	$sql_danhmuc="select * from loaica UTF8";
	$row_danhmuc = $conn->query($sql_danhmuc);
	
	$sql_canoibat="select * from canoibat UTF8";
	$row_canoibat = $conn->query($sql_canoibat);
	
	
	


	?>
	
	<!--start header-->
	<header>


	<div id="middleHeader">
			<div class="container">
				<div class="sixteen columns">
					<div id="logo">
						<h1><a href="index.html">logo</a></h1>
					</div><!--end logo-->
					
						
           <!--end form-->         

				</div><!--end sixteen-->
			</div><!--end container-->
		</div><!--end middleHeader-->
                    
<div class="container">
			<div class="sixteen columns">
				<div id="mainNav" class="clearfix">
					<nav>
						<ul>
                       		<li><a class="labtops" href="index.php">Trang Chủ</a></li>
                            <li><a class="labtops" href="gioithieu.php">Giới Thiệu</a></li>
                            
							<li>
								<a class="hasdropdown" href="#">Danh Mục</a>
								<ul class="submenu"> 
						<?php
						while($row = $row_danhmuc->fetch_assoc())
						{
						?>
							<li><a href="index1.php?danhmuc=<?=$row['Loai']?>"><?php echo $row['TenLoai']?></a></li>	
                        <?php
						}
						?>									
								</ul>
							</li>
                            <li><a class="labtops" href="dangnhap.php">Đăng Nhập</a></li>
                            <li>
                        <label >
							<input type="text" id="searchf" name="searchtext" placeholder="Search..." value="" margin-top="10px" >
						</label>
						
							
						<input type="image" src="images/icons/tim.png" alt="SUBMIT" name="submit" id="btnSubmit"/>
                    <script>
                    $(document).ready(function() {
                     $('#btnSubmit').click(function(){
						 window.location.href = "timkiem1.php?ten="+$('#searchf').val();
						// alert($('#searchf').val());
						 });
						   
						  
                    });
                    </script></li>	
                                                                                                                         						
						</ul>
					</nav><!--end nav-->										
				</div><!--end main-->
			</div><!--end sixteen-->
		</div>
			

	</header>
	<!--end header-->



  
		


		<div class="sixteen columns clearfix">
			<div class="ten columns alpha">
				<div class="welcome">
				  <div class="clearfix" align="center">
						<h2>Welcome To B.AQUARIUM</h2>
						<p>
							Chào mừng bạn đến với trang tra cứu thông tin cá cảnh</br>
                            Tại đây bạn có thể tra cứu thông tin loại cá mình cần một cách nhanh chống và dễ dàng</br>
                            Mọi đóng góp ý kến hay thắc mắc hãy liên hệ chúng tôi.</br>
                            SĐT:09999999999</br>
                            Email:ABC@gamil.com
						</p>
				    
					</div>
				</div><!--end welcome-->
			</div><!--end ten-->

			<div class="six columns omega"><!--end home_news-->
			</div><!--end six-->
	  </div><!--end sixteen-->


		<div class="sixteen columns"><!--end brands-->
		</div><!--end sixteen-->

	</div>
	
		<!-- container -->

	<!-- JS
	================================================== -->
 <link rel="stylesheet" href="js/dropKick/dropkick.css">
	<script src="js/dropKick/jquery.dropkick-1.0.0.js"></script>
	<!-- jQuery.nicescroll plug-in -->
	<script src="js/jquery.nicescroll.js"></script>
	<!-- jQuery.tweet plug-in -->
	<script src="js/jquery.tweet.js"></script>
	<!-- jQuery.cycle2 plug-in -->
	<script src="js/jquery.cycle2.min.js"></script>
	<script src="js/jquery.cycle2.tile.min.js"></script>
	<!-- jQuery.jcarousellite plug-in -->
	<script src="js/jcarousellite_1.0.1.min.js"></script>
	<!-- jQuery.fancybox plug-in -->
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css">
	<script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<!-- jQuery.etalage plug-in -->
	<script src="js/jquery.etalage.min.js"></script>
	<!-- jQuery.cookie plug-in -->
	<script src="js/jquery.cookie.js"></script>
	<!--my custom code-->	
	<script src="js/main.js"></script>
    <!-- jQuery.dropKick plug-in -->
	
 <script>
		$(document).ready(function(e) {
            $("#search_category").change(function(){
				alert("dksdk");
			})
        });					
 </script>
<!-- End Document
================================================== -->
</body>
</html>