<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `contact` WHERE contact_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='contactshow.php';
</script>";
?>