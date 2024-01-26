<?php
session_start();
error_reporting(0);
if( $_SESSION['usname']==true){
}
else{
    header('location:login.php');
    $page='home';}
include('header.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <body>
   
   
    
</body>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
        </main>
      </div>
    </div>

    <?php
    include('footer.php');
    ?>
