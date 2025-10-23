<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `About` WHERE about_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='aboutshow.php';
</script>";
?>