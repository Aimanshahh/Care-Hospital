<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `opening` WHERE opening_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='openshow.php';
</script>";
?>