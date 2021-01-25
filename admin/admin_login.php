<?php
  include 'config.php';
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>admin</title>
<h2 align="center" class="p">Welcome to LOG-IN for Admin</h2>
</head>
<body id="g">
<center>
<div id="h">
<img src="admin.jpg" class="img"></img>
<center><form action="admin_login.php" method="POST">

<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
</input>

<!button work>

<input name="login" type="submit" id="u" value="LOGIN">
</input>
<a href="admin_register.php"><input name="reg" type="button" id="u" value="REGISTER">
</input>


</form></center>

</center>



<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from admin where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='admin_dashboard.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('admin_register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('admin_register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>










</div>
</body>

</html>