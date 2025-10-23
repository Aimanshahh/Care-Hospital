<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `disease` WHERE disease_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='diseaseshow.php';
</script>";
?> 