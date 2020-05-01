
<?php
include 'css/style.php';
?>
<body class="background">
<center>

	<div class="w3-container" style="background-color: white;">
		<h3>Welcome aboard!</h3>
		<form action="login.php" method="post">
								<h4><b>First name</b></h4>
								<input name ="first_name"><br>

								<h4><b>Last name</b></h4>
								<input name ="last_name"><br>

								<h4><b>Student ID</b></h4>
								<input name ="username"><br>

							<h1></h1>

								<h4><b>Password</b></h4>
								<input type = "password" name = "password">

								<h4><b>Retype password</b></h4>
								<input type = "cpassword" name = "password">

								<h4><b>Email</b></h4>
								<input type = "email" name = "email">

								


					</form>
					</br>
					<a href="login.php"><button style="margin-bottom: 20px;">Log me in!</button></a>
					</br>
	</div>

</center>

<?php
include 'css/script.php';
?>

</body>
</html>