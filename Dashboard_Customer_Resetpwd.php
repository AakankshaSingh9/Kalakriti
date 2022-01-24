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
		<?php
		require('DashboardCustomerHeader.php');
		?>
		<form method="POST" action="">
			<div class="tabs">
				<main>
					<section>
						<div class="update-records_customer">
							<center>
								<h2>Reset Password</h2>
							</center>
							<table style="width:100%;">

								<tr>
									<td>Enter Email-Id </td>
									<td>
										<input type="text" name="id" />
									</td>
								</tr>
								<tr>
									<td>Enter New Password</td>
									<td><input type="password" name="newpwd" />
									</td>
								</tr>
								<tr>
									<td>Re-type new password</td>
									<td>
										<input type="password" name="resetpwd" />
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="modifypwd" /></td>
								</tr>
							</table>
						</div>

					</section>
				</main>
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
	<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "kalakriti";

	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if ($con) {
	}

	if (isset($_REQUEST['modifypwd'])) {
		if ($_REQUEST['id'] == "" || $_REQUEST['newpwd'] == "" || $_REQUEST['resetpwd'] == "") {
			echo "<script>alert('Please Fill all Details');</script>";
		}


		if (isset($_REQUEST['id']) && isset($_REQUEST['newpwd']) && isset($_REQUEST['resetpwd'])) {
			$id = $_REQUEST['id'];
			$npwd = $_REQUEST['newpwd'];
			$rpwd = $_REQUEST['resetpwd'];

			if ($npwd == $rpwd) {
				//$sql1="update".$tname." set".$cname."='".$nvalue."' where s_id=".$id;
				$sql1 = "update customer_tb set password='$npwd' where email-id='$id'";

				if ($result1c = mysqli_query($con, $sql1))
					echo "<script>confirm('Record updated successfully! Do You want to continue?');</script>";
				else
					echo "<script>confirm('Record updation unsuccessful! Please try again !');</script>";
			} else {
				echo "<script>confirm('New Password and Re-type Password are not same!');</script>";
			}
		}
	}

	?>
	</form>
</body>

</html>