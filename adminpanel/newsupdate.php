<?php
include "header.php";
?>
   <!-- partial -->
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">News Add </h6>
                            <form class="forms-sample" action="#" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">News Title</label>
                                    <?php
                        require "connection.php";
                 $userid = $_GET["updid"];
                 $qry = "SELECT * FROM `news` WHERE news_id  = $userid";
                 $result = mysqli_query($conn,$qry);
                 while($row = mysqli_fetch_array($result)){
                       ?>
                       <!-- SELECT `news_id`, `title`, `content`, `dateposted`  -->
                                    <input type="text" class="form-control" id="exampleInputName1" name="newstitleadd" value="<?php echo $row['title'] ?>"
                                        >
                                        <label for="exampleInputName1" class="form-label">Content</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="newscontentadd"
                                    value="<?php echo $row['content'] ?>">
                                        <label for="exampleInputName1" class="form-label">Date Posted</label>
                                    <input type="date" class="form-control" id="exampleInputName1" name="newsdateadd"   value="<?php echo $row['dateposted'] ?>"
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
    $newstitle = $_POST["newstitleadd"];
    $newscontent = $_POST["newscontentadd"];
    $newsdate = $_POST["newsdateadd"];
    // UPDATE `news` SET `news_id`='[value-1]',`title`='[value-2]',`content`='[value-3]',`dateposted`='[value-4]' WHERE 1
    $qry = "UPDATE `news` SET `title`='$newstitle' ,`content`='$newscontent' ,`dateposted`='$newsdate' WHERE news_id = $userid"; 
    // $qry = "UPDATE `news` SET `title`='$newstitle' WHERE news_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='newsshow.php';
</script>
"; 
}

?>


<?php
include "footer.php";
?>