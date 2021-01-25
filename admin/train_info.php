<?php


$link = mysqli_connect("localhost", "root", "", "test");
// Check connection
if($link === false)
{
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$train_id = mysqli_real_escape_string($link, $_REQUEST['train_id']);
$train_name = mysqli_real_escape_string($link, $_REQUEST['train_name']);
$departure_from = mysqli_real_escape_string($link, $_REQUEST['departure_from']);
$arrival_to = mysqli_real_escape_string($link, $_REQUEST['arrival_to']);
$departure_time = mysqli_real_escape_string($link, $_REQUEST['departure_time']);


// attempt insert query execution

$sql = "INSERT INTO train (train_id, train_name, departure_from, arrival_to, departure_time) VALUES 
('$train_id', '$train_name', '$departure_from', '$arrival_to' ,'$departure_time')";

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
     <title>Train Information</title>
     
     
     <style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pic/pur.jpg);
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
        <h1 style="font-size:70px;font-display: block;"><font color="yellow"><center> Train Route Insertion Successful</center> </font> </h1>
      </div>  
      </header>
         <a href="train_info.html"><center><font color="white">Set Train Route Again</font></center> </a>
         <br>
         <br>
         <a href="admin_dashboard.php"><center><font color="white">Back to Admin Dashboard</font></center> </a>
    </body>
   </html>