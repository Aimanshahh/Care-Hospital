<?php
include "connection.php";

if(isset($_POST['sub'])){
    $testnm=$_POST['testname'];
    $testimonaldesc=$_POST['testdesc'];
    $testimage= $_FILES["testiimg"];

    $imagename = $testimage['name'];
$actualpath = $testimage['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
//    INSERT INTO `testimonal`(`testimonal_id`, `testimonal_name`, `testimonal_desc`, `testimonal_img`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    $qry = "INSERT INTO `testimonal`( `testimonal_name`, `testimonal_desc`, `testimonal_img`) VALUES ('$testnm','$testimonaldesc','$mypath')";
    $result = mysqli_query($conn, $qry);
    echo "
<script> 
alert('aded succesfully');
window.location.href='testimonalshow.php';
</script>
"; 
}

?>