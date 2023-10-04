<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header('location:clogin.php');
}
  $data=$_SESSION['data'];
//   $data1=$_SESSION['data'];

  

  if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
  }
  else{

    $status='<b class="text-danger">Not Voted</b>';
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
    }

    .contain {

        display: flex;
        justify-content: center;
        /* horizontally center the content */
        align-items: center;


    }

    .thicker-hr {
        height: 4px;
        /* Adjust the height as per your preference */
        background-color: black;
        /* You can change the color to suit your design */
        border: none;
        /* Remove any default border */
    }


    .menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .menu-item {
        width: 300px;
        margin: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .menu-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .menu-item-content {
        padding: 20px;
    }

    .menu-item-title {
        font-size: 20px;
        margin: 0;
    }

    .menu-item-description {
        margin: 10px 0;
        color: #555;
    }

    .menu-item-price {
        /* */
        color: black;
        font-size: 20px;
    }

    .resume-link a:hover {
        background-color: #0056b3;
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

    /* .welcome-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        } */

    .brand-logo {
        font-size: 40px;
        font-weight: bold;
        color: #0056b3;
        text-align: center;
        margin-bottom: 20px;
    }

    .welcome-message {
        font-size: 24px;
        color: #555;
        text-align: center;
        align-items: center;

        margin-bottom: 30px;
    }

    .center-container1 {
        text-align: center;
    }


    .profile-picture img {
        border-radius: 50%;
        width: 40px; /* Adjust the width and height as needed */
        height: 40px;
        margin-right: 2px; /* Add some margin to separate the picture from the text */
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
                    
                    <li class="nav-item dropdown d-flex align-items-center">
    <div class="profile-picture">
        <!-- Replace 'path_to_profile_picture' with the actual path to the candidate's profile picture -->
        <!-- <img src="tttt.avif" alt="Profile Picture"> -->


        <?php
            if ($data['photo']){
            ?>
            <img src="../uploads/img/<?php echo $data['photo'];?>" alt="#">
            <?php
            }
            else{
                ?>
            <img src="tttt.avif" alt="#">
            <?php
            }
            ?>




    </div>
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $data['username'];?>
    </a>
    <ul class="dropdown-menu">
        <!-- <li><a class="dropdown-item" href="#"></a></li> -->
        <li><a class="dropdown-item" href="#">Status:&nbsp;<?php echo $status;?></a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">E-mail : <?php echo $data['email'];?></a></li>
    </ul>
</li>







                    <li class="nav-item">
                        <a class="nav-link" href="result.php">𝚁𝚎𝚜𝚞𝚕𝚝𝚜</a>
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
                    <button type="button" class="btn btn-warning mx-2"><a href="logout.php">Log-Out</button>
                </form>
            </div>
        </div>
</nav>

    <div class="welcome-page">
        <div class="brand-logo">𝚅𝚘𝚝𝚒𝚗𝚐 𝙿𝚘𝚛𝚝𝚊𝚕</div>
        <div class="welcome-message">
            Welcome, here's the list of candidates contesting for election!
        </div>
        <div class="menu">

            <?php
            if(isset($_SESSION['candidate']))
            {
                $candidate=$_SESSION['candidate'];
                for($i=0;$i<count($candidate);$i++)
                {
                    ?>
            <div class="menu-item" data-aos="flip-left" data-aos-duration="1000">
                <img src="../uploads/img/<?php echo $candidate[$i]['photo'];?>" alt="Menu Item 1">
                <div class="menu-item-content">
                    <h3 style="text-align: center;"><?php echo $candidate[$i]['username'] ?></h3>
                    <!-- <p class="menu-item-description"><?php echo $candidate[$i]['password'] ?></p> -->
                    <p class="menu-item-title">Postition:&nbsp;<?php echo $candidate[$i]['position'] ?></p>
                    <p class="menu-item-title">Manifesto:&nbsp;
                    <h6><?php echo $candidate[$i]['manifesto'] ?></h6>
                    <h6><a href="medical.pdf" target=" ">Download manifesto</a></h6>

                    </p>

                    <p class="menu-item-description">Votes:&nbsp;<?php echo $candidate[$i]['votes'] ?></p>
                    <form action="../actions/voting.php" method="POST">
                        <input type="hidden" name="groupvotes" value="<?php echo $candidate[$i]['votes']; ?>">
                        <input type="hidden" name="groupid" value="<?php echo $candidate[$i]['id']; ?>">
                        <?php
                    if($_SESSION['status']==1){
                        ?>
                        <!-- <button class="bg-success my-3 text-white px-3">Voted</button> -->
                        <?php
                    }
                    else{
                        ?>


                        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                        <?php
                    if(count($candidate)==1){
                        ?>
                        <div class="center-container1">
                            <button class="btn btn-outline-danger" type="submit">VOTE</button>
                        </div>

                        <?php
                    }
                    else{
                    ?>
                        <div class="center-container1">
                            <button class="btn btn-outline-danger" type="submit">VOTE</button>
                        </div>

                        <!-- <button class="btn btn-outline-primary">No</button>
                        <button class="btn btn-outline-primary">Neutral</button>
                        <button class="btn btn-outline-primary" type="submit">NOTA</button> -->


                        <?php
                    }
                    ?>
                        <?php
                    }
                    ?>
                    </form>
                </div>
            </div>


            <?php
                }
            }






            else{
                ?>
            <div class="container">
                <p>No groups to display.</p>
            </div>
            <?php
            }
            ?>


        </div>
    </div>
    <hr class="thicker-hr">
    <br>
    <br>

    <div class="brand-logo">Your account</div>

    <div class="contain">
        <div class="menu-item" data-aos="zoom-in" data-aos-duration="1000">
            <?php
            if ($data['photo']){
            ?>
            <img src="../uploads/img/<?php echo $data['photo'];?>" alt="#">
            <?php
            }
            else{
                ?>
            <img src="tttt.avif" alt="#">
            <?php
            }
            ?>

            <div class="menu-item-content">
                <h5>Username : <?php echo $data['username'];?></h5>
                <h5>E-mail : <?php echo $data['email'];?></h5>
                <p class="menu-item-description">Status:&nbsp;<?php echo $status;?></p>

            </div>
        </div>
    </div>

    </div>















    <section class="">
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