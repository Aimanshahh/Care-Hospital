<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `cities` WHERE city_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='cityshow.php';
</script>";
?>