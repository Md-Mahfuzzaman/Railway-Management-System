<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>USER</title>
      <!-- <link rel="stylesheet" type="text/css" href="style_flights.css"> -->



  </head>
  <body style="background-color:powderblue;">
      <header>
    <style>
    table {
      background: #FFEFD5;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {
      border: 2px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #dddddd;
    } 
    </style>



<h2 align="center">USER</h2>

<table align="center">
  <tr>
    <th>NAME</th>
    
    <th>EMAIL</th>
    
  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "test");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT  name, email FROM user ";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["name"] ."</td><td>".$row["email"] ."</td></tr>";
  }
  echo "</table>";
} else{
  echo "0 result";
}
$conn->close();
 ?>


</table>
</header>
</body>
</html>