<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "loginweb"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
   $uname = mysqli_real_escape_string($con,$_POST['uname']);
   $password = mysqli_real_escape_string($con,$_POST['psw']);

   if ($uname != "" && $password != ""){

      $sql_query = "select count(*) as cntUser from user where Username='".$uname."' and Password='".$password."'";
      $result = mysqli_query($con,$sql_query);
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
          $_SESSION['uname'] = $uname;
          header('Location: http://localhost/trangchu.php');
      }else{
          echo "Invalid username and password";
      }

   }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Trang Đăng Nhập</h2>
    <form action="login.php" method="post">
        <div class="container">
            <label for="uname"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="Nhập tên đăng nhập" name="uname" required>

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

            <button type="submit">Đăng nhập</button>
        </div>
    </form>
</body>
</html>