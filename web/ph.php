<?php



$link = mysqli_connect("localhost", "root", "", "test");
// Check connection
if($link === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_REQUEST['email']);



// attempt insert query execution

$sql = "INSERT INTO sabbir (email) VALUES 
('$email')";

if(mysqli_query($link, $sql))
{
   //echo "Records added successfully.";
} 
else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Purchase History</title>
      <!-- <link rel="stylesheet" type="text/css" href="style_flights.css"> -->



  </head>
  <body style="background-color:CADETBLUE;">
      <header>
    <style>
    table {
      background: #7FFFD4;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {
      border: 2px solid #9ACD32;
      text-align: left;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #E0FFFF;
    } 
    </style>



<h2 align="center" class="h">Purchase History</h2>

<table align="center">
  <tr>
    <th>PASSENGER  FIRST NAME</th>
    <th>PASSENGER  LAST NAME</th>
    <th>EMAIL</th>
    <th>TRAVEL FROM</th>
    <th>TRAVEL TO</th>
    <th>TRAIN NAME</th>
    <th>TRAVEL DATE</th>
    <th>CLASS</th>
    <th>TICKET FARE</th>
    <th>NO OF SEAT</th>
    <th>TOTAL FARE</th>
    <!-- <th>TRAIN NAME</th> -->
  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "test");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT b.passenger_fname, b.passenger_lname, b.passenger_email, b.travel_from, b.travel_to, b.train_name, b.date,  b.class, t.economy_class_price as ticket_price,  b.seat, b.seat * t.economy_class_price AS total_price
FROM booking as b JOIN ticket as t JOIN sabbir as s
ON(b.train_name = t.train_name)
WHERE b.passenger_email = s.email";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["passenger_fname"] ."</td><td>".$row["passenger_lname"] ."</td><td>".$row["passenger_email"] ."</td><td>".$row["travel_from"] ."</td><td>".$row["travel_to"] ."</td><td>".$row["train_name"] ."</td><td>".$row["date"] ."</td><td>".$row["class"] ."</td><td>".$row["ticket_price"] ."</td><td>".$row["seat"] ."</td><td>".$row["total_price"] ."</td></tr>";
  }
  echo "</table>";
} else{
  echo "0 result";
}
$conn->close();
 ?>


</table>
</header>

<br>
<br>
<a href="home.php"><center><font color="BLUEVIOLET">Back to Dashboard</font></center> </a>

</body>
</html>
