<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `appointment1` WHERE appointment_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='appointmentshow.php';
</script>";
?>