<?php
include "connection.php";

if(isset($_POST['sub'])){
    $heading=$_POST['heading'];
    $sologan=$_POST['sologan'];
    $description=$_POST['description'];

    $insert_qry="INSERT INTO `About`(`heading1`, `sologan`, `description`) VALUES ('$heading','$sologan','$description')";
    // $insert_qry="INSERT INTO `role`(`role_name`) VALUES ('$rolename')";


  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='aboutshow.php';
    </script>";
}
?>