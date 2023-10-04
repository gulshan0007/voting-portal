<!doctype html>
<html lang="ar" dir="rt">

<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-image: url('111.jpg');
        background-size: cover;
        background-position: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-form {
        width: 400px;
        /* background-color: #ffffff; */
        padding: 30px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); */
        /* border-radius: 50%; */
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #f05b83;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
        display: flex;
        align-items: center;
    }

    label {
        display: none;
    }

    input {
        flex: 1;
        padding: 10px 10px 10px 40px;
        border: none;
        border-radius: 50px;
        background-color: #eeeeee;
        color: #333333;
    }

    .icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 10px;
        height: auto;
        width: auto;
        max-height: 20px;
        max-width: 20px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #813287;
        color: #ffffff;
        text-align: center;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #ac4da4;
    }

    .sign-up {
        text-align: center;
        margin-top: 10px;
        color: #f05b83;
    }

    .sign-up a:hover {
        background-color: #ac4da4;
    }

    .sign-up a {
        color: white;
        text-decoration: none;
    }

    .heading {
        text-align: left;
        color: #ffffff;
        font-size: 24px;
        margin-top: 40px;
        margin-left: 40px;
    }

    .home-btn {
        background-color: #813287;
        margin-left: 1100px;
        margin-top: 0px;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 16px;
        text-align: right;
    }

    .home-btn:hover {
        background-color: #ac4da4;
    }
    </style>
</head>

<body>

    <h2 class="heading">𝚅𝚘𝚝𝚒𝚗𝚐 𝙿𝚘𝚛𝚝𝚊𝚕.</h2>
    <a href="../index.php" class="home-btn">Home</a>
    <div class="container">
        <form class="login-form" action="../actions/cregister.php" method="POST" enctype="multipart/form-data">
            <h2>Ｓｉｇｎ－Ｕｐ</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Usernme" required>
                <img src="email.svg" class="icon" alt="Email Icon">
            </div>
            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="E-mail" required>
                <img src="../voter/eicon.svg" class="icon" alt="Email Icon">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <img src="password.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                <img src="password.svg" class="icon" alt="Password Icon">
            </div>
            <!-- <div class="form-group">
                <input type="position" id="position" name="position" placeholder="Position for which you are contesting" required>
                <img src="position.svg" class="icon" alt="Password Icon">
            </div> -->
            <div class="mb-3">
                <select class="form-select w-50 m-auto" name = "position" required>
                <option value="">Select Election</option>
                            <?php
                            $db = mysqli_connect("localhost", "root", "", "votingsystem") or die("Connectivity Failed");
                            $fetchingElections = mysqli_query($db, "SELECT * FROM elections") OR die(mysqli_error($db));
                            $isAnyElectionAdded = mysqli_num_rows($fetchingElections);
                            if($isAnyElectionAdded > 0)
                            {
                                while($row = mysqli_fetch_assoc($fetchingElections))
                                {
                                    $election_id = $row['id'];
                                    $election_name = $row['election_topic'];
                            ?>
                            <option value="<?php echo $election_name; ?>"><?php echo $election_name; ?></option>
                            <?php
                                    }
                                }
                            else {
                        ?>
                                <option value=""> Please add election first </option>
                        <?php
                            }
                            ?>

                </select>
            </div>
            <div class="form-group">
                <input type="file" id="photo" name="photo" placeholder="" required>
                <img src="image.svg" class="icon" alt="Password Icon">
            </div>
            <div class="form-group">
                <input type="file" id="manifesto" name="manifesto" placeholder="Upload your Manifesto" required>
                <img src="document.svg" class="icon" alt="Password Icon">
            </div>
            <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="Candidate">Candidate</option>
                    <option value="Voter">Voter</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn">Sign-Up</button>
            <div class="sign-up">
                Already have an account? <a href="clogin.php">Log-In</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>