<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `doctor` WHERE doctor_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='doctorshow.php';
</script>";
?>