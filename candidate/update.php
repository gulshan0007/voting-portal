<?php
include ("../actions/connect.php");
error_reporting(0);
$id=$_GET['id'];

$query="SELECT * FROM `cdetails` where id='$id'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="ar" dir="rt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">

    <title>Update User</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .navbar-brand,
    .nav-link {
        color: white;
    }

    .navbar-brand {
        font-family: Roboto, Arial, sans-serif;
    }

    .navbar-brand:hover,
    .nav-link:hover {
        color: rgb(233, 167, 53);
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    .container {
        max-width: 800px;
        margin: 40px auto;
        background-color: #f8f8f8;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
    }

    .form-group input[type="text"],
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 12px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .form-group textarea {
        resize: vertical;
    }

    .btn-primary {
        background-color: #e9a735;
        border-color: #e9a735;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
    }

    .btn-primary:hover {
        background-color: #d88c1a;
        border-color: #d88c1a;
    }

    .update-heading {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .foot {
        /* position: fixed; */
        bottom: 0;
        width: 100%;
    }

    /* Additional styling for the update page */
    .update-heading {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 40px;
    }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">𝚅𝚘𝚝𝚒𝚗𝚐 𝙿𝚘𝚛𝚝𝚊𝚕</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reservation.html">𝙼𝚊𝚗𝚊𝚐𝚎</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu.html">𝚁𝚎𝚜𝚞𝚕𝚝𝚜</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">𝙷𝚎𝚕𝚙</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">𝙰𝚋𝚘𝚞𝚝 𝚄𝚜</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <button type="button" class="btn btn-warning mx-2"><a href="logout.php">Log-Out</a></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="update-heading">Update User Details</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" value="<?php echo $result['id'];?> " disabled>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $result['username'];?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="<?php echo $result['password'];?>">
            </div>
            <div class="form-group">
                <label for="standard">Standard</label>
                <input type="text" id="standard" name="standard" value="<?php echo $result['standard'];?>">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" value="<?php echo $result['position'];?>">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="text" id="photo" name="photo" value="<?php echo $result['photo'];?>">
            </div>
            <div class="form-group">
                <label for="manifesto">Manifesto</label>
                <input type="text" id="manifesto" name="manifesto" value="<?php echo $result['manifesto'];?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" id="status" name="status" value="<?php echo $result['status'];?>">
            </div>
            <div class="form-group">
                <label for="votes">Votes</label>
                <input type="text" id="votes" name="votes" value="<?php echo $result['votes'];?>">
            </div>
            <input type="submit" value="Update Details" class="btn btn-primary" name="submit">
        </form>
    </div>

    <section class="foot">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: black;">

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">VotingPortal.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
// include('../actions/connect.php');
if($_POST['update'])

{
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$std=$_POST['std'];
$position=$_POST['position'];
$newi=$_FILES['image']['name'];
$oldi=$_POST['oldphoto'];


if($newi!=''){
$update_filename=$_FILES['image']['name'];
}
else{
    $update_filename=$oldi;
}


// $votes=$_POST['votes'];
// $status=$_POST['status'];
// $id=$_POST['id'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$manifesto=$_FILES['manifesto']['name'];
$manifesto_tmp_name=$_FILES['manifesto']['manifesto_tmp_name'];
if($password!=$cpassword){
    echo '<script>
    alert("Password do not match");
    window.location="../candidate/csignup.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/img/$image");
    move_uploaded_file($manifesto_tmp_name,"../uploads/pdf/$manifesto");

    $sql="UPDATE `cdetails` SET username='$username',password='$password',standard='$std',position='$position',photo='$image',manifesto='$manifesto' WHERE id='$id'";

    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>
        alert("Updated Successful");
        window.location="display.php";
        </script>';
    }
}}

?>