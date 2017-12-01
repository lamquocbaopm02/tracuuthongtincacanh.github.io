<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Shoploop: eCommerce Website</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/home2.css">
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

</head>
<body>
<?php

	$ten=$_GET['ten'];
	
	
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
	

	

	
	$sql_danhmuc="select * from loaica UTF8";
	$row_danhmuc = $conn->query($sql_danhmuc);
	
	
	
	
	
	$sql_loai="select * from thongtincacanh UTF8 where Ten LIKE '%$ten%'";
	$row_loai = $conn->query($sql_loai);
?>
	
<header>
	<div id="middleHeader">
			<div class="container">
				<div class="sixteen columns">
					<div id="logo">
						<h1><a href="index.html">logo</a></h1>
					</div><!--end logo-->

					
                    
         
                    
<div class="container">
			
			

	</header>
	<!--end header-->


	
	<div class="container">

		
		<div class="featured">
			<div class="box_head">
				<h3>Thông Tin Bạn Cần Tìm</h3> 
			</div><!--end box_head -->
		</br></br>

			<div class="cycle-slideshow" 
	        data-cycle-fx="scrollHorz"
	        data-cycle-timeout=0
	        data-cycle-slides="> ul"
	        data-cycle-prev="div.pagers a.featuredPrev"
	        data-cycle-next="div.pagers a.featuredNxt"
	        >
				<ul class="product_show">
                <?php
				$count=0;
						while($row = $row_loai->fetch_assoc())
						{$count++;
						?>
					<li class="column">
						<div class="img">						
							<a href="chitietca.php?danhmuc=<?=$row['Loai']?>&id=<?=$row['ID']?>">
								<img src="<?=$row['HinhAnh']?>">
							</a>
						</div>
						<h6><a href="#"><?php echo $row['Dong']?></a></h6>
						<h5><a href="chitietca.php?danhmuc=<?=$row['Loai']?>&id=<?=$row['ID']?>">Tìm hiểu thêm</a></h5>
					</li>
                    <?php
	}
	if($count==0){
          echo "
            <script>
            
              alert('Không có loại cá bạn cần tìm!');
              window.location.href = 'http://localhost:8000/shoploop/index.php';
            </script>
          
          ";
       }
	?>

				</ul>
	<div id="sideWidget"></div>
	<!-- End Sidebar Widget-->




	<!-- JS
	================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!-- jQuery.dropKick plug-in -->
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
	

<!-- End Document
================================================== -->
</body>
</html>