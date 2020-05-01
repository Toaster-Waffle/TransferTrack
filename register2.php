<!DOCTYPE html>
<html>

<?php
	include 'css/style.php';
	?>

<body class = "background">

<!--<div style="background-image:url('pictures/patternNew3.png');background-repeat:repeat; padding: 140px;">-->
<?php 
include 'core/init.php';

 
// Add each line to an array
if(logged_in()===true){
	
	header('Location: index.php');
	

}else{
	


	// Line has already been included
	if(empty($_POST) === false){
		$required_fields = array('username','password','cpassword','first_name','last_name','email');
		foreach($_POST as $key => $value){
			if(empty($value)&& in_array($key, $required_fields) === true){
				$errors[] = 'Fields marked with an asterisk are required';
				break 1;
			}
		}
		if(empty($errors) === true){
			if(user_exists($conn, $_POST['username'])=== true){
				$errors[] = '- Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
			}
			if(preg_match("/\\s/", $_POST['username']) == true){
				$errors[] = '- No Spaces are allowed in the username.';
			}
			if(preg_match('/^[A-Za-z0-9._-]+$/', $_POST['username']) == false){
				$errors[] = '- Certain special characters are not allowed.';
			}
			if(strlen($_POST['username']) < 3 || strlen($_POST['username']) > 25){
				$errors[] = '- Username must atleast be 3-25 Characters.';
			}
			
			
			if(preg_match("/[a-zA-Z]/", $_POST['password'] ) == false){
				$errors[] = '- Password must have A-Z characters.';
			}
			if(preg_match("/\d/", $_POST['password']) == false){
				$errors[] = '- Password must have atleast 1 number.';
			}
			if(strlen($_POST['password']) <= 6 || strlen($_POST['password']) >= 25){
				$errors[] = '- Your must password must be between 6-25 characters';
			}
			if($_POST['password'] !== $_POST['cpassword']){
				$errors[] = '- Your password must match with confirmation password.';
			}
			if(preg_match("/[a-zA-Z]/", $_POST['first_name'] ) == false){
				$errors[] = '- First name must have A-Z characters.';
			}
			if(preg_match("/[a-zA-Z]/", $_POST['last_name'] ) == false){
				$errors[] = '- Last name must have A-Z characters.';
			}
			if(preg_match("/\d/", $_POST['first_name']) == true){
				$errors[] = '- Numbers are now allowed in the First name.';
			}
			if(preg_match("/\d/", $_POST['last_name']) == true){
				$errors[] = '- Numbers are now allowed in the Last name.';
			}
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
				$errors[] = '- A valid email is required.';
			}
			if(email_exists($conn, $_POST['email']) === true){
				$errors[] = '- Sorry, the email \'' . $_POST['email'] . "\" is already taken.";
			}
			
		}
	}

	?>



	<!-- WORK ON THIS SEPERATE PAGE -->
	<?php 
	if(isset($_GET['success']) && empty($_GET['success'])){
	?> 

	<!-- Header -->
	<body>
	<!-- Footer -->
		
		<h1>Welcome</h1>
		
		
	</div>
		</body>
	</html>

	<?php
		echo "errr";

		
		
	}else{

		if(empty($_POST)=== false && empty($errors)=== true){
			$register_data = array(
				'username' 		=> $_POST['username'],
				'password' 		=> $_POST['password'],
				'first_name'	=> $_POST['first_name'],
				'last_name' 	=> $_POST['last_name'],
				'email' 		=> $_POST['email'],
				'email_code'	=>md5($_POST['username'] + microtime())
			);
			Register_user($register_data);
			$EMAIL = $register_data['email'];
			$subject = 'Activate your account';
			$body = "Hello ". $register_data['username'] . ",\n\n In order to activate your account, you must click the link below: \n\n http://localhost/project/activate.php?email=". $EMAIL. "&&email_code=".$register_data['email_code']."\n\n-GamersGrid";
			require 'PHPMailer_5.2.4/class.phpmailer.php';
			require_once('PHPMailer_5.2.4/class.smtp.php');
			
			$mail = new PHPMailer();  // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465; 
			$mail->Username = 'julioaidenmorales@gmail.com';  
			$mail->Password = 'oilujjcmmaj16';           
			$mail->SetFrom('noreply@gmail.com', 'julio');
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->AddAddress($EMAIL);
				if(!$mail->Send()) {
					$error = 'Mail error: '.$mail->ErrorInfo; 
					return false;
				} else {
					$error = 'Message sent!';
					header('Location: register.php?success');
					exit();
					return true;
				}
			
			
		}else{
			// error_logs($errors);
		}
	?>

		<head>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><!-- jQuery Library-->
			<link rel="stylesheet" href="css/passwordscheck.css" /><!-- Include Your CSS file here-->		
			<script src="js/passwordscheck.js"></script><!-- Include Your jQUery file here-->
		</head>
		<center><a href="index.php"><img src="pictures/logo_header.png"></a>

		<div class="w3-container" style="background-color: white; margin-left: 30%; margin-right: 30%; border-radius: 12px;">
			<h3>Welcome aboard!</h3>
			<div style="text-align: left; padding-left: 15px;"><font color="red"><h6><b><?php error_logs($errors); ?></b></h6></font></div>

				<form action="login.php" method="post">
								<h4><b>First name</b></h4>
								<input name ="first_name"><br>

								<h4><b>Last name</b></h4>
								<input name ="last_name"><br>

								<h4><b>Student ID</b></h4>
								<input name ="username"><br>

								<h4><b>Email</b></h4>
								<input name ="email"><br>

							<h1></h1>
			   <h4><b>Password<font color="red">*</font></b></h4>
			   <input type="password" name="password" id = "password" ></li>
			   <center><div style="background-color: rgba(170, 170, 170,.3);width: 300px; height: 25px;text-align: center;border-radius: 7px;">Password strength: <span id="result"></span></div></center>
			   </form></br>
			   <a href="login2.php" action="register2.php"><button style="margin-bottom: 20px;">Log me in!</button></a>
			  <!--  <button class="w3-btn w3-large w3-btn-block w3-hover-white w3-border w3-border-black" style="background-color: #00e600"><a class="button" action="register.php" style="text-decoration: none;"><font color="black">Register</font></a></button> -->
			   <!-- <input type="submit" value="Register"></li> -->
	
	</br></center></div>	   
			

	<?php
	}
	?>
	</div>
	</body>
	<!-- Footer -->
		<?php
		include 'css/script.php';
			}
		include 'css/script.php';
		?>
	</html>
