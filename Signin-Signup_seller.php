<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="stylesheet" href="../Mini Project/CSS/signin-signup.css">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">  
		<title>Signup and login</title>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	</head>
	<body>
		 <div class="container">
			<div class="forms-container">
				<div class="signin-signup">
					<form action="Dashboard_Seller.php" class="sign-in-form" method="POST" enctype="multipart/form-data">
						<h2 class="title">Sign in</h2>
						<p>(For Seller)</p>
						<div class="input-field">
							<i class="fas fa-user"></i>
							<input type="text" placeholder="Enter Registered Email id" name="user" id="user" required>
						</div>
						<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="password" placeholder="Password" id="password" name="pwd" required> 
							<i class="fa fa-eye" id="togglePassword"></i><!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>-->
						</div>
						<input type="submit" value="Login" class="btn" name="login">
						<p id="fp">Forgot password ? <a href="#">Click here</a></p>
						
					</form>
					
					
					<form action="" class="sign-up-form" method="POST" enctype="multipart/form-data" >
						<h2 class="title">Sign Up</h2>
						<p>(For Seller)</p>
						<div class="input-field">
							<i class="fas fa-user"></i>
							<input type="text" placeholder="First Name" name="fname" required>
						</div>
						<div class="input-field">
							<i class="fas fa-user"></i>
							<input type="text" placeholder="Last name" name="lname" required>
						</div>
						<div class="input-field">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" placeholder="Email id" name="email" required>
						</div>						
						<div class="input-field">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input type="password" placeholder="Password" name="password" id="password" required>
							<i class="fa fa-eye" id="togglePassword"></i>
						</div>
						<div class="input-field">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input type="password" placeholder="Confirm Password" name="cpassword" required>
							
						</div>
						<br/><p style="color:red;">*All the fields are mandatory.</p><br/><br/>
						<input type="submit" value="Sign Up" class="btn" name="submitrec">
						
						
					</form>
				</div>
			</div>
			
			<div class="panels-container">
				<div class="panel left-panel">
					<div class="content">
						<h3>New Here ?</h3>
						<p>Join us to be a part of wonderful community.</p>
						<button class="btn transparent" id="sign-up-btn">Sign up</button>
					</div>
					
					<img src="../Mini Project/image/S1.svg" class="image" alt="">
				</div>
				
				<div class="panel right-panel">
					<div class="content">
						<h3>One of Us ?</h3>
						<p>Click here to access your work.</p>
						<button class="btn transparent" id="sign-in-btn">Sign in</button>
					</div>
					
					<img src="../Mini Project/image/S3.svg" class="image" alt="">
				</div>
			</div>
			
		 </div>
		 <script>/*src="../Mini Project/JS/app.js"*/
			const sign_in_btn = document.querySelector("#sign-in-btn");
			const sign_up_btn = document.querySelector("#sign-up-btn");
			const container = document.querySelector(".container");

			sign_up_btn.addEventListener('click',() => {
				container.classList.add("sign-up-mode");
			});

			sign_in_btn.addEventListener('click',() => {
				container.classList.remove("sign-up-mode");
			});
		 </script>
		
		<script>
			const togglePassword = document.getElementById('togglePassword');
			const password = document.getElementById('password');
			togglePassword.addEventListener('click', function (e) {
				// toggle the type attribute
				const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
				password.setAttribute('type', type);
				// toggle the eye slash icon
				this.classList.toggle('fa-eye-slash');
			});
			
			
			//sessionStorage.setItem("", "Shrek");					
					
		</script>
		 <?php
	//require('db.php');
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="kalakriti";
	
	//session_start();
	
	$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if($con)
	{}
	if(isset($_REQUEST['submitrec']))
	{
		if($_REQUEST['fname']=="" || $_REQUEST['lname']=="" || $_REQUEST['email']==""  || $_REQUEST['password']=="")
		{
			echo "<script>alert('Please Fill all Details');</script>";
		}
	
	
		if (isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['email']) && isset($_REQUEST['password']))
		{				
					$fname=$_REQUEST['fname'];
					$lname=$_REQUEST['lname'];
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];
					$cpassword=$_REQUEST['cpassword'];
					$trn_date = date("Y-m-d H:i:s");
					
					//$_SESSION['emailid']=$_REQUEST['email'];

				if($password==$cpassword)
				{	
					$sqlirec="Insert into seller_tb(fname,lname,email_id,password,DOJ) values('$fname','$lname','$email','$password','$trn_date')";
				}
				
				if($result=mysqli_query($con,$sqlirec))
				{
					echo "<script>confirm('You are registered successfully! Do You want to continue?');</script>";
					//$_SESSION['email']=$email;
				}
				else 
					echo "<script>confirm('Not registered successfully! Please Try Again?');</script>";
								
		}
	}
	
	if(isset($_REQUEST['login']))
	{
		if($_REQUEST['user']=="" || $_REQUEST['pwd']=="")
		{
			echo "<script>alert('Please Fill all Details');</script>";
		}
	
	
		if (isset($_REQUEST['user']) && isset($_REQUEST['pwd']))
		{				
					// removes backslashes
					 $user = stripslashes($_REQUEST['user']);
					 //escapes special characters in a string
					 $pwd = stripslashes($_REQUEST['pwd']);
					 //Checking is user existing in the database or not
					 $query = "SELECT * FROM seller_tb WHERE email_id='$user'and password='$pwd'";
					 $result1 = mysqli_query($con,$query) or die(mysql_error());
					 $rows = mysqli_num_rows($result1);
					 //"<script>sessionStorage.setItem('mailid','$user');</script>";
					
					if($rows==1)
					{
						//$_SESSION['user'] = $user;
						// Redirect user to Dashboard.php
						//header("Location:Dashboard_Seller.php");
						echo "<script>window.location.replace('Dashboard_Seller.php');</script>";
					}
					else
					{
						echo "<script>confirm('You have entered wrong username/password');</script>";
					}
		}

		
	}
				mysqli_close($con);
	?>
		 
	</body>
</html>