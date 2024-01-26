<?php
 include('connection.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from comment where id='$id'");
  if ($query) {
  	 echo "<script> alert('Comment deleted !')</script> ";
  	   echo "<script >window.location='http://127.0.0.1/news/comment.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>