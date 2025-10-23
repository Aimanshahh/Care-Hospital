<?php
require_once "header.php";
require_once "connection.php";



// Check if user_name is set in the session
if (isset($_SESSION['name'])) {
    // Get user_name from the session
    $user_name = $_SESSION['name'];

    // Fetch user information only if user_name is not empty
    if (!empty($user_name)) {

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT `user_id`, `user_name`, `email`, `user_password`, `role_FK`, `user_img` FROM `user` WHERE user_name = ?");
        $stmt->bind_param("s", $user_name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Display user information
            $id = $row['user_id'];
            $first_name = $row['user_name'];
            $email = $row['email'];
            $password = $row['user_password'];
            $user_role = $row['role_FK'];
            $user_image = $row['user_img'];
        } else {
            echo "User not found";
            exit();
        }

        $stmt->close();
    } else {
        echo "User name is empty";
        exit();
    }
} else {
    echo "User name not set in the session";
    exit();
}
?>
<div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn"> Update User Profile</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Update User </a>
            </div>
        </div>
    </div>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center ms-5">
        <div class="col-md-4 text-center mb-4">
            <img src="<?php echo $_SESSION['img'] ?>" class="img-fluid rounded-start" alt="User Image" style="margin-top: 20px;">
        </div>
        <div class="col-md-8">
            <div class="card" style="max-width: 540px; border: none;">
                <div class="card-body">
                    <h5 class="card-title">Edit Profile</h5>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="name" class="form-control form-control-lg" id="exampleInputUsername1" name="Name" placeholder="Username" value="<?php echo htmlspecialchars($first_name) ?>">
                        </div><br>
                        <div class="form-group">
                            <input type="Email" class="form-control form-control-lg" id="exampleInputEmail1" name="Email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>">
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" aria-describedby="passwordToggle">
                            <button class="btn btn-outline-secondary" type="button" id="passwordToggle" onclick="togglePassword()">👁️</button>
                        </div><br>
                        <div class="form-group">
                            <label for="">Role Name</label>
                            <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="role">
                                <?php
                                require_once "connection.php";
                                $qry = "SELECT * FROM `role`";
                                $res = mysqli_query($conn, $qry);

                                while ($opt = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <option value="<?php echo htmlspecialchars($opt['role_id']) ?>"><?php echo htmlspecialchars($opt['role_name']) ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-lg" id="exampleInputPassword1" name="img">
                        </div><br>
                        <div class="mb-4">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" name="sub" class="btn btn-primary py-3 w-100 mb-4">update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>
<?php
require "footer.php";
?>

<script>
function togglePassword() {
    const passwordInput = document.getElementById("password");
    const passwordToggle = document.getElementById("passwordToggle");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = "🔒";
    } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = "👁️";
    }
}
</script>
   <?php 
include("connection.php");
if (isset($_POST["sub"])) {
    $userupd = $_POST["user"];
    $mail = $_POST["mail"];
    $add = $_POST["add"];
    $phn = $_POST["phn"];
    $userimage= $_FILES["userimg"];

    $imagename = $userimage['name'];
$actualpath = $userimage['tmp_name'];
$mypath = "image/".$imagename;
   move_uploaded_file($actualpath,$mypath);
    // UPDATE `user` SET `user_id`='[value-1]',`username`='[value-2]',`userprice`='[value-3]' WHERE 1
    $qry = "UPDATE `user` SET `user_name`='$userupd',`email`='$mail',`address`='$add',`phone`='$phn',`user_img`='$mypath' WHERE user_id = $userid"; 
    // $qry = "UPDATE `news` SET `title`='$newstitle' WHERE news_id = $userid";
    $result = mysqli_query($conn,$qry);
    echo "
<script> 
alert('updated succesfully');
window.location.href='usershow.php';
</script>
"; 
}

?>
