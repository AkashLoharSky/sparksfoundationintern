<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@500&family=Geologica:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>SPARKS BANK</title>
</head>

<body>
    <!-- navbar -->
    <nav id="navi">
        <h1>SPARKS BANK<div class="line"></div>
        </h1>

        <ul id="navlinks">
            <a href="#header" class="active" id="home">
                <li>Home</li>
            </a>
            <a href="#services" id="service" >
                <li>Services</li>
            </a>
            <a href="customers.php" onclick="customer()" id="customerss">
                <li>Customers</li>
            </a>
            <a href="#footer" id="footers" onclick="gotofoot()">
                <li>About Me</li>
            </a>
            <!-- <a href="#">
                <li>Contact</li> -->
            </a>
        </ul>
        <img src="images/588a6507d06f6719692a2d15.png" onclick="menutoggle()" class="menu">
    </nav>

    <!-- header-section -->
    <header id="header" onscroll="navchng()">
        <div class="heading">
            <h3>Welcome to the</h3>
            <div class="line"></div>
            <h1>SPARKS BANK</h1>
        </div>
    </header>


    <!-- services    -->

    <div id="services">

        <div id="maketransuction">

            <a href="moneytransfer.php"  > <img src="images/2534227.png" alt="Money Transfer">
                <h3>Transfer <br> Money</h3>
            </a>
        </div>




        <div id="vwhist">
            <a href="history.php" ><img src="images/2867944.png" alt="Transaction History">
                <h3>Transaction <br> History </h3>
            </a>

        </div>


        <div id="vwall">
            <a href="customers.php" ><img src="images/Customer-Logo-PNG-HD-Quality.png"
                    alt="View Cutomers">
                <h3>View <br> Cutomers</h3>
            </a>
        </div>
    </div>


    <!-- script -->
    <script src="script.js"></script>



    <!-- footer -->
    <footer id="footer">
        <div class="felements">
            <div class="imgm"><img src="images\20220912170535_IMG_2691.JPG">
            </div>

            <div class="texts">
                <h3>Akash Lohar</h3><br>
                <p> Email: skyironr@gmail.com<br><br>
                &#x2022 Intern at <b>The Sparks Foundation</b><br><br>
                &#x2022 Dr. B.C. Roy Engineering College
            </p>
<a href="https://www.linkedin.com/in/akash-lohar-351626229/"><img src="images\link.png" ></a>
<a href="https://github.com/AkashLoharSky"><img src="images\git.png" ></a>
<a href="https://instagram.com/skyironr?igshid=ZTIyNGE1NDMzMQ=="><img src="images\ins.png" ></a>
<a href="https://www.facebook.com/sky.ironr"><img src="images\fb.png" ></a>
            </div>
        </div>
        <p style="margin-top: 10px">Copyright &copy; 2023 Sparks Bank</p></div>
    </footer>



</body>

</html>