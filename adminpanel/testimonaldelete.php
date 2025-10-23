<?php

require "connection.php";
$userid = $_GET['dltid'];

$dltquerry="DELETE FROM `testimonal` WHERE testimonal_id=$userid";
$result = mysqli_query($conn,$dltquerry);

echo"<script>
alert('Deleted Successfully');
window.location.href='testimonalshow.php';
</script>";
?>