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
                            <form class="forms-sample" action="#" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Contact Name</label>
                                    <?php
                        require "connection.php";
                 $userid = $_GET["updid"];
                 $qry = "SELECT * FROM `contact` WHERE contact_id  = $userid";
                 $result = mysqli_query($conn,$qry);
                 while($row = mysqli_fetch_array($result)){
                       ?>
                       <!-- SELECT `news_id`, `title`, `content`, `dateposted`  -->
                                    <input type="text" class="form-control" id="exampleInputName1" name="contactname"  value="<?php echo $row['contact_name'] ?>"
                                        >
                                        <label for="exampleInputName1" class="form-label">Contact E-mail</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="contactmail"
                                    value="<?php echo $row['contact_email'] ?>">
                                        <label for="exampleInputName1" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="contactsubject"   value="<?php echo $row['contact_subject'] ?>"
                                        >
                                        <label for="exampleInputName1" class="form-label">Message</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="contactmessage"   value="<?php echo $row['contact_message'] ?>"
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
    $conname = $_POST["contactname"];
    $conmail = $_POST["contactmail"];
    $consub = $_POST["contactsubject"];
    $conmsg = $_POST["contactmessage"];
    // UPDATE `contact` SET `contact_id`='[value-1]',`contact_name`='[value-2]',`contact_email`='[value-3]',`contact_subject`='[value-4]',`contact_message`='[value-5]' WHERE 1
    $qry = "UPDATE `contact` SET `contact_name`='$conname' ,`contact_email`='$conmail' ,`contact_subject`='$consub',`contact_message`='$conmsg' WHERE contact_id = $userid"; 
    // $qry = "UPDATE `news` SET `title`='$newstitle' WHERE news_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='contactshow.php';
</script>
"; 
}

?>


<?php
include "footer.php";
?>