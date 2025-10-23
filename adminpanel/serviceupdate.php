<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Service Add </h6>
                            <form class="forms-sample" action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Service</label>
                                    <?php
                        require "connection.php";
                 $userid = $_GET["updid"];
                 $qry = "SELECT * FROM `service` WHERE service_id  = $userid";
                 $result = mysqli_query($conn,$qry);
                 while($row = mysqli_fetch_array($result)){
                       ?>
                       <!-- SELECT `news_id`, `title`, `content`, `dateposted`  -->
                                    <input type="text" class="form-control" id="exampleInputName1" name="service"  value="<?php echo $row['servicename'] ?>"
                                        >
                                        <label for="exampleInputName1" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="price"
                                    value="<?php echo $row['serviceprice'] ?>" >
                            
                                    <label for="exampleInputName1" class="form-label">Service Image</label>
                                    <input type="file" class="form-control" id="exampleInputName1" name="serviceimg"
                                    value="<?php echo $row['service_img'] ?>"   >
        
                                </div>
                                <?php
                 }
                                ?>
                                <br>
                               
                                <button type="submit" class="btn btn-primary" name="sub" >Submit</button>
                            </form>
                        </div>
                    </div>
                    <?php 
include("connection.php");
if (isset($_POST["sub"])) {
    $serviceupd = $_POST["service"];
    $priceupd = $_POST["price"];
    $serviceimage= $_FILES["serviceimg"];

    $imagename = $serviceimage['name'];
$actualpath = $serviceimage['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
    // UPDATE `service` SET `service_id`='[value-1]',`servicename`='[value-2]',`serviceprice`='[value-3]' WHERE 1
    $qry = "UPDATE `service` SET `servicename`='$serviceupd',`serviceprice`='$priceupd',`service_img`='$mypath' WHERE service_id = $userid"; 
    // $qry = "UPDATE `news` SET `title`='$newstitle' WHERE news_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='serviceshow.php';
</script>
"; 
}

?>


<?php
include "footer.php";
?>