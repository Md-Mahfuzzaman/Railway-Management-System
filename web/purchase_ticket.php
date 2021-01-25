<?php


$link = mysqli_connect("localhost", "root", "", "test");
// Check connection
if($link === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$passenger_fname = mysqli_real_escape_string($link, $_REQUEST['passenger_fname']);
$passenger_lname = mysqli_real_escape_string($link, $_REQUEST['passenger_lname']);
$passenger_email = mysqli_real_escape_string($link, $_REQUEST['passenger_email']);
$travel_from = mysqli_real_escape_string($link, $_REQUEST['travel_from']);
$travel_to = mysqli_real_escape_string($link, $_REQUEST['travel_to']);
$train_name = mysqli_real_escape_string($link, $_REQUEST['train_name']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$seat = mysqli_real_escape_string($link, $_REQUEST['seat']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);

// attempt insert query execution

$sql = "INSERT INTO booking (passenger_fname, passenger_lname, passenger_email, travel_from, travel_to, train_name, date, seat, class) VALUES 
('$passenger_fname', '$passenger_lname', '$passenger_email', '$travel_from' ,'$travel_to', '$train_name', '$date', '$seat', '$class')";

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


<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>registration</title>
     <!-- <link rel="stylesheet" type="text/css" href="assigned.css"> -->
     
     <style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pic/purchase1.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
      }
     </style>

<body>
    
     <<header>
     <div>
        <h1 style="font-size:70px;font-display: block;"><font color="yellow"><center>Purchase Ticket Successful</center> </font> </h1>
      </div>  
      </header>

      <a href="purchase_ticket.html"><center><font color="white">Purchase Ticket Again</font></center> </a>

      <br>

         <a href="home.php"><center><font color="white">Back to Dashboard</font></center> </a>
    </body>
   </html>