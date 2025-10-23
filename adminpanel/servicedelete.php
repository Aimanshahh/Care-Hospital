<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `service` WHERE service_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='serviceshow.php';
</script>";
?>