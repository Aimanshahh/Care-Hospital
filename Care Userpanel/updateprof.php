<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Profile Update Form</h6>
                            <form class="forms-sample" action="#" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Profile Update Add</label>
                                    
                                    <?php
                        require "connection.php";
                 $userid = $_GET["updid"];
                 $qry = "SELECT * FROM `role` WHERE role_id  = $userid";
                 $result = mysqli_query($conn,$qry);
                 while($row = mysqli_fetch_array($result)){
                       ?>
                        <input type="text" class="form-control" id="exampleInputName1" name ="rolename" value="<?php echo $row["role_name"]; ?>">
                      </div>
                      <?php
                 }
                      ?><br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>
                    <?php 
include("connection.php");
if (isset($_POST["sub"])) {
    $rolename = $_POST["rolename"];
    $qry = "UPDATE `role` SET `role_name`='$rolename' WHERE role_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='roleshow.php';
</script>
"; 
}

?>


<?php
include "footer.php";
?>