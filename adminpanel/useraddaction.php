<?php
include "connection.php";

if(isset($_POST['sub'])){
    $usernm=$_POST['username'];
    $userphn=$_POST['userphn'];
    $usermail=$_POST['usermail'];
    $useradd=$_POST['useraddress'];
    $userimage= $_FILES["userimg"];

    $imagename = $userimage['name'];
$actualpath = $userimage['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
  //  INSERT INTO `user`(`user_id`, `username`, `userprice`, `user_img`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    $qry = "INSERT INTO `user`(`user_name`, `address`, `phone`, `email`, `user_img`) VALUES ('$usernm','$useradd','$userphn','$usermail','$mypath')";
    $result = mysqli_query($conn, $qry);
    echo "
<script> 
alert('aded succesfully');
window.location.href='usershow.php';
</script>
"; 
}

?>