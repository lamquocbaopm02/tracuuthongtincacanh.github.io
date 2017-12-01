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
	<title>TRA CỨU THÔNG TIN CÁ</title>
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
<script language="javascript">
function confirmAction()
{return confirm ("Bạn có muốn xóa không??")
	}</script>
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
	
		



	<!-- strat the main content area -->
	
<div class="container">

  <div class="sixteen columns">
		
			<div class="box_head" align="center">
				<h1>QUẢN LÝ THÔNG TIN CÁ CẢNH</h1>
			</div><!--end box_head -->
           
		
            
        <form method="POST"  enctype="multipart/form-data">
        <table >
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
                <a class="btn btn-primary btn-large btn-block" href="index.php">Trang Chủ</a></br>
				<a class="btn btn-primary btn-large btn-block" href="themthongtincacanh.php">Thêm Mới</a>
			</div>
		</div>
	</div></th>
    		
        </form>
			<table class="cart_table">
				<thead>
					<tr>
						
						<th width="6%"><h4>Loại</h4></th>
						<th width="6%"><h4>Tên</h4></th>
						<th width="7%"><h4>Dòng</h4></th>
						<th width="6%"><h4>Gía Bán</h4></th>
                        <th width="9%"><h4>Kích Thước</h4></th>
                        <th width="9%"><h4>Môi Trường Sống</h4></th>
                        <th width="7%"><h4>Tuổi Thọ</h4></th>
                        <th width="7%"><h4>Thức Ăn</h4></th>
                        <th width="40%"><h4>Đặc Điểm</h4></th>
                        <th width="6%"><h4>Hình Ảnh</h4></th>
                        <th width="9%"><h4>Chức Năng</h4></th>                      
					</tr>
                    
				</thead>
                
               
                <?php 
    $sql_danhmuc="select * from thongtincacanh UTF8";
    $row_danhmuc = $conn->query($sql_danhmuc);
        while($row = $row_danhmuc->fetch_assoc()){
			$id=$row['ID'];
            $loai = $row['Loai'];
            $ten = $row['Ten'];
			$dong = $row['Dong'];
			$giaban = $row['GiaBan'];
			$kichthuoc = $row['KichThuoc'];
			$moitruongsong = $row['MoiTruongSong'];
			$tuoitho = $row['TuoiTho'];
			$thucan = $row['ThucAn'];
			$dacdiem = $row['DacDiem'];
			$hinhanh = $row['HinhAnh'];
            echo "<tr>";			
            echo "<td>$loai</td>";
            echo "<td>$ten</td>";
			echo "<td>$dong</td>";
			echo "<td>$giaban</td>";
			echo "<td>$kichthuoc</td>";
			echo "<td>$moitruongsong</td>";
			echo "<td>$tuoitho</td>";
			echo "<td>$thucan</td>";
			echo "<td>$dacdiem</td>";

			echo "<td><img src=$hinhanh width=110 height=110> </td>";
					
			
            echo "</td>";
           
			echo "<td><a href='xoathongtincacanh.php?Id=$id' title='BCDONLINE CONFIRM YES/NO' onclick='return confirmAction() '>Xóa  |</a>";
            echo "<a href='suathongtincacanh.php?Id=$id'>Sửa </a></td></tr>";
			
    }
	
?>

        

  </div><!--end sixteen-->

<?php
    if(isset($_POST['insert'])){
     
		
	$uploaddir = 'images/icons/';
   $uploadfile = $uploaddir . basename($_FILES['HinhAnh']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $uploadfile)) {
    	$urlImage="". $uploadfile;
	  	$loai= $_POST['Loai'];
	    $tenLoai= $_POST['Ten'];
		$dong= $_POST['Dong'];
		$giaban= $_POST['GiaBan'];
		$kichthuoc= $_POST['KichThuoc'];
		$moitruongsong= $_POST['MoiTruongSong'];
		$tuoitho= $_POST['TuoiTho'];
		$thucan= $_POST['ThucAn'];
		$dacdiem= $_POST['DacDiem'];
		$hinhanh=$_POST['HinhAnh'];
        $sql_danhmuc1 = "INSERT INTO thongtincacanh(Loai,Ten,Dong,GiaBan,KichThuoc,MoiTruongSong,TuoiTho,ThucAn,DacDiem,HinhAnh) VALUES('$loai','$tenLoai','$dong','$giaban','$kichthuoc','$moitruongsong','$tuoitho','$thucan','$dacdiem','$urlImage')";
        $row_danhmuc1 = $conn->query($sql_danhmuc1);
		 echo "
	   <script>
	   		alert('Thêm thành công!!');
			window.location.href='http://localhost:8000/shoploop/quanlithongtincacanh.php';
	   </script>
	   ";}

		
    }
?>        

		<!--end ten-->







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