<?php
include "connection.php";

if(isset($_POST['subb'])){
    $diseasename=$_POST['diseaseaddname'];


    $insert_qry="INSERT INTO `disease`(`disease_name`) VALUES ('$diseasename')"


  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='diseaseshow.php';
    </script>";
}
?>