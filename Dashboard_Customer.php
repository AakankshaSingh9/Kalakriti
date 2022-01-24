<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Dashboard.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</head>

<body>
	<div class="container">
		<?php
		require('DashboardCustomerHeader.php');
		?>
		<div class="welcome">
			<center>
				<h2 style="font-size:36px;font-family:Quicksand;letter-spacing:2px;font-weight:200;">We Welcome you in the community</h2>
				<br /><br />
				<img src="../Mini project/image/welcome.svg" style="height:500px;" />
			</center>
		</div>
	</div>


	<script>
		function toggleMenu() {
			let toggle = document.querySelector('.toggle');
			let navigation = document.querySelector('.navigation');
			let main = document.querySelector('.main');
			toggle.classList.toggle('active');
			navigation.classList.toggle('active');
			main.classList.toggle('active');
		}

		document.getElementById("logout").addEventListener("click", show);

		function show() {
			var ans = confirm("Do you want to logout?");
			if (ans)
				window.location.replace('Mainpage.php');
			else {}
		}
	</script>


	</form>
	</div>
</body>

</html>