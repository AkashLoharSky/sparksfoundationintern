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
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@500&family=Geologica:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>SPARK BANK</title>
</head>

<body>
    <!-- navbar -->
    <nav>
        <h1>SPARK BANK<div class="line"></div>
        </h1>

        <ul id="navlinks">
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="index.php#services", id="service">
                <li>Services</li>
            </a>
            <a href="customers.php" class="active">
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

<!-- show details -->

<div id="click">
   
<table >
<tr>
    <th>Acc No.</th>
    <th>Name</th>
    <th>Mail-Address</th>
    <th>Balance </th>

</tr>
<?php
include("connection.php");
$id=$_GET["id"];
    $sql = "SELECT * FROM customers WHERE Acc_no = '$id'";
    $result = mysqli_query($conn, $sql);

if($row=mysqli_fetch_array($result)){

echo "<tr>
            <td>".$row["Acc_no"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Mail"]."</td>
            <td>Rs. ".$row["Balance"]."</td>
            </tr>";
}
?>
</table>









<!-- view button -->


<form  method="post" >   
<label for= "tname">Send Money to :</label>
<select name="tname" id="tname">

<?php 

include('connection.php');



$sql = "SELECT * FROM `customers`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num>0){
while($row = mysqli_fetch_array($result))
{
//   echo $row['Name'];
    echo "<option value='".$row["Name"]."'>".$row["Name"]."</option> ";
}
echo "</select>";

}else
{
echo "Connection Failed!";
}
echo "<br><label for= 'amount' id='lbl'>Amount :        <label>
<input type='number' name = 'amount' id='amount'  placeholder='Amount to be Transfere' required /><br>";
echo "<input  type='submit' value='Transfer' id='btn' >";




//transfer
include('connection.php');
//chk form submit   
    $id=$_GET["id"];  
    $sql = "SELECT * FROM customers WHERE Acc_no = '$id'";
    $result = mysqli_query($conn, $sql);
   if($row=mysqli_fetch_array($result)){
    $fname = $row["Name"];  
    }
    else{
        echo "error!";
    }

if($_SERVER['REQUEST_METHOD']=='POST'){
   

    $tname =strip_tags($_POST["tname"]);
    $amount= $_POST["amount"];
include('submittodb.php');

}




// echo "<script> window.location = 'details.php?id=".$id."'</script>";


?>
</form>

</div> 



     <!-- script -->
     <script src="script.js"></script>
</body>
</html>