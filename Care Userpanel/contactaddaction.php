<?php
include "connection.php";

if(isset($_POST['subb'])){
    $contactnm=$_POST['contactnameadd'];
    $contactem=$_POST['contactemailadd'];
    $contactsb=$_POST['subjectadd'];
    $contactmsg=$_POST['messageadd'];

    $insert_qry="INSERT INTO `contact`(`contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES ('$contactnm','$contactem','$contactsb','$contactmsg')";
    // $insert_qry="INSERT INTO `role`(`role_name`) VALUES ('$rolename')";
    // INSERT INTO `contact`(`contactid`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

  ;

    $result=  mysqli_query($conn,$insert_qry);
    echo
    "
    <script>
    alert('Added successfully');
    window.location.href='contact.php';
    </script>";
}
?>