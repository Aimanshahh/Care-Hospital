<?php
session_start();
require "connection.php";

if(isset($_POST['sub'])){
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    // `user_id`, `user_name`, `email`, `user_password`, `role_FK`, `user_img`
    $qry="SELECT * FROM `user` WHERE user_name = '$user' AND user_password = '$pwd'";
    $res=mysqli_query($conn,$qry);

 if($res){
    $row = mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
 if($count>0){
    $_SESSION['id']=$row['user_id'];
    $_SESSION['role']=$row['role_FK'];
    $_SESSION['name']=$row['user_name'];
    $_SESSION['email']=$row['email'];
    $_SESSION['img']=$row['user_img'];
    $_SESSION['user_password']=$row['user_password'];


    if($_SESSION['role']==9){
        echo "
        <script>
        window.location.href='index.php';
        </script>
        ";
    }
else {
    echo "
    <script>
    window.location.href='signin.php';
    </script>
    ";
}
 }
else{
    echo"
    <script>
    alert('Login Failed')
    </script>
    ";
}

    
 }  
    
}
?>

