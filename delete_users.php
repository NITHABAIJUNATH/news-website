<?php
 include('connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from users where id='$id'");
  if ($query) {
  	 echo "<script> alert('user deleted !')</script> ";
  	   echo "<script >window.location='http://127.0.0.1/news/dashboard.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>