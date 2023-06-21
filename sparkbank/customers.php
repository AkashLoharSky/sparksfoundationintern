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
            <a href="index.php"  id="home">
                <li>Home</li>
            </a>
            <a href="index.php#services" id="service">
                <li>Services</li>
            </a>
            <a href="#all" class="active" id="customerss">
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


    <!-- table for all customer -->


    <div id="all">
        <h2>All Customers</h2>

        <table>
            <tr>
                <th>Sl. No.</th>
                <th>Acc No.</th>
                <th>Name</th>
                <th>Mail-Address</th>
                <th>Balance </th>
                <th>View </th>
            </tr>
            <!-- php for table -->
            <?php
// connection
include('connection.php');

//show all data
$sql = "SELECT * FROM `customers`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

$sn = 0;
if($num>0){
while($row = mysqli_fetch_array($result))
{
    // $row = mysqli_fetch_assoc($result);
    $sn = $sn+1;
    echo "<tr>
            <td>".$sn.".</td>
            <td>".$row["Acc_no"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Mail"]."</td>
            <td>Rs. ".$row["Balance"]."</td>

            <td id='trn'><a href ='details.php?id=$row[Acc_no]'>View/Transfer</a></td>
            </tr>";
}
echo "</table>";
}
else{
    echo "No record found!";
}
$conn-> close();
?>
        </table>
    </div>

    <!-- script -->
    <script src="script.js"></script>
</body>

</html>