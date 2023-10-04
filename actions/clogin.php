



<?php
session_start();
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$std = $_POST['std'];

$sql = "SELECT * FROM `cdetails` WHERE username='$username' AND standard='$std'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {


    $sql="Select id,username,email,password,position,manifesto,photo,votes,status from `cdetails` where standard='candidate'";
    $resultcandidate=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultcandidate)>0){
        $candidate=mysqli_fetch_all($resultcandidate,MYSQLI_ASSOC);
        $_SESSION['candidate']=$candidate;
    }
    $data = mysqli_fetch_array($result);

    if (password_verify($password, $data['password'])) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['manifesto'] = $data['manifesto'];
        $_SESSION['data'] = $data;

        if ($data['standard'] == 'candidate') {
            echo '<script>
                window.location="../candidate/cdetails.php";
            </script>';
        } else {
            echo '<script>
                window.location="../candidate/candidate.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Invalid Credentials");
            window.location="../voter/clogin.php";
        </script>';
    }
} else {
    echo '<script>
        alert("Invalid Credentials");
        window.location="../voter/clogin.php";
    </script>';
}
?>

