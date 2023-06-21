<?php




//submit data to database
$sql = "SELECT * FROM customers WHERE Name = '$fname'";
$result = mysqli_query($conn, $sql);

//check
if($row=mysqli_fetch_array($result)){
    $sql2 = "SELECT * FROM customers WHERE Name = '$tname'";
   $result2 = mysqli_query($conn, $sql2);
   $main_bal=$row["Balance"];
   $sub_amnt=$main_bal-$amount; 

echo "<div id='chk' style='color:green;
 text-align:center'>...Welcome...</div>";

if($row2=mysqli_fetch_array($result2)){
if( $tname==$fname){
   echo "<div id='chk' style='color:red;
   text-align:center'>Smart! But can't Send Money to Yourself</div>";
}
elseif ($amount<=0) {
    echo "<div id='chk' style='color:red;
 text-align:center'>Can't Sent Money Less Than zero!!</div>";
}
else if($main_bal<$amount){

    echo "<div id='chk' style='color:red;
   text-align:center'>Insufficient Balance!</div>"
    ;
}
else{
    $tot_amnt= $row2["Balance"]+$amount; 
    $sql ="UPDATE `customers` SET `Balance` = '$tot_amnt' WHERE `customers`.`Name` = '$tname'";
    $result3 = mysqli_query($conn, $sql);

   $sql ="UPDATE `customers` SET `Balance` = '$sub_amnt' WHERE `customers`.`Name` = '$fname'";
    $result3 = mysqli_query($conn, $sql);


  //add data to history
  $date= date('y-m-d h:i:s');
  $sql= "SELECT * FROM `transferhist`";
  $sql="INSERT INTO `transferhist` (`Acc_no`, `Sender`, `Receiver`, `Amount`, `Date`) VALUES ('$id', '$fname', '$tname', '$amount', '$date');";
 $result = mysqli_query($conn, $sql);



echo "<div id='chk' style='color:green;
background-color:white ; text-align:center'>Amount Sucessfully Transfered to ".$tname."</div>";
// header("Location: 'details.php'");
    $sub_amnt=0;
    $tot_amnt=0;
    $amount=0;
}}

else{
   echo "<div id='chk' style='color:red;
   background-color: white; text-align:center'>Transfer Failed!! Check the Name Entered</div>";
}
}



else{
    echo "<div id='chk' style='color:red;
    background-color: white; text-align:center'>Transfer Failed!! Check the Name Entered</div>";
}

?>