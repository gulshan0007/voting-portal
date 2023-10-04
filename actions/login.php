<?php
session_start();
include ("connect.php");

$username=$_POST['username'];
$password=$_POST['password'];
$std=$_POST['std'];
$sql="Select * from `userdata` where username='$username' and password='$password' and standard='$std'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $sql="Select username,votes,id from `userdata` where standard='candidate'";
    $resultcandidate=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultcandidate)>0){
        $candidate=mysqli_fetch_all($resultcandidate,MYSQLI_ASSOC);
        $_SESSION['candidate']=$candidate;
    }
    $data1=mysqli_fetch_array($result);
    $_SESSION['id']=$data1['id'];
    $_SESSION['status']=$data1['status'];
    $_SESSION['data']=$data1;

    
    if($data1['standard']=='candidate'){
    echo '<script>
    window.location="../candidate/candidate.php";
    </script>';
    }
    else{
        echo '<script>
        window.location="../candidate/candidate.php";
        </script>';
    }
}
else{
    echo '<script>
    alert("Invalid Credentials");
    window.location="../voter/vlogin.php";
    </script>';
}
?>