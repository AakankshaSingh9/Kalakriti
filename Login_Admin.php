<html>
<meta charset="utf-8">
 <head>
 <title>Admin Login</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
		<style>
			.clearfix:before, .clearfix:after{
			 content: "";
			 display: table;
			}
			.clearfix:after{
			 clear: both;
			}
			#link_1{
			 color:/*#0067ab*/#fff;
			 text-decoration:none;
			 font-family: poppins;
			 font-size:18px;
			}
			#link_2:hover{
			 text-decoration:none;
			}
			#link_2{
			 color: #b3ffff;
			}
			.form{
			 width: 400px;
			 margin: 0 auto;
			 font-family: poppins;
			 font-size:18px;
			 z-index: 5;
			 background-color: rgb(0,0,0); /* Fallback color */
			 background-color: rgb(248 244 244 / 50%);
			 position: absolute;
			 top: 21%;
			 left: 35%;
			 padding:25px;
			}
			input[type='text'], input[type='email'],
			input[type='password'] {
			 width: 200px;
			 border-radius: 2px;
			 border: 1px solid #CCC;
			 padding: 10px;
			 color: #333;
			 font-size: 14px;
			 margin-top: 10px;
			}
			input[type='submit']{
			 padding: 10px 25px 8px;
			 color: #fff;
			 font-family: poppins;
			 background-color: #bf80ff;
			 text-shadow: rgba(0,0,0,0.24) 0 1px 0;
			 font-size: 16px;
			 width:200px;
			 box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
			 border: 1px solid #bf80ff;
			 border-radius: 50px;
			 margin-top: 10px;
			 cursor:pointer;
			 font-size:18px;
			}
			input[type='submit']:hover {
			 background-color: #9933ff;
			}
			#heading{
			 font-size:35px;
			 font-family: poppins;
			 color:#333;
			}
			/*forget*/
			.error p {
			color:#FF0000;
			font-size:20px;
			font-weight:bold;
			margin:50px;
			}
			/*eye security pwd*/
			.field-icon {
			 float: right;
			 margin-left: -25px;
			 margin-top: -25px;
			 position: relative;
			 z-index: 2;
			 top: 45px;
			 left: -108px;
			}
			.back_form{
			 background-image: url('../Mini project/image/p3.jpg');
			 width:100%;
			 background-repeat: no-repeat;
			 height:690px;
			 filter: blur(5px);
			 -webkit-filter: blur(1.5px);
			background-size: cover;
			background-position: center;
			}
	</style>
	 </head>
	 <body>
	 
		<div class="back_form"></div>
			<div class="form box">
			<center><h1 id="heading">Log In</h1>
			<form action="" method="post" name="login">
			<input type="text" name="username" placeholder="Username" required />
			<input type="password" name="pwd" placeholder="Password" required /><br/>
			<input name="submit" type="submit" value="Login" /><br><br>
			<a href="forgotpwd.php"><span style="color:red;">Forgot password?</a>
			</form>
			</center>
		</div>
		
		<?php
		$db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="kalakriti";
		
		//session_start();
		
		$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
		if($con)
		{
			
		}
		
		// If form submitted, insert values into the database.
		if (isset($_REQUEST['submit'])){
		
		
		// removes backslashes
		$username = stripslashes($_REQUEST['username']);
		
		//escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username);
		$pwd = stripslashes($_REQUEST['pwd']);
		$pwd = mysqli_real_escape_string($con,$pwd);
		
		//Checking is user existing in the database or not
		$query = "SELECT * FROM admin_tb WHERE username='$username' and password='$pwd'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows==1){
		//$_SESSION['username'] = $username;
		
		// Redirect user to index.php
		//header("Location: option.php");
		echo "<script>window.location.replace('Dashboard_Admin.php');</script>";
					
		}
		else{
		echo "<script>confirm('Entered username and password is wrong !!! Please Enter correct username and password. </script>";
		}
		}
		
		?>
			
		</body>
		</html>
