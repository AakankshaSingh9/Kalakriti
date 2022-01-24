<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Dashboard1.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="../ChatApp/javascript/pass-show-hide.js"></script>
	<script src="../ChatApp/javascript/signup.js"></script>
</head>

<body>
	<div class="container">

		<?php
			require('DashboardCustomerHeader.php');
		?>

		<form method="get" action="index.php">
			<div class="tabs">
				<main>
					<section>
						<div class="update-records">
							<center>
								<h2>Payment</h2>
							</center>
							<table style="width:100%;">

								<tr>
									<td>Purpose </td>
									<td>
										<input type="text" name="purpose" required />
									</td>
								</tr>
								<tr>
									<td>Total Amount</td>
									<td><input type="number" name="amt" placeholder="Enter Price" required />
									</td>
								</tr>
								<tr>
									<td>Phone </td>
									<td><input type="number" name="phone" maxlength="10" required />
									</td>
								</tr>
								<tr>
									<td>Buyer Name</td>
									<td>
										<input type="text" name="name" required />
									</td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="text" name="mail" required />
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="payment" value="Payment" /></td>
								</tr>
							</table>
						</div>
					</section>
				</main>
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

			if (isset($_REQUEST['payment'])) {
				if ($_REQUEST['purpose'] == "" || $_REQUEST['amt'] == "" || $_REQUEST['phno'] == "" || $_REQUEST['name'] == "" || $_REQUEST['mail'] == "") {
					echo "<script>alert('Please Fill all Details');</script>";
				}


				if (isset($_REQUEST['payment']) && isset($_REQUEST['amt']) && isset($_REQUEST['phno']) && isset($_REQUEST['name']) && isset($_REQUEST['mail'])) {

					$payment = $_REQUEST['payment'];
					$amt = $_REQUEST['amt'];
					$phno = $_REQUEST['phno'];
					$name = $_REQUEST['name'];
					$mail = $_REQUEST['mail'];
					$trn_date = date("Y-m-d H:i:s");

					$sql1 = "insert into payment(purpose,amt,phno,bname,email,trn_date) values('$purpose',$amt,$phno,'$bname','$email','$trn_date')";

					if ($resultp = mysqli_query($con, $sql1)) {
						echo "<script>confirm('Record stored successfully! Do You want to continue?');</script>";
					} else
						echo "<script>confirm('Record was not stored successful! Please try again !');</script>";
				}
			}

			?>

	</div>
	</form>
</body>

</html>