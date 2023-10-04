<?php

session_start();
//echo "welcome".$_SESSION['user_name'];

if(isset($_GET['addElectionPage'])){
     require_once("add_elections.php");
}
else if(isset($_GET['addCandidatePage'])){
     require_once("add_candidates.php");
}
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

    <title>Dashboard</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        
        /* margin-bottom: 70px; */
    }
    table {
        border-collapse: collapse;
        width: 98%;
        margin: 0 auto;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    .navbar-brand,
    .nav-link {
        color: white;
        /* transition: color 0.3s; */
    }

    .navbar-brand {
        font-family: Roboto, Arial, sans-serif;
        /* transition: color 0.3s; */
    }

    .navbar-brand:hover,
    .nav-link:hover {
        color: rgb(233, 167, 53);
    }

    a {
        color: inherit;
        text-decoration: none;
    }
    .foot {
        /* position: fixed; */
        bottom: 0;
        width: 100%;
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
                        <a class="nav-link" href="aresult.php">𝚁𝚎𝚜𝚞𝚕𝚝𝚜</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">𝙷𝚎𝚕𝚙</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">𝙰𝚋𝚘𝚞𝚝 𝚄𝚜</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <!-- <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-success mx-2" type="submit">LOGIN</button> -->
                    <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
                    <button type="button" class="btn btn-warning mx-2"><a href="logout2.php">Log-Out</a></button>
                </form>
            </div>
        </div>
    </nav>
    <br>




<?php
include ("../actions/connect.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];
if($userprofile == true){

}
else{
    header('location:alogin.php');
}


$query="SELECT * FROM `cdetails`";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);


if($total != 0){
    ?>
    <h2 align="center">𝙳𝚒𝚜𝚙𝚕𝚊𝚢𝚒𝚗𝚐 &nbsp; 𝚊𝚕𝚕 &nbsp;  𝚛𝚎𝚌𝚘𝚛𝚍𝚜.</h2>
    <h2 ><button type='button' class='btn btn-dark'>
                  <a href='csignup.php'>Add a new User.</a></button></h2>
    
    <br>
<table border="3" cellspacing="7" width="88%" align="center">
    <tr>
        <th width="5%">ID</th>
        <th width="10%">USERNAME</th>
        <th width="10%">EMAIL</th>
        <!-- <th width="10%">PASSWORD</th> -->
        <th width="10%">STANDARD</th>
        <th width="8%">POSITION</th>
        <th width="10%">PHOTO</th>
        <th width="10%">MANIFESTO</th>
        <th width="7%">STATUS</th>
        <th width="8%">VOTES</th>
        <th width="20%">OPERATIONS</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)) {
        echo "<tr>
                  <td>".$result['id']."</td>
                  <td>".$result['username']."</td>
                  <td>".$result['email']."</td>
               
                  <td>".$result['standard']."</td>
                  <td>".$result['position']."</td>
                  <td><img src='".$result['photo']."' alt=' ' height='100px' width='100px'></td>
                  <td>".$result['manifesto']."</td>
                  <td>".$result['status']."</td>
                  <td>".$result['votes']."</td>
                  <td><button type='button' class='btn btn-outline-success'>
                  <a href='update2.php?id=$result[id]'>Modify</a></button>
                  

                  <button type='button' class='btn btn-outline-danger'  onclick='return checkdelete()'>
                  <a href='delete.php?id=$result[id]'>Delete</a></button></td>
            </tr>
            ";
    }
}

?>
</table>
<br>
<!-- &us=$result[username]&pa=$result[password]&st=$result[standard]&po=$result[position]&ph=$result[photo]&ma=$result[manifesto]&sa=$result[status]&vo=$result[votes] -->
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this data?');
    }

</script>



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
