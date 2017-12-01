<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="scss/style1.css">
	<head>	
    	<title>B.SHOP</title>
        
    </head>
    <body>
    <?php
		if(isset($_POST['submit'])){
			$name = $_POST['username'];
			$pass = $_POST['password'];
			if($name=='admin' && $pass=='123')
			{
				echo "<script>
				alert('dung');
				window.location.href='http://localhost:8000/shoploop/quanli.php';
			</script> ";
			}
				else{
					echo "<script>
					alert('sai');
					window.location.href='http://localhost:8000/shoploop/dangnhap.php';
			</script>";
			}
			
		}
	?>
    	<form method="POST" action="dangnhap.php" >
        	<fieldset>
            	<legend>Đăng nhập</legend>
                <table align="center">
                	<tr>
                    	<td>Tên Đăng Nhập</td>
                        <td><input type="text" name="username" size="30"></td>
                    </tr>
                    <tr>
                    	<td>Mật Khẩu</td>
                        <td><input type="password" name="password" size="30"></td>
                    </tr>
                    <tr>
                    	<td colspan="1" align="center"><input type="submit" name="submit" value="Đăng Nhập"></td>
                        
                        
                    </tr>
                   
                    <tr>
                    	<td colspan="1" align="center"><input type="submit" name="trolai" value="Trở lại"></td>
                    </tr>
                    </div>
                </table>
            </fieldset>
        </form>
        <?php
		if(isset($_POST['trolai'])){
			echo "<script>
				window.location.href='http://localhost:8000/shoploop/index.php';
			</script> ";
		}
		?>
    </body>
</html>