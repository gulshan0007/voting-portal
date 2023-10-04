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

    <title>Voting Portal</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .cover {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .scroll-down-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 999;
    }

    .scroll-down-button button {
        padding: 10px 20px;
        background-color: #0096c7;
        border: none;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        cursor: pointer;
    }

    .cover video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .cover-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }

    .cover h1 {
        font-size: 48px;
        margin: 0;
    }

    .cover p {
        font-size: 24px;
        margin: 10px 0 0 0;
    }

    .navbar {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 1;
        display: flex;
    }

    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .navbar li {
        margin: 0 10px;
    }

    .navbar a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
        text-transform: uppercase;
    }

    .navbar a:hover {
        color: #ff6b6b;
    }

    .container {
        margin-left: auto;
    }

    a {
        color: inherit;
        text-decoration: none;
    }


    h2 {
        color: white;
    }

    h1 {
        font: 4em sans-serif;
        text-align: center;
        color: #0077b6;
    }

    h3 {
        color: #48cae4;
    }

    .wrapper {
        height: 100vh;
        /*This part is important for centering*/
        display: inline;
        place-items: center;
    }

    #myheading {
        font-size: 38px;
        font-color: 264653;
    }

    .bottom-center {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
    }

    .btn-bottom {
        padding: 10px 20px;
        font-size: 18px;
        background-color: green;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .typing-demo {
        width: 36ch;
        animation: typing 5s, blink .5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        border-right: 3px solid;
        font-family: monospace;
        font-size: 2rem;
    }

    @media only screen and (max-width: 768px) {

        /* Styles for screens up to 768px wide */
        #box1 {
            font-size: 20px;
            /* Decrease the font size for smaller screens */
            line-height: 1.2;
        }
    }

    @media only screen and (min-width: 470px) and (max-width: 600px) {

        /* Styles for screens up to 768px wide */
        #box1 {
            font-size: 20px;
            /* Decrease the font size for smaller screens */
            line-height: 1.2;
        }
    }

    @media only screen and (min-width: 200px) and (max-width: 470px) {

        /* Styles for screens up to 768px wide */
        #box1 {
            font-size: 20px;
            /* Decrease the font size for smaller screens */
            line-height: 1.2;
        }
    }

    @keyframes typing {
        from {
            width: 0
        }
    }

    @keyframes blink {
        50% {
            border-color: transparent
        }
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
        font-color: white;
    }

    .menu-item-description {
        margin: 10px 0;
        color: #555;
    }

    .menu-item-price {
        font-weight: bold;
        color: #ff6b6b;
    }
    </style>
</head>

<body>



    <div class="cover">
        <video src="img/cover.mp4" autoplay loop muted></video>
        <div class="cover-content">
            <h1 id="myheading">𝓥𝓸𝓽𝓲𝓷𝓰 𝓟𝓸𝓻𝓽𝓪𝓵</h1>
            <!-- <h3>Дї$cѳѵёя аѫазїпg fѳѳд апд ѫѳяё!</h3> -->
            <div class="wrapper">
                <div class="typing-demo m-auto max-width-1 my-2" id="box1">
                    𝚅𝚘𝚝𝚎 𝚝𝚘𝚍𝚊𝚢,𝚑𝚊𝚟𝚎 𝚊 𝚋𝚎𝚝𝚝𝚎𝚛 𝚝𝚘𝚖𝚘𝚛𝚛𝚘𝚠!!!!
                </div>
            </div>
        </div>

        <div class="scroll-down-button bottom-center">
            <button onclick="scrollDown()">Explore</button>
        </div>
    </div>
    <div class="containerh1 my-4 ">
        <h1>𝐂𝐡𝐨𝐨𝐬𝐞 𝐀𝐜𝐜𝐨𝐮𝐧𝐭 𝐓𝐲𝐩𝐞</h1>
    </div>
    <div class="menu">

        <div class="menu-item" data-aos="zoom-in" data-aos-duration="1000">
            <img src="img/1.webp" alt="Menu Item 3">
            <div class="menu-item-content">
                <h3><a href="voter/vsignup.php">Voter Login</h3>
                <p class="menu-item-description"><a href="">Click here to login as a Voter.</a></p>
            </div>
        </div>

        <div class="menu-item" data-aos="zoom-in" data-aos-duration="1000">
            <img src="img/2.png" alt="Menu Item 1">
            <div class="menu-item-content">
                <h3><a href="candidate/clogin.php">Candidate Login</h3>
                <p class="menu-item-description"><a href="">Click here to login as a Candidate.</a></p>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-item" data-aos="zoom-in" data-aos-duration="1000">
            <img src="img/3.webp" alt="Menu Item 3">
            <div class="menu-item-content">
                <h3><a href="candidate/alogin.php">Admin Login</h3>
                <p class="menu-item-description"><a href="">Click here to login as an Admin.</a></p>
            </div>
        </div>

        <div class="menu-item" data-aos="zoom-in" data-aos-duration="1000">
            <img src="img/4.jpg" alt="Menu Item 1">
            <div class="menu-item-content">
                <h3><a href="candidate/fresult.php">RESULTS</h3>
                <p class="menu-item-description"><a href="candidate/result.php">Click here to view result.</a></p>
            </div>
        </div>
    </div>
    <?php include "footer.html" ?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    function scrollDown() {
        window.scrollBy({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    }
    </script>
</body>

</html>