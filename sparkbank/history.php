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
            <a href="index.php#services" id="service" class="active" >
                <li>Services</li>
            </a>
            <a href="customers.php" id="customerss">
                <li>Customers</li>
            </a>
            <a href="index.php#footer">
                <li>About Us</li>
            </a>
   
        </ul>
        <img src="images/588a6507d06f6719692a2d15.png" onclick="menutoggle()" class="menu">
    </nav>


    <!-- table history -->
    <div id="hist">
        <h2>Transfer History</h2>
        <table>
            <tr>
                <th>Sl.No.</th>
                <th>Acc No.</th>
                <th>Sender Name</th>
                <th>Receiver Name</th>
                <th>Amount</th>
                <th>Date & Time </th>
            </tr>

            <?php
// connection

include('connection.php');


//tranfer history


$sql = "SELECT * FROM `transferhist`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
// echo $num;
$sn = 0;
if($num>0){
while($row = mysqli_fetch_array($result))
{
    // $row = mysqli_fetch_assoc($result);
    $sn = $sn+1;
    echo "<tr>
            <td>".$sn.".</td>
            <td>".$row["Acc_no"]."</td>
            <td>".$row["Sender"]."</td>
            <td>".$row["Receiver"]."</td>
            <td>Rs. ".$row["Amount"]."</td>
            <td>".$row["Date"]."</td>
            </tr>";
}
echo "</table>";
}
else{
    echo "No record found!";
}
?>
        </table>
    </div>



  
    <!-- script -->
    <script src="script.js"></script>
</body>

</html>