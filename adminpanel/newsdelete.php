<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `news` WHERE news_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='newsshow.php';
</script>";
?>