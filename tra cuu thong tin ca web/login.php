<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <?php
		if(isset($_POST['submit'])){
			$name = $_POST['username'];
			$pass = $_POST['password'];
			if($name=='admin' && $pass=='123')
			{
				echo "<script>
				alert('Đăng nhập thành công!!');
				window.location.href='http://localhost:8000/shoploop/quanli.php';
			</script> ";
			}
				else{
					echo "<script>
					alert('Sai thông tin đăng nhập');
					window.location.href='http://localhost:8000/shoploop/dangnhap.php';
			</script>";
			}
			
		}
	?>
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1> Login Form</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
  
    <h2>Login to your account</h2>
    <form method="POST" action="login.php">
      <input type="text"  name="username"/>
      <input type="password" name="password"/>
      <td colspan="1" align="center"><input type="submit" name="submit" value="Đăng Nhập"></td>
    </form>
  </div>
 

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script  src="../../../Users/bao/Desktop/js/index.js"></script>

</body>
</html>
