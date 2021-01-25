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
$train_route = mysqli_real_escape_string($link, $_REQUEST['train_route']);


// attempt insert query execution

$sql = "INSERT INTO route (train_id, train_name, train_route) VALUES 
('$train_id', '$train_name', '$train_route')";

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
     <title>Train Route</title>
     <!-- <link rel="stylesheet" type="text/css" href="assigned.css"> -->
     
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
         <a href="route.html"><center><font color="white">Set Train Route Again</font></center> </a>
<br>
<br>
         <a href="admin_dashboard.php"><center><font color="white">Back to Admin Dashboard</font></center> </a>
    </body>
   </html>