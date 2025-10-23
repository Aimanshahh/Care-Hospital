<?php
include "connection.php";

if(isset($_POST['sub'])){
    $newstitle=$_POST['newstitleadd'];
    $newscontent=$_POST['newscontentadd'];
    $newsdate=$_POST['newsdateadd'];

    $insert_qry="INSERT INTO `news`(`title`, `content`, `dateposted`) VALUES ('$newstitle','$newscontent','$newsdate')";
    // $insert_qry="INSERT INTO `role`(`role_name`) VALUES ('$rolename')";


  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='newsshow.php';
    </script>";
}
?>