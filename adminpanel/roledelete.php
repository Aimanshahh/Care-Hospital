<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `role` WHERE role_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='roleshow.php';
</script>";
?>