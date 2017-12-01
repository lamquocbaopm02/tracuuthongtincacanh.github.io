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
<?php
    if(isset($_GET["Id"])){
        $loai = $_GET["Id"];
        $query = "DELETE FROM thongtincacanh WHERE ID=$loai";
        $row_danhmuc1 = $conn->query($query);
        header('location:quanlithongtincacanh.php');
    }
?>