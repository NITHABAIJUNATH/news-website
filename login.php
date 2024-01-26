<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
    <div class="container">
    <form action="login.php" method="post">
        <h3> LOGIN</h3>
  <div class="form-group">
    <label>username:</label>
    <input type="text" name="usname" class="form-control" placeholder="Enter username" id="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="password" name="pass" required>
  </div>
 <input type="submit" name="submit" class="btn btn-primary" value="login">
</form>
</div>


</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit']))
{
 $username=$_POST['usname'];
 $password=$_POST['pass'];
 $query=mysqli_query($conn,"select * from signup where username='$username' AND password='$password'");
 if($query){
    if(mysqli_num_rows($query)>0){
        $_SESSION['usname']=$username;
        header('location:admin.php ');
    }else{
        echo "<script> alert('invalid credentails,please try again')</script>";
    }
 }
}
?>
