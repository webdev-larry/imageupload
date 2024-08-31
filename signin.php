<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/signin.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>


<div class="box-form">
	<div class="left">
		<div class="overlay">
        <h1>Hello World.</h1>
		<h3 id="h1"></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Curabitur et est sed felis aliquet sollicitudin</p>
		<span>
			<p>login with social media</p>
			<a href="#"> <i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa-regular fa-envelope" aria-hidden="true"></i> Login with Email</a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="/signup.php">Creat Your Account</a> it takes less than a minute</p>

		<?php 
		require ('connection.php');


		 $userName =  $password="";

		if($_SERVER["REQUEST_METHOD"]== "POST") {
			 $userName = test_input($_POST["username"]);
			$password = md5($_POST["password"]);
			
		}
		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data ;
		}		
		  $SQL = "SELECT * from signup where username = '$userName' and password = '$password'";

		  $result = $conn->query($SQL);
		  
		  if ($result->num_rows > 0) {

			while ($row = $result->fetch_assoc()) 
			{
			
				session_start();
				$_SESSION["username"] = $row['username'];
				$_SESSION["id"] = $row['id'];
				setcookie( 'ID',$row['id'],time() + 604800000,"/","",0);
				 $_COOKIE ['id'] ;
				
				header("Location: dashboard.php");
				
				
				
				
			}
		} else
		{
			echo "input details";
		}
		$conn->close();
		
		
		?>
			<form  enctype="application/x-www-form-urlencoded" action="#"  method="post" class="input"> 
				<input type="text" placeholder="user name" name="username">
			<br>
            <div style="display: flex; align-items: end;">
                <input type="password" placeholder="password  " class="password"  name="password"  >
                <span><i class='bx bx-hide eye-icon'></i></span>
            </div>
			
			
			
			<br><br>
			
		<div class="remember-me--forget-password">
				
	<label>
		<input type="checkbox" name="item" class="form-check-input" />
		<span class="text-checkbox">Remember me</span>
	</label>
			<p>forget password?</p>
		</div>
			
			<br>
			<button type="submit"> login </button>
		</form>
	</div>
	
</div>



<script src="/js/main.js"></script>
  
</body>
</html>
