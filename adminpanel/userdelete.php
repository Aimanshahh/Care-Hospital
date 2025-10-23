<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `user` WHERE user_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='usershow.php';
</script>";
?>