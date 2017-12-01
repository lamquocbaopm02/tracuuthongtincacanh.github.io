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
	<title>Tra cứu thông tin cá</title>
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
		<!-- strat the main content area -->
	
<div class="container">

  <div class="sixteen columns">
			
			<div class="box_head" align="center">
				<h3>QUẢN LÝ LOẠI CÁ CẢNH</h3>
			</div><!--end box_head -->
            <div class="box_head">
				<h3>SỬA THÔNG TIN</h3>
			</div>


        
        <form method="POST">
         <table>
        <tr>CẬP NHẬT THÔNG TIN MỚI</tr>
         <tr>
           <td>Loại Mới</td> 
           <td><input type="text" name="loai" />
           </tr>
           <tr>
           <td>Tên Mới</td> 
           <td><input type="text" name="tenloai" />
           </tr>
          
          
            <td><input type="submit" name="update" value="CẬP NHẬT" /></td>
            
            </table>
        </form>
        

  

<?php
    if(isset($_POST['update'])){
        $tenloai = $_POST['tenloai'];
		$loai = $_POST['loai'];
        $id=$_GET["Id"];
        $query = "UPDATE loaica SET  TenLoai='$tenloai', Loai='$loai'  WHERE ID='$id' ";
        $row_danhmuc1 = $conn->query($query);
        header('location:quanliloaica.php');
    }
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