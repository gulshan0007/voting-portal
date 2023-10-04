<?php
session_start();
include ('connect.php');


$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];


$updatevotes=mysqli_query($con,"update `cdetails` set votes='$totalvotes' where id='$gid'");
$updatestatus=mysqli_query($con,"update `cdetails` set status=1 where id='$uid'");

if($updatevotes and $updatestatus){
    $getcandidate=mysqli_query($con,"Select username,photo,votes,id,status,manifesto,position from `cdetails` where standard='candidate'");
    $candidate=mysqli_fetch_all($getcandidate,MYSQLI_ASSOC);
    $_SESSION['candidate']=$candidate;
    $_SESSION['status']=1;
    echo '<script>
    alert("Voting Successful.");
    window.location="../candidate/candidate.php";
    </script>';

}
else{
    echo '<script>
    alert("Technical Error!!!!");
    window.location="../candidate/candidate.php";
    </script>';
}

?>