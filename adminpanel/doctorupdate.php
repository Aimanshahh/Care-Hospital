<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Contact Update </h6>
                            <form class="forms-sample" action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Contact Name</label>
                                    <?php
                        require "connection.php";
                 $userid = $_GET["updid"];
                 $qry = "SELECT * FROM `doctor` WHERE doctor_id  = $userid";
                 $result = mysqli_query($conn,$qry);
                 while($row = mysqli_fetch_array($result)){
                       ?>
                       <!-- SELECT `news_id`, `title`, `content`, `dateposted`  -->
                                    <input type="text" class="form-control" id="exampleInputName1" name="doctorname"  value="<?php echo $row['doctor_name'] ?>"
                                        >
                                        <div class="form-group">
                                        <label for="exampleInputName1" class="form-label">Doctor Service</label>

                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="doctorservice" value="<?php echo $row['service_fk'] ?>">
                     <?php
                     require "connection.php";
                     $qry = "SELECT * FROM `service`";
                     $result = mysqli_query($conn, $qry);
                     while($opt = mysqli_fetch_assoc($result)){
                       ?>
<option value="<?php echo $opt["service_id"];?>"><?php echo $opt["servicename"];?></option>
                       <?php
                        }
                       ?>
                   
                    </select>
                  </div>
                  <label for="exampleInputName1" class="form-label">Doctor Fee</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="doctorfee"  value="<?php echo $row['fee'] ?>"
                                        >

                                        <label for="exampleInputName1" class="form-label">Doctor Image</label>
                                    <input type="file" class="form-control" id="exampleInputName1" name="doctorimgadd" value="<?php echo $row['doctor_img'] ?>"
                                        >

                               
        
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
    $docname = $_POST["doctorname"];
    $docser = $_POST["doctorservice"];
    $docfee = $_POST["doctorfee"];
    $docimg = $_FILES["doctorimgadd"];

    $imagename = $docimg['name'];
$actualpath = $docimg['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
    // UPDATE `contact` SET `contact_id`='[value-1]',`contact_name`='[value-2]',`contact_email`='[value-3]',`contact_subject`='[value-4]',`contact_message`='[value-5]' WHERE 1
    $qry = "UPDATE `doctor` SET `doctor_name`='$docname' ,`service_fk`='$docser' ,`fee`='$docfee' ,`doctor_img`='$mypath' WHERE doctor_id = $userid"; 
    // $qry = "UPDATE `news` SET `title`='$newstitle' WHERE news_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='doctorshow.php';
</script>
"; 
}

?>


<?php
include "footer.php";
?>