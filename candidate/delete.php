<?php
include ("../actions/connect.php");
$id=$_GET['id'];
$query="DELETE FROM cdetails WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data){
    echo "<script>
        alert('Record Deleted.');
        </script>";
    ?>
        
    <meta http-equiv = "refresh" content = "0; url = http://localhost/vote/candidate/display.php" />
    <?php
}
else{
    echo "<script>
        alert('Unable to delete the record.');
        </script>";
}




?>