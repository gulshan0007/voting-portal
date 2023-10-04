<?php
  session_start();
  $data=$_SESSION['data'];
  ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous" />
    <title>Person Details</title>
    <style>
    a {
        color: inherit;
        text-decoration: none;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    .left-side {
        flex-basis: 25%;
        background-color: 	#36454F;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .left-side img {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .left-side .details {
        text-align: center;
        margin-bottom: 40px;
        color: #fff;
    }

    .left-side .details p {
        margin: 8px 0;
    }

    .right-side {
        flex-grow: 1;
        background-color: #ffffff;
        padding: 40px;
    }

    .vertical-rule {
        border-left: 2px solid #ccc;
        height: 100%;
        margin-left: 40px;
    }

    h1 {
        text-align: center;
        margin-top: 0;
    }

    .resume-link {
        text-align: center;
        margin-top: 20px;
    }

    .resume-link a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
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
    .con{
        padding: 30px;
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
            <a class="navbar-brand" href="#">𝚅𝚘𝚝𝚒𝚗𝚐 𝙿𝚘𝚛𝚝𝚊𝚕</a>
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
                        <a class="nav-link" href="candidate.php">𝚅𝚘𝚝𝚎</a>
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
                    <!-- <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-success mx-2" type="submit">LOGIN</button> -->
                    <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
                    <button type="button" class="btn btn-warning mx-2">Log-Out</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="left-side">
            <img src="../uploads/img/<?php echo $data['photo'];?>" alt="Profile Photo">
            <div class="details">

                <h3>Welcome, <?php echo $data['username'];?></h3>
                <br>
                <p><strong>E-mail :- </strong><?php echo $data['email'];?></p>
                <p><strong>Position :- </strong><?php echo $data['position'];?></p>
                <p><strong>Status :- </strong>Not Voted</p>
            </div>
        </div>
        <div class="vertical-rule"></div>
        <div class="right-side">
            <h2 class="text-center" style="color: #1d3557">𝙼𝚊𝚗𝚒𝚏𝚎𝚜𝚝𝚘</h2>
            <div class="con">
                <embed src="medical.pdf" type="application/pdf" width="100%" height="450px" />
            </div>
           
        </div>
    </div>
    <section class="foot">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #343434;">

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">VotingPortal.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <script>
    src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin = "anonymous"
    </script>

</body>

</html>