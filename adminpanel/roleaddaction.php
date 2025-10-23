<?php
include "connection.php";

if(isset($_POST['sub'])){
    $rolename=$_POST['roleaddname'];


    $insert_qry="INSERT INTO `role`(`role_name`) VALUES ('$rolename')";


  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='roleshow.php';
    </script>";
}
?>