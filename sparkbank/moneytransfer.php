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
    <title>SPARK BANK</title>
</head>

<body>
    <!-- navbar -->
    <nav>
        <h1>SPARK BANK<div class="line"></div>
        </h1>

        <ul id="navlinks">
            <a href="index.php" id="home">
                <li>Home</li>
            </a>
            <a href="index.php#services" id="service">
                <li>Services</li>
            </a>
            <a href="customers.php" class="active" id="customerss">
                <li>Customers</li>
            </a>
            <a href="index.php#footer">
                <li>About Us</li>
            </a>
            <!-- <a href="#">
                <li>Contact</li> -->
            </a>
        </ul>
        <img src="images/588a6507d06f6719692a2d15.png" onclick="menutoggle()" class="menu">
    </nav>


    
    <!-- money transfer -->

    <div id="click">

        <!-- form -->
        <form action="moneytransfer.php" method="post">
            <label for="fname">Transfer From :<label>
                    <input type="text" name="fname" placeholder="Sender Name" required /><br>

                    <label for="tname">Transfer To :<label>
                            <input type="text" name="tname" id="tname" placeholder="Receiver Name" required />
                            <br>
                            <label for="amount">Amount :<label>
                                    <input type="number" name="amount" id="amount" placeholder="Amount to be Transfered"
                                        required /><br>
                                    <div class="bttn">
                                        <input type="submit" value="Transfer" id="btn">
                                    </div>
        </form>


        <!-- php -->

        <?php

include('connection.php');
//chk form submit
if($_SERVER['REQUEST_METHOD']=='POST'){
$fname =strip_tags($_POST["fname"]);
$tname =strip_tags($_POST["tname"]);
$amount= $_POST["amount"];

}
$sql = "SELECT * FROM customers WHERE Name = '$fname'";
$result = mysqli_query($conn, $sql);

if($row = mysqli_fetch_array($result)){
$id=$row["Acc_no"];
}

 include('submittodb.php');

?>
    </div>



    <!-- script -->
    <script src="script.js"></script>
</body>

</html>