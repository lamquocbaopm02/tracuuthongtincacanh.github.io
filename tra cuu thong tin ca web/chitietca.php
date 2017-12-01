<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Shoploop: About Us</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/about.css">
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
$danhmuc=$_GET['danhmuc'];
$id=$_GET['id'];

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
    
    $sqllist_chitiet1="select * from thongtincacanh where Loai=$danhmuc and ID=$id " ;
    $row_listchitiet1 = $conn->query( $sqllist_chitiet1);
	
	
	$domdoc = new DOMDocument('1.0','utf-8');
	$domdoc->formatOutput = TRUE;
	$domdoc->preserveWhiteSpace = FALSE;
	
	$thongtincacanh= $domdoc->createElement('thongtincacanh');
	$domdoc->appendChild($thongtincacanh);
	
	while($row = $row_listchitiet1->fetch_assoc()){
		$row_id = $row['ID'];
		$row_loai = $row['Loai'];
		$row_ten = $row['Ten'];
		$row_dong = $row['Dong'];
		$row_giaban = $row['GiaBan'];
		$row_kichthuoc = $row['KichThuoc'];
		$row_moitruongsong = $row['MoiTruongSong'];
		$row_tuoitho = $row['TuoiTho'];
		$row_thucan = $row['ThucAn'];
		$row_dacdiem = $row['DacDiem'];
		$row_hinhanh = $row['HinhAnh'];		
				
	$cacanh= $domdoc->createElement('CaCanh');
	$thongtincacanh->appendChild($cacanh);
	
	$id = $domdoc->createAttribute('ID');
	$id->appendChild($domdoc->createTextNode("$row_id"));
	$cacanh->appendChild($id);
	
	$loai = $domdoc->createElement('Loai');
	$loai->appendChild($domdoc->createTextNode("$row_loai"));
	$cacanh->appendChild($loai);
	
	$ten = $domdoc->createElement('Ten');
	$ten->appendChild($domdoc->createTextNode("$row_ten"));
	$cacanh->appendChild($ten);
	
	$dong = $domdoc->createElement('Dong');
	$dong->appendChild($domdoc->createTextNode("$row_dong"));
	$cacanh->appendChild($dong);
	
	$giaban = $domdoc->createElement('GiaBan');
	$giaban->appendChild($domdoc->createTextNode("$row_giaban"));
	$cacanh->appendChild($giaban);
	

	
	$kichthuoc = $domdoc->createElement('KichThuoc');
	$kichthuoc->appendChild($domdoc->createTextNode("$row_kichthuoc"));
	$cacanh->appendChild($kichthuoc);
	

	
	$moitruongsong = $domdoc->createElement('MoiTruongSong');
	$moitruongsong->appendChild($domdoc->createTextNode("$row_moitruongsong"));
	$cacanh->appendChild($moitruongsong);
	
	$tuoitho = $domdoc->createElement('TuoiTho');
	$tuoitho->appendChild($domdoc->createTextNode("$row_tuoitho"));
	$cacanh->appendChild($tuoitho);
	
	$thucan = $domdoc->createElement('ThucAn');
	$thucan->appendChild($domdoc->createTextNode("$row_thucan"));
	$cacanh->appendChild($thucan);
	
	$dacdiem = $domdoc->createElement('DacDiem');
	$dacdiem->appendChild($domdoc->createTextNode("$row_dacdiem"));
	$cacanh->appendChild($dacdiem);
	
	$hinhanh = $domdoc->createElement('HinhAnh');
	$hinhanh->appendChild($domdoc->createTextNode("$row_hinhanh"));
	$cacanh->appendChild($hinhanh);
	}
	$domdoc->save('thongtincacanh.xml');
	?>



	<!--start header-->
	<header><!--end topHeader-->


			<!--start header-->
	<header>

				</div><!--end topHeader-->


	<div id="middleHeader">
			<div class="container">
				<div class="sixteen columns">
					<div id="logo">
						<h1><a href="index.html">logo</a></h1>
					</div><!--end logo-->

                    

	</header>
	<!--end header-->






	<!-- strat the main content area -->
	
	<div class="container">
		<div class="sixteen columns">
			<div class="box_head">
				<h3>Thông Tin Loại Cá Bạn Cần Tìm</h3>
			</div><!--end box_head -->
</br></br>
			<div class="seven columns alpha">
           	<?php

			$domdoc->load('thongtincacanh.xml');
						foreach($domdoc->getElementsByTagName('CaCanh') as $cacanh){
							$loai = $cacanh->getElementsByTagName('Loai')->item(0)->nodeValue;
							$ten = $cacanh->getElementsByTagName('Ten')->item(0)->nodeValue;
					
							$giaban = $cacanh->getElementsByTagName('GiaBan')->item(0)->nodeValue;
							$kichthuoc = $cacanh->getElementsByTagName('KichThuoc')->item(0)->nodeValue;
							$moitruongsong = $cacanh->getElementsByTagName('MoiTruongSong')->item(0)->nodeValue;
							$tuoitho = $cacanh->getElementsByTagName('TuoiTho')->item(0)->nodeValue;
							$thucan = $cacanh->getElementsByTagName('ThucAn')->item(0)->nodeValue;
							$dacdiem = $cacanh->getElementsByTagName('DacDiem')->item(0)->nodeValue;
							$hinhanh = $cacanh->getElementsByTagName('HinhAnh')->item(0)->nodeValue;
		
		?>
				<div class="welcome_img">
					<img src="<?=$hinhanh?>">
				</div>
               
			</div><!--end four-->

			<div class="nine columns omega">
				<div class="welcome_text">
					<h2>Tên: <?php echo $ten?></h2>
					
                    <p>
						Giá Bán: <?php echo $giaban?>
					</p>
                    <p>
						Kích Thước: <?php echo $kichthuoc?>
					</p>
                    <p>
						Môi Trường Sống: <?php echo $moitruongsong?>
					</p>
                    <p>
						Tuổi Thọ: <?php echo $tuoitho?>
					</p>
                    <p>
						Thức Ăn: <?php echo $thucan?>
					</p><p>
						Đăc Điểm: <?php echo $dacdiem?>
					</p>
					<a class="gray_btn" href="index.php">Trở Về</a>
				</div>
			</div><!--end fourteen-->
    <?php
	}
	?>
		</div><!--end sixteen-->

		<div class="sixteen columns"><!--end tagLine-->
		</div><!--end sixteen-->


		<div class="eight columns"><!--end latest-->
		</div><!--end eight-->


		<div class="eight columns"><!--end testimonial-->

		</div><!--end eight-->


		<div class="sixteen columns"><!--end brands-->
		</div><!--end sixteen-->


	</div><!--end container-->
	<!-- end the main content area -->



	<!-- start the footer area--><!--end the footer area -->





	<!-- Sidebar Widget
	================================================== -->
	<div id="sideWidget"><a class="WidgetLink" href="#open">+</a>
	</div>
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