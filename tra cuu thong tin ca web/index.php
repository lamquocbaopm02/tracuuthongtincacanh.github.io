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
	
	$sql_loai1="select * from thongtincacanh ";
	$row_loai1 = $conn->query($sql_loai1);
	
	$sql_danhmuc1="select * from loaica UTF8";
	$row_danhmuc1 = $conn->query($sql_danhmuc1);
	
	$sql_canoibat1="select * from canoibat UTF8";
	$row_canoibat1 = $conn->query($sql_canoibat1);
	
	
	$domdoc = new DOMDocument('1.0','utf-8');
	$domdoc->formatOutput = TRUE;
	$domdoc->preserveWhiteSpace = FALSE;
	
	$loaica= $domdoc->createElement('loaica');
	$domdoc->appendChild($loaica);
	
	while($row = $row_danhmuc1->fetch_assoc()){
		$row_id = $row['ID'];
		$row_loai = $row['Loai'];
		$row_tenloai = $row['TenLoai'];
		
		
		
	$loaicacanh= $domdoc->createElement('Loaicacanh');
	$loaica->appendChild($loaicacanh);
	
	$id = $domdoc->createAttribute('ID');
	$id->appendChild($domdoc->createTextNode("$row_id"));
	$loaicacanh->appendChild($id);
	
	$loai = $domdoc->createElement('Loai');
	$loai->appendChild($domdoc->createTextNode("$row_loai"));
	$loaicacanh->appendChild($loai);
	
	$tenloai = $domdoc->createElement('TenLoai');
	$tenloai->appendChild($domdoc->createTextNode("$row_tenloai"));	
	$loaicacanh->appendChild($tenloai);}
	
	$domdoc->save('loaicacanh.xml');
	
	


	$domdoc = new DOMDocument('1.0','utf-8');
	$domdoc->formatOutput = TRUE;
	$domdoc->preserveWhiteSpace = FALSE;
	
	$canoibat= $domdoc->createElement('canoibat');
	$domdoc->appendChild($canoibat);
	
	while($row = $row_canoibat1->fetch_assoc()){
		$row_id = $row['ID'];
		$row_loai = $row['Loai'];
		$row_hinh = $row['Hinh'];
		$row_ten = $row['Ten'];		
				
	$noibat= $domdoc->createElement('noibat');
	$canoibat->appendChild($noibat);
	
	$id = $domdoc->createAttribute('ID');
	$id->appendChild($domdoc->createTextNode("$row_id"));
	$noibat->appendChild($id);
	
	$loai = $domdoc->createElement('Loai');
	$loai->appendChild($domdoc->createTextNode("$row_loai"));
	$noibat->appendChild($loai);
	
	$hinh = $domdoc->createElement('Hinh');
	$hinh->appendChild($domdoc->createTextNode("$row_hinh"));
	$noibat->appendChild($hinh);
	
	$ten = $domdoc->createElement('Ten');
	$ten->appendChild($domdoc->createTextNode("$row_ten"));
	$noibat->appendChild($ten);
	}
	$domdoc->save('canoibat.xml');
	?>
	
	<!--start header-->
	<header>


	<div id="middleHeader">
			<div class="container">
				<div class="sixteen columns">
					<div id="logo">
						<h1><a href="index.html">logo</a></h1>
					</div><!--end logo-->
					
					
                        <label >
							<input type="text" id="searchf" name="searchtext" placeholder="Search..." value="" >
						</label>
						
					
						<input type="image" src="images/icons/tim.png" alt="SUBMIT" name="submit" id="btnSubmit"/>
                    <script>
                    $(document).ready(function() {
                     $('#btnSubmit').click(function(){
						 window.location.href = "timkiem1.php?ten="+$('#searchf').val();
						// alert($('#searchf').val());
						 });
						   
						  
                    });
                    </script>	
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

	$domdoc->load('loaicacanh.xml');
						foreach($domdoc->getElementsByTagName('Loaicacanh') as $loaicacanh){
		$loai = $loaicacanh->getElementsByTagName('Loai')->item(0)->nodeValue;
		$tenloai = $loaicacanh->getElementsByTagName('TenLoai')->item(0)->nodeValue;
		?>
						
		<li><a href="index1.php?danhmuc=<?= $loai ;?>"><?php echo $tenloai;?></a></li>	
                            
                        <?php
						}
						?>									
								</ul>
							</li>
                            <li><a class="labtops" href="login.php">Đăng Nhập</a></li>
                            
                                                                                                                         						
						</ul>
					</nav><!--end nav-->										
				</div><!--end main-->
			</div><!--end sixteen-->
		</div>
			

	</header>
	<!--end header-->

<div class="container">
		<div class="sixteen columns">
			
			<div id="slide_outer">
				<div class="mainslide">

					<div class="pagers center">
						<a class="prev slide_prev" href="#prev">Prev</a>
						<a class="nxt slide_nxt" href="#nxt">Next</a>
					</div>

					<ul class="cycle-slideshow clearfix" 
			        data-cycle-fx="scrollHorz"
			        data-cycle-timeout="2000"
			        data-cycle-slides="> li"
			        data-cycle-pause-on-hover="true"
			        data-cycle-prev="div.pagers a.slide_prev"
			        data-cycle-next="div.pagers a.slide_nxt"
			        >
                    
                    <?php
						while($row = $row_gioithieu->fetch_assoc())
						{
						?>
                    <li class="clearfix">
							<div class="slide_img">
								<img src="<?=$row['HinhAnh']?>">
							</div>
							<div class="flex-caption">
								<h5><?php echo $row['Ten']?><br><span><?php echo $row['Dong']?></span></h5>
								<p>
									<?php echo $row['GioiThieu']?>
								</p>
								<a href="index1.php?danhmuc=<?=$row['Loai']?>">Xem Thêm</a>
							</div>
						</li>
                               
              <?php
						}
						?>	
                    			
					</ul>
				</div>
				<div class="shadow_left"></div>
				<div class="shadow_right"></div>
			</div>

		</div>
	</div>


    <!-- strat the main content area -->
	
	<div class="container">

		
	  <div class="featured">
      
		<div class="box_head">
       
		  <h3>CÁC LOẠI CÁ ĐẸP</h3>
			</div><!--end box_head -->
		</br></br>

		 
			<ul class="product_show">
          <?php
	$domdoc->load('canoibat.xml');
		foreach($domdoc->getElementsByTagName('noibat') as $noibat){
		$loai = $noibat->getElementsByTagName('Loai')->item(0)->nodeValue;
		$hinh = $noibat->getElementsByTagName('Hinh')->item(0)->nodeValue;
		$ten = $noibat->getElementsByTagName('Ten')->item(0)->nodeValue;
		?>
						
					<li class="column">
					  <div class="img">
							<div class="hover_over"></div>
						  <a href="#">
							  <img src="<?php echo $hinh;?>">
						  </a>
					  </div>
                        <h6><a href="index1.php?danhmuc=<?=$loai;?>"><?php echo $ten;?></a></h6>
					</li> 
                    
              <?php
						}
						?>	    
                                       
			</ul>

		</div><!--end featured--><!--end latest-->
		


		<div class="sixteen columns clearfix">
			<div class="ten columns alpha"><!--end welcome-->
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
        })	;			
 </script>
<!-- End Document
================================================== -->
</body>
</html>