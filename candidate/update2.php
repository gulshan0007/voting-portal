<?php
include ("../actions/connect.php");
error_reporting(0);
session_start();
$userprofile = $_SESSION['user_name'];
if($userprofile == true){

}
else{
    header('location:alogin.php');
}
// if(!isset($_SESSION['username'])){
//     header('location:alogin.php');
// }
$id=$_GET['id'];

$query="SELECT * FROM `cdetails` where id='$id'";
$data=mysqli_query($con,$query);

$result=mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="ar" dir="rt">

<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-image: url('111.jpg');
        background-size: cover;
        background-position: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-form {
        width: 400px;
        /* background-color: #ffffff; */
        padding: 30px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); */
        /* border-radius: 50%; */
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #f05b83;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
        display: flex;
        align-items: center;
    }

    label {
        display: none;
    }

    input {
        flex: 1;
        padding: 10px 10px 10px 40px;
        border: none;
        border-radius: 50px;
        background-color: #eeeeee;
        color: #333333;
    }

    .icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 10px;
        height: auto;
        width: auto;
        max-height: 20px;
        max-width: 20px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #813287;
        color: #ffffff;
        text-align: center;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #ac4da4;
    }

    .sign-up {
        text-align: center;
        margin-top: 10px;
        color: #f05b83;
    }

    .sign-up a:hover {
        background-color: #ac4da4;
    }

    .sign-up a {
        color: white;
        text-decoration: none;
    }

    .heading {
        text-align: left;
        color: #ffffff;
        font-size: 24px;
        margin-top: 40px;
        margin-left: 40px;
    }

    .home-btn {
        background-color: #813287;
        margin-left: 1100px;
        margin-top: 0px;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 16px;
        text-align: right;
    }

    .home-btn:hover {
        background-color: #ac4da4;
    }
    .f{
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
    }
    </style>
</head>

<body>



    <?php
    // Get the file paths from $result
    $photoPath = $result['photo'];
    $manifestoPath = $result['manifesto'];

    // Output the file paths in the respective input fields
    ?>

    <h2 class="heading">𝚅𝚘𝚝𝚒𝚗𝚐 𝙿𝚘𝚛𝚝𝚊𝚕.</h2>
    <a href="../index.php" class="home-btn">Home</a>
    <div class="container">
        <form class="login-form" action="#" method="POST" enctype="multipart/form-data">
            <h2>𝚄𝙿𝙳𝙰𝚃𝙴</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="uSERNAME"
                    value="<?php echo $result['username'];?>" required>
                <img src="email.svg" class="icon" alt="Email Icon">
            </div>
            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="E-mail"
                    value="<?php echo $result['email'];?>" required>
                <img src="email.svg" class="icon" alt="Email Icon">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" value="<?php echo $result['password'];?>"
                    placeholder="Password" required>
                <img src="password.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                <input type="password" id="cpassword" name="cpassword" value="<?php echo $result['password'];?>"
                    placeholder="Confirm Password" required>
                <img src="password.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                <input type="position" id="position" name="position" value="<?php echo $result['position'];?>"
                    placeholder="Position for which you are contesting">
                <img src="position.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                
                <input type="file" id="photo" name="photo" value=""
                    placeholder="">
                    <span class="f"><?php echo basename($result['photo']); ?></span>
                <img src="image.svg" class="icon" alt="Password Icon">&nbsp;

            </div>


            <div class="form-group">
                <input type="file" id="manifesto" name="manifesto" value=""
                    placeholder="Upload your Manifesto">
                    <span class="f"><?php echo basename($result['manifesto']); ?></span>
                <img src="document.svg" class="icon" alt="Password Icon">
            </div>
            <div class="mb-3">


                <select name="std" class="form-select w-50 m-auto">
                    <option value="Candidate" <?php 
                    if($result['standard']== 'candidate'){
                        echo "selected";
                    }
                    
                    
                    ?>>


                        Candidate</option>
                    <option value="Voter" <?php 
                    if($result['standard']== 'voter'){
                        echo "selected";
                    }
                    ?>>Voter</option>
                </select>



            </div>
            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $position = $_POST['position'];
    $std = $_POST['std'];

    // Check if the photo file was uploaded
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photoTmpName = $_FILES['photo']['tmp_name'];
        $photoName = $_FILES['photo']['name'];
        $photoDestination = $photoName;
        move_uploaded_file($photoTmpName, $photoDestination);
    } else {
        // No new photo file uploaded, keep the existing one
        $photoDestination = $result['photo'];
    }

    // Check if the manifesto file was uploaded
    if ($_FILES['manifesto']['error'] === UPLOAD_ERR_OK) {
        $manifestoTmpName = $_FILES['manifesto']['tmp_name'];
        $manifestoName = $_FILES['manifesto']['name'];
        $manifestoDestination =$manifestoName;
        move_uploaded_file($manifestoTmpName, $manifestoDestination);
    } else {
        // No new manifesto file uploaded, keep the existing one
        $manifestoDestination = $result['manifesto'];
    }

    // Update the database with the new data
    $query = "UPDATE `cdetails` SET `username`='$username',`email`='$email', `password`='$password', `position`='$position', `standard`='$std', `photo`='$photoDestination', `manifesto`='$manifestoDestination' WHERE `id`='$id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
        alert('Data updated successfully.');
        </script>";
        ?>
        
        <meta http-equiv = "refresh" content = "0; url = http://localhost/vote/candidate/display.php" />
        <?php

    } else {
        echo "Error updating data: " . mysqli_error($con);
    }
}

$id = $_GET['id'];
$query = "SELECT * FROM `cdetails` WHERE id='$id'";
$data = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($data);
?>

<!-- Rest of your HTML code -->
