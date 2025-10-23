<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">user Add </h6>
                            <form class="forms-sample" action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">user</label>
                                    <?php
                        require "connection.php";
                 $userid = $_GET["updid"];
                 $qry = "SELECT * FROM `user` WHERE user_id  = $userid";
                 $result = mysqli_query($conn,$qry);
                 while($row = mysqli_fetch_array($result)){
                       ?>
                       <!-- SELECT `news_id`, `title`, `content`, `dateposted`  -->
                                    <input type="text" class="form-control" id="exampleInputName1" name="user"  value="<?php echo $row['user_name'] ?>"
                                        >
                                        <label for="exampleInputName1" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="mail"
                                    value="<?php echo $row['email'] ?>" >
                                    <label for="exampleInputName1" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="add"
                                    value="<?php echo $row['address'] ?>" >
                                    <label for="exampleInputName1" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="phn">
                       
                                     <label for="exampleInputName1" class="form-label">user Image</label> 
                                    <input type="file" class="form-control" id="exampleInputName1" name="userimg"
                                    value="<?php echo $row['user_img'] ?>"   >
        
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
    $userupd = $_POST["user"];
    $mail = $_POST["mail"];
    $add = $_POST["add"];
    $phn = $_POST["phn"];
    $userimage= $_FILES["userimg"];

    $imagename = $userimage['name'];
$actualpath = $userimage['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
    // UPDATE `user` SET `user_id`='[value-1]',`username`='[value-2]',`userprice`='[value-3]' WHERE 1
    $qry = "UPDATE `user` SET `user_name`='$userupd',`email`='$mail',`address`='$add',`phone`='$phn',`user_img`='$mypath' WHERE user_id = $userid"; 
    // $qry = "UPDATE `news` SET `title`='$newstitle' WHERE news_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='usershow.php';
</script>
"; 
}

?>


<?php
include "footer.php";
?>