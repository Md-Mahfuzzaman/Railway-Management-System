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
$economy_class_price = mysqli_real_escape_string($link, $_REQUEST['economy_class_price']);
$business_class_price = mysqli_real_escape_string($link, $_REQUEST['business_class_price']);


// attempt insert query execution

$sql = "INSERT INTO ticket (train_id, train_name, economy_class_price, business_class_price) VALUES 
('$train_id', '$train_name', '$economy_class_price', '$business_class_price')";

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
        <h1 style="font-size:70px;font-display: block;"><font color="yellow"><center> Fare Query Insert Successful</center> </font> </h1>
      </div>  
      </header>


         <a href="fare_query.html"><center><font color="white">Set Fare Query Again</font></center> </a>

         <a href="admin_dashboard.php"><center><font color="white">___________________________</font></center> </a>

         <a href="admin_dashboard.php"><center><font color="white">Back to Admin Dashboard</font></center> </a>
    </body>
   </html>
