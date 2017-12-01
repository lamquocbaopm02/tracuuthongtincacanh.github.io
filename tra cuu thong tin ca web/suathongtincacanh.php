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
	<title>Shoploop: Shopping Cart</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->

	<link rel="stylesheet" href="css/cart.css">
	<link rel="stylesheet" href="css1/style1.css">

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




	<div class="container">
		<div class="sixteen columns"><!--end pageName-->

		</div>
	</div><!-- container -->



	<!-- strat the main content area -->
	
<div class="container">

  <div class="sixteen columns">
			
			<div class="box_head" align="center">
				<h3>QUẢN LÝ THÔNG TIN CÁ CẢNH</h3>
			</div><!--end box_head -->
            <div class="box_head">
				<h3>CẬP NHẬT THÔNG TIN</h3>
			</div><!--end box_head -->
</table>
        <form method="POST"  enctype="multipart/form-data">
        <table>
        <th><div class="login">
		<div class="login-screen">
			

			<div class="login-form">
				<div class="control-group">
				  <label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				  <label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<a class="btn btn-primary btn-large btn-block" href="quanliloaica.php">Loại Cá</a> </br>
                <a class="btn btn-primary btn-large btn-block" href="quanlithongtincacanh.php">Thông Tin Cá</a> </br>
                <a class="btn btn-primary btn-large btn-block" href="index.php">Trang Chủ</a>
				
			</div>
		</div>
	</div></th>
    		
        
            <tr>
                <td>Loại</td> 
                <td><input type="text" name="Loai" />
            <tr/>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="Ten" />
            <tr/>
            <tr>
                <td>Dòng</td>
                <td><input type="text" name="Dong" />
            <tr/>
            <tr>
                <td>Giá Bán</td>
                <td><input type="text" name="GiaBan" />
            <tr/>
            <tr>
                <td>Kích Thước</td>
                <td><input type="text" name="KichThuoc" />
            <tr/>
            <tr>
                <td>Môi Trường Sống</td>
                <td><input type="text" name="MoiTruongSong" />
            <tr/>
               <tr>
                <td>Tuổi Thọ</td>
                <td><input type="text" name="TuoiTho" />
            <tr/>
            <tr>
                <td>Thức Ăn</td>
                <td><input type="text" name="ThucAn" />
            <tr/>
            <tr>
                <td>Đặc Điểm</td>
                <td><input type="text" name="DacDiem" /></td>
            <tr/>
                <td>Hình</td>
                 <td><input type="file" name="HinhAnh" id="fileToUpload">   				
            </tr>
            <tr>
                <td colspan="1">
                    <input type="submit" value="Cập Nhật" name="update" />

                </td>    
            
        </table>

	
        

  </div><!--end sixteen-->

<?php
    if(isset($_POST['update'])){
		$uploaddir = 'images/icons/';
   $uploadfile = $uploaddir . basename($_FILES['HinhAnh']['name']);
        echo '<pre>';
if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $uploadfile)) {
    	$urlImage="". $uploadfile;
		$id=$_GET["Id"];
	  	$loai= $_POST['Loai'];
	    $ten= $_POST['Ten'];
		$dong= $_POST['Dong'];
		$giaban= $_POST['GiaBan'];
		$kichthuoc= $_POST['KichThuoc'];
		$moitruongsong= $_POST['MoiTruongSong'];
		$tuoitho= $_POST['TuoiTho'];
		$thucan= $_POST['ThucAn'];
		$dacdiem= $_POST['DacDiem'];
		$hinhanh=$_POST['HinhAnh'];
        $query = "UPDATE thongtincacanh SET Loai='$loai',Ten='$ten',Dong='$dong',GiaBan='$giaban',KichThuoc='$kichthuoc',MoiTruongSong='$moitruongsong',TuoiTho='$tuoitho',ThucAn='$thucan',DacDiem='$dacdiem',HinhAnh='$urlImage' WHERE ID='$id' ";
        $row_danhmuc1 = $conn->query($query);
        echo "
	   <script>
	   		alert('Cập nhật thành công!!');
			window.location.href='http://localhost:8000/shoploop/quanlithongtincacanh.php';
	   </script>
	   ";
    }}
?>         

		<div class="ten columns"><!--end cart_tabs-->
		</div><!--end ten-->



		<div class="six columns"></div><!--end six -->


	</div><!--end container-->
	<!-- end the main content area -->



	<!-- start the footer area--><!--end the footer area -->





	<!-- Sidebar Widget
	================================================== -->
	
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