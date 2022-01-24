<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Dashboard1.css">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	</head>
	<body>
	
	
			<div class="container">
				<div class="navigation">
					<ul>
						<li>
							<a href="#"></a>
								<span class="icon"><img src="../Mini Project/image/Logo.png" style="height:60px;"></span>
								<!--<span class="title"><h2>Brand Name</h2></span>-->
							</a>
						</li>
						<li>
							<a href="Dashboard_Admin.php">
								<span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
								<span class="title dashboard"><h2>Dashboard</h2></span>
							</a>
						</li>
						<li>
							<a href="Dashboard_Admin_Modification.php">
								<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
								<span class="title modifications"><h2>Modifications</h2></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>
								<span class="title help"><h2>Help</h2></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
								<span class="title pwdmenu"><h2>Password</h2></span>
							</a>
						</li>
						<li>
						<a href="#">
							<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
							<span class="title logout"><h2>Sign Out</h2></span>
						</li> 
					</ul>
				</div>
				
				<div class="main">
					<div class="topbar">
						<div class="toggle" onclick="toggleMenu();"></div>
						<!--<div class="search">
							<label>
								<input type="text" placeholder="Search here"><i class="fa fa-search" aria-hidden="true"></i>
							</label>
						</div>-->
						<div class="user">
							<img src="user.jpg">
						</div>						
					</div>

					<form method="POST" action="">
						<div class="tabs">
							<main>
								<center><h2>Change Password</h2></center>
								Email 
								<input type="text" name="email" required/>
								Password
								<input type="password" name="pwd" required/>
								Re-Type Password
								<input type="password" name="rpwd" required/>
								
							</main>					
						</div>
			
			<script>
				function toggleMenu()
				{
					let toggle = document.querySelector('.toggle');
					let navigation = document.querySelector('.navigation');
					let main = document.querySelector('.main');
					toggle.classList.toggle('active');
					navigation.classList.toggle('active');
					main.classList.toggle('active');
				}
			</script>
			
			
					</div>
					
</form>
	</body>
</html>