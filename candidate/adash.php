<?php
session_start();
//echo "welcome".$_SESSION['user_name'];
$userprofile = $_SESSION['user_name'];
if($userprofile == true){

}
else{
    header('location:alogin.php');
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
    
    .welcome-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

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
            max-width: 600px;
            margin-bottom: 30px;
        }

        .cta-button {
            padding: 12px 30px;
            
            font-size: 18px;
            border: none;
            background-color: #0056b3;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .cta-button:hover {
            background-color: #004080;
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
                        <a class="nav-link" href="display.php">𝙼𝚊𝚗𝚊𝚐𝚎</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aresult.php">𝚁𝚎𝚜𝚞𝚕𝚝𝚜</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?addElectionPage=1">Add Elections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">𝙷𝚎𝚕𝚙</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">𝙰𝚋𝚘𝚞𝚝 𝚄𝚜</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <button type="button" class="btn btn-warning mx-2"><a href="logout2.php">Log-Out</button>
                </form>
            </div>
        </div>
    </nav>



    <div class="welcome-page">
        <div class="brand-logo">𝚅𝚘𝚝𝚒𝚗𝚐 𝙿𝚘𝚛𝚝𝚊𝚕</div>
        <div class="welcome-message">
            Welcome, Admin! You have access to manage the voting portal.
            <br>
            Please choose an option from the navigation menu to get started.
        </div>
        <a href="display.php" class="cta-button my-2">Manage</a>
        <a href="aresult.php" class="cta-button my-2">View Results</a>

        <a href="display.php?addElectionPage=1" class="cta-button my-2">Add Elections</a>

        <a href="display.php?addCandidatePage=1" class="cta-button my-2">Add Candidates</a>
        
        <a href="/contact.html" class="cta-button my-2">Help &amp; Support</a>
        <a href="/about.html" class="cta-button my-2">About Us</a>
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