<?php
include "connection.php";

if(isset($_POST['sub'])){
    $opendayadd=$_POST['dayadd'];
    $opentimeadd=$_POST['timeadd'];

    $insert_qry="INSERT INTO `opening`(`opening_days`, `opening_timing`) VALUES ('$opendayadd','$opentimeadd')";
    // $insert_qry="INSERT INTO `role`(`role_name`) VALUES ('$rolename')";

    // INSERT INTO `opening`(`opening_id`, `opening_days`, `opening_timing`) VALUES ('[value-1]','[value-2]','[value-3]')
  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='openshow.php';
    </script>";
}
?>