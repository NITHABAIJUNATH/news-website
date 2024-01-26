<?php
 include('connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from category where id='$id'");
  if ($query) {
  	 echo "<script> alert('category deleted !')</script> ";
  	   echo "<script >window.location='http://127.0.0.1/news/category.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>