<?php
include "connection.php";

if(isset($_POST['subb'])){
    $cityname=$_POST['cityaddname'];


    $insert_qry="INSERT INTO `cities`(`city_name`) VALUES ('$cityname')"


  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='cityshow.php';
    </script>";
}
?>