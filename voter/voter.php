<?php
  session_start();
//   $data1=$_SESSION['data'];
  $data=$_SESSION['data'];
  
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
        font-size: 24px;
        margin: 0;
    }

    .menu-item-description {
        margin: 10px 0;
        color: #555;
    }

    .menu-item-price {
        font-weight: bold;
        color: #ff6b6b;
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
                        <a class="nav-link" href="/reservation.html">𝚅𝚘𝚝𝚎</a>
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
                    <button type="button" class="btn btn-warning mx-2"><a href="../logout.php">Log-Out</button>
                </form>
            </div>
        </div>
    </nav>


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
                <h3 class="menu-item-title"><?php echo $candidate[$i]['username'] ?></h3>
                <!-- <p class="menu-item-description"><?php echo $candidate[$i]['password'] ?></p> -->
                <p class="menu-item-price"><?php echo $candidate[$i]['position'] ?></p>
                </div>
                </div>
                <?php
                }



                
            }
            ?>

        
    </div>
    
<?php
session_start();
$data1=$_SESSION['data'];
?>
    <div class="menu-item" data-aos="zoom-in" data-aos-duration="1000">
        <img src="5.png" alt="Menu Item 2">
        <div class="menu-item-content">
            <h3 class="menu-item-title"><?php echo $data1['username'];?></h3>
            <p class="menu-item-description">Description of menu item 2.</p>
            <p class="menu-item-price">$12.99</p>
        </div>
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