<?php
session_start();
require "connection.php";

if(isset($_POST['sub'])){
    $user=$_POST['username'];
    $pwd=$_POST['password'];

    $qry="SELECT * FROM `user` WHERE user_name = '$user' AND user_password = '$pwd'";
    $res=mysqli_query($conn,$qry);

 if($res){
    $row = mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
 if($count>0){
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['role']=$row['role_FK'];
    $_SESSION['name']=$row['user_name'];
    $_SESSION['img']=$row['user_img'];
    if($_SESSION['role']==2){
        echo "
        <script>
        window.location.href='adminindex.php';
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

