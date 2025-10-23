<?php
include "connection.php";

if(isset($_POST['sub'])){
    $username=$_POST['Name'];
    $useremail=$_POST['Email'];
    $usernamepassword=$_POST['Password'];
    $userrole=$_POST['role'];
    $img=$_FILES['img'];

    $imagename=$img['name'];
    $actualpath= $img['tmp_name'];
    $mypath= "image/" .$imagename;
    move_uploaded_file($actualpath,$mypath);

    // INSERT INTO `user`( `user_name`, `email` `user_password`, `role_FK`, `user_img`) VALUES ('$username','$useremail','$usernamepassword','$userrole','$mypath')
   
    $insert_qry="INSERT INTO `user`(`user_name`, `email`, `user_password`, `role_FK`, `user_img`) VALUES ('$username','$useremail','$usernamepassword','$userrole','$mypath')";
$result = mysqli_query($conn , $insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='signin.php';
    </script>";
}
?>