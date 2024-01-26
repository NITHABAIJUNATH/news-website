<?php
session_start();
if ($_SESSION['usname']==true){

}else
    header('location:login.php');
    $page='category';
include('header.php');
?>
<div style="width: 70%; margin-left: 25%; margin-top: 10%">

<form action="addcategory.php" method="post" name="categoryform" onsubmit = "return  validateform() ">
    <h1>ADD CATEGORIES</h1>
<hr>
  <div class="form-group">
    <label for="text">category:</label>
    <input type="text" name="category" class="form-control" id="email" >
  </div>
  <div class="form-group">
  <label for="comment">description:</label>
  <textarea class="form-control" placeholder="Enter Category Description" rows="5" name="des" id="comment"></textarea>
</div>
  <input type="submit" name="submit" class="btn btn-primary" value="add category">
</form>
<script>
    function validateform()
    {
var x = document.forms['categoryform']['category'].value;
if (x==""){
    alert('category must be filled out');
    return false;
}
    }
    </script>
</div>
<?php
include('footer.php')
?>
<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $category_name=$_POST['category'];
    $des=$_POST['des'];

    $cheak = mysqli_query($conn,"select * from category where category='$category_name' ");

	  if (mysqli_num_rows($cheak)>0) {
	  	 echo "<script> alert('Category Name Already Be taken !!')</script>";
	  exit();
   }
    $query=mysqli_query($conn,"insert into category(category,des) values('$category_name','$des')");
    if($query){
        echo "<script> alert('category add successfully'</script>";
    }else {

    
    echo "<script> alert('please try again'</script>";
    }
}
?>