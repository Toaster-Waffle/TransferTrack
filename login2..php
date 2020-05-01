<!DOCTYPE html>
<html>

<?php
	include 'includes/head+style.php';
?>
<!-- Header -->
	<?php
		include 'includes/header.php';
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

	<body class="background">
<center>

	<div class="w3-container" style="background-color: white;">
		<h3>Login</h3>
		<form action="login.php" method="post">
								<h4><b>Username</b></h4>
								<input name ="username"><br>

							<h1></h1>

								<h4><b>Password</b></h4>
								<input type = "password" name = "password">
					</form>
					</br>
					<button action = "login.php">Aight les go</button>
					<h6>Don't have an account? <a href="register.php" style="text-decoration: none; color: #44355B;"><strong>Register</strong></a> today!</h6>
	</div>

</center>

	<!-- Footer -->
		<?php
			include 'includes/footer.php';
}
		?>
	</html>


