<?php
include ("connect.php");

session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['signin'])){
$query="SELECT * FROM `admin` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1){

    $_SESSION['user_name']=$username;
    echo '<script>
    window.location="../candidate/adash.php";
    </script>';

}
else{
    echo '<script>
    alert("Invalid Credentials");
    window.location="../candidate/alogin.php";
    </script>';
}
}
?>

