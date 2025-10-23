<?php 
include "header.php"
?>
 <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">User Profile</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">User Profile</a>
            </div>
        </div>
    </div>
<div class="container mt-3 mb-3 mx-3 my-3">
    <div class="row">
    <div class="col-lg-6 ">
    <img src="<?php echo $_SESSION['img'] ?>" class="img-thumbnail" alt="..." >
    </div>
    <div class="col-lg-6 mt-5 mb-5 ">
    <div class="card" >
    <?php 
                        require "connection.php";
                        // SELECT SELECT `user_id`, `user_name`, `email`, `user_password`, `role_FK`, `user_img`
                      
                            
                            ?>
  <div class="card-body">
    <h1>User Profile Details</h1>
    <h5 class="card-title">Name: <?php echo $_SESSION['name'] ?> </h5>
    <h5 class="card-title">Email: <?php echo $_SESSION['email'] ?> </h5>
    <h5 class="card-title">Password:  <?php echo $_SESSION['user_password'] ?></h5>


    
  </div>
  
</div>
    </div>
    </div>
</div>
<br>
<br><br><br><br>

<?php 
include "footer.php"
?>