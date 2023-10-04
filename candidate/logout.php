<?php
session_start();

session_destroy();
header('location:clogin.php');
// echo '<script>
//     alert("Are you sure, you want to logout?");
//     window.location="clogin.php";
//     </script>';


?>
