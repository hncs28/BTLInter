<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title> Dang Nhap </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<h3 class="text-uppercase text-center my-5">Đăng nhập để truy cập</h3>
	<form action ="xuly.php" method= "post" >
		Username: <input type="text" name="username" class='form-control' required="">
		Password: <input type="password" name="password" class='form-control' required="">
		<input type="submit" class="btn btn-block btn-info">
	</form>
</div>
</body>
</html>
