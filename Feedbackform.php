<html>
	<head>
		<title>Feedback Form</title>		
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<link rel="stylesheet" href="../Mini Project/CSS/main.css" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		<style>	
		img{
			width:700px;
		}
		h1{
			font-family:Monsterrat;
			font-size:59px;
			letter-spacing:3px;
		}
		h3{
			font-family:Lemonada;
			font-size:20px;
			color:#a6a6a6;
		}
		.label{
			color: #333;
			font-size:16px;
			font-family:Poppins;
			letter-spacing:1px;
		}
		input[type='text'],select{
			width:370px;
			padding:5px;
			font-family:poppins;
			border-radius:5px;
			border:1px solid #bfbfbf;
		}
		.feedback{
			padding:5px;
			font-family:poppins;
			border-radius:5px;
			border:1px solid #bfbfbf;
		}
		.form{
			position:relative;
			top:100px;
			left:50px;
			padding:0px 190px;
		}
		.container-fluid{
			overflow:hidden;
		}
		input[type='submit']
		{
			width:100px;
			background-color:#A64AC9;
			color:#fff;
			border-radius:55px;
			padding:5px;
			font-family:poppins;
			letter-spacing:2px;
			font-size:18px;
			border:1px;
		}
		input[type='submit']:hover
		{
			width:100px;
			background-color:#5e2376;
			color:#fff;
		}
		
		</style>
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-md-6">
					<img src="../Mini Project/image/FF1.svg">
				</div>
				<div class="form">
				<div class="col-md-5">
					<center><h1>Feedback</h1>
					<h3>Your feedback is valuable to us</h3></center><br/><br/>
					
					<form action="" method="POST" >
						<span class="label">Email id</span><br/><br/>
						<input type="text" name="email"  required/><br/><br/><br/>
						<span class="label">Category</span><br/><br/>
						<select name="category">
							<option>Suggestion</option>
							<option>Complaint</option>
							<option>Review</option>
						</select><br/><br/><br/>
						<span class="label">Message</span><br/><br/>
						<textarea rows="5" cols="50" name="feedback"></textarea><br/><br/>
						<input type="submit" value="submit" name="btn">
					</form>
					
				</div>
			</div>
		</div>
<?php
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="kalakriti";
	
	$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if($conn){}

	if(isset($_REQUEST['btn']))
	{
		if($_REQUEST['email']=="" || $_REQUEST['category']=="" || $_REQUEST['feedback']=="")
		{
			
		}
		if(isset($_REQUEST['email']) && isset($_REQUEST['category']) && isset($_REQUEST['feedback']))
		{
			$email=$_REQUEST['email'];
			$feedback=$_REQUEST['feedback'];
			$category=$_REQUEST['category'];
			$trn_date = date("Y-m-d H:i:s");
			
			$queryf="Insert into feedback_tb(emailid,feedback,Date,category ) values('$email','$feedback','$trn_date', '$category')";
			if($r=mysqli_query($conn,$queryf))
			{
				echo "<script>confirm('Thank you for your feedback! Feel free to explore !!');</script>";
				echo "<script>window.history.back();</script>";
			}
			else
				echo "<script>alert('Plaese do not leave ! Your response was not submitted successfully.Please try again later!');</script>";
		}
	}
?>
</body>
</html>