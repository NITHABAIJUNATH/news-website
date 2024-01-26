<?php
session_start();
if ( $_SESSION['usname']==true) {
  
}else
header('location:http://localhost/news/dashboard.php.');
$page='home';
 include('header.php');

  ?>


    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>username</th>
         <th>email</th>
         <th>Delete</th>
       </tr>
        <?php
        include('connection.php');
        $query=mysqli_query($conn,"select * from users");
        while($row=mysqli_fetch_array($query)){

        ?>
        <tr>
          <td><?php echo $row['id'];?></td>
           <td><?php echo $row['username'];?></td>
           <td><?php echo $row['email'];?></td>
            
            <td> <a href="delete_users.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" >delete</a></td>
        </tr>
       <?php } ?>  
    </table>

  </div>

  <?php
 include('footer.php')

  ?>