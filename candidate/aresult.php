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
    <title>Election Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            /* margin: 20px; */
        }

        h1 {
            text-align: center;
            color: #0056b3;
        }
        h2,h4 {
            text-align: center;
            color: 	#36454F;
        }

        .winner-container {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .winner-container img {
            max-width: 400px;
            max-height: 400px;
            display: block;
            margin: 20px auto;
            border: 2px solid #333;
            border-radius: 5px;
        }

        .back-link {
            /* display: block; */
            text-align: center;
            /* margin-top: 20px; */
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
                        <a class="nav-link" href="/contact.html">𝙷𝚎𝚕𝚙</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">𝙰𝚋𝚘𝚞𝚝 𝚄𝚜</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <button type="button" class="btn btn-warning mx-2"><a href="logout2.php">Log-Out</a></button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <button type='button' class='btn btn-outline-primary'>
    <a class="back-link my-3" href="adash.php">Back to Home page.</a></button>

    
    <?php
// Assuming the connection is already established in 'connect.php' or elsewhere
include ("../actions/connect.php");

// Step 1: Retrieve all candidate details from the 'cdetails' table
$getCandidatesQuery = "SELECT id, username, standard, position, photo, manifesto, status, votes FROM cdetails WHERE standard = 'candidate'";
$result = mysqli_query($con, $getCandidatesQuery);

// Check if any candidates exist
if (mysqli_num_rows($result) > 0) {
    $candidates = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Step 2: Determine the candidate with the maximum number of votes
    $maxVotes = 0;
    $winner = null;

    foreach ($candidates as $candidate) {
        if ($candidate['votes'] > $maxVotes) {
            $maxVotes = $candidate['votes'];
            $winner = $candidate;
        }
    }

    // Step 3: Display the information of the if ($winner !== null) {
        // Display the winner's information
        echo '<div class="winner-container">';
        echo '<h1>𝙴𝚕𝚎𝚌𝚝𝚒𝚘𝚗  𝚁𝚎𝚜𝚞𝚕𝚝𝚜!!</h1><br>';
        echo '<h2>The winner is: ' . $winner['username'] . '</h2>';
        echo '<h4>Number of votes: ' . $winner['votes'] . '</h4>';
        echo '<h4>Manifesto: ' . $winner['manifesto'] . '</h4>';
        echo '<h4>Position: ' . $winner['position'] . '</h4>';
        echo '<img src="' . $winner['photo'] . '" alt="Winner Photo">';
        echo '</div>';
    
} else {
    echo '<h1>No candidates found.</h1>';
}
?>


  
<br>


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
