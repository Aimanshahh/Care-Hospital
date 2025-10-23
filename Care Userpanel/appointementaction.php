<?php
include "connection.php";

if(isset($_POST['sub'])){
    $aptservice=$_POST['service'];
    $aptdoctor=$_POST['doctor'];
    $aptname=$_POST['name'];
    $aptemail=$_POST['email'];
    $aptdate=$_POST['date'];
    $apttime=$_POST['time'];

    $insert_qry="INSERT INTO `appointment1`(`sevice_fk`, `doctor_fk`, `appointment_name`, `appointment_email`, `appointment_date`, `appointment_time`) VALUES ('$aptservice','$aptdoctor','$aptname','$aptemail','$aptdate','$apttime')";
    // $insert_qry="INSERT INTO `role`(`role_name`) VALUES ('$rolename')";
    // INSERT INTO `appointment1`(`appointment_id`, `sevice_fk`, `doctor_fk`, `appointment_name`, `appointment_email`, `appointment_date`, `appointment_time`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='appointment.php';
    </script>";
}
?>