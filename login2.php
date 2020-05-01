<!DOCTYPE html>
<html>

<?php
	include 'css/style.php';
?>

<body>
<?php
include 'core/init.php';
if(logged_in()===true){
header('Location: member.php');


}else{
 

 
 
	if (empty($_POST) === false){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		
		if (empty($username) || empty($password)){
			$errors[] = 'You need to enter a username and password.';
			
		}else{
			$password = md5($password); //Hashed password
			$sql = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
			$result = mysqli_query($conn, $sql);
			
			
			if(mysqli_num_rows($result) == 1 ){
				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = user_id_from_username($username);
				header('Location: member.php');
				exit();
			}else{
				$errors[] = "Username/password combo not found.";
				
			}
		}
		// error_logs($errors);
		
	}

	?>
<!-- style="background-image: url(pictures/intro-books.png); background-position: top;
    background-repeat: no-repeat;
    background-size: cover;" -->
	<body class="background" >
<center>
	<a href="index.php"><img src="pictures/logo_header.png"></a>

		<div class="w3-container" style="background-color: white; margin-left: 30%; margin-right: 30%; border-radius: 12px;">
			<h3>Welcome back!</h3><hr>
	<div class="w3-container" style="background-color: white;">
		<h3>Login</h3>
		<form action="login2.php" method="post">
								<h4><b>Student ID Number</b></h4>
								<input name ="username"><br>

							<h1></h1>

								<h4><b>Password</b></h4>
								<input type = "password" name = "password">
					

					<h4><?
						echo error_logs($errors);
					?></h4>
					

					</br>
					<button action = "login2.php">Let's go!</button>
					<h6>Don't have an account? <a href="register2.php" style="text-decoration: none; color: #44355B;"><strong>Register</strong></a> today!</h6>
	</form></div>

</center>

	<!-- Footer -->
		<?php
			include 'css/script.php';

}
		?>
	</html>


