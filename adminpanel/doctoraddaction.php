<?php 
include("connection.php");
if (isset($_POST["sub"])) {
    $doctorname= $_POST["doctornameadd"];
    $doctorservice= $_POST["service"];
    $doctorfee= $_POST["doctorfee"];
    $docimg= $_FILES["doctorimgadd"];

    $imagename = $docimg['name'];
$actualpath = $docimg['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
// INSERT INTO `doctor`(`doctor_id`, `doctor_name`, `service_fk`, `doctor_img`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    $qry = "INSERT INTO `doctor`( `doctor_name`, `service_fk`, `fee`, `doctor_img`) VALUES ('$doctorname','$doctorservice','$doctorfee','$mypath')";
    $result = mysqli_query($conn, $qry);
    echo "
<script> 
alert('aded succesfully');
window.location.href='doctorshow.php';
</script>
"; 
}

?>