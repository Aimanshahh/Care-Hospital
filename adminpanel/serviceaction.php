<?php
include "connection.php";

if(isset($_POST['sub'])){
    $servicenm=$_POST['servicename'];
    $servicepr=$_POST['serviceprice'];
    $serviceimage= $_FILES["serviceimg"];

    $imagename = $serviceimage['name'];
$actualpath = $serviceimage['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
  //  INSERT INTO `service`(`service_id`, `servicename`, `serviceprice`, `service_img`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    $qry = "INSERT INTO `service`( `servicename`, `serviceprice`, `service_img`) VALUES ('$servicenm','$servicepr','$mypath')";
    $result = mysqli_query($conn, $qry);
    echo "
<script> 
alert('aded succesfully');
window.location.href='serviceshow.php';
</script>
"; 
}

?>