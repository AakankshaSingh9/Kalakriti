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
		<form method="POST" action="">
			<div class="tabs">
				<main>
					<section>
						<div class="update-records">
							<center>
								<h2>Payment</h2>
							</center>
							<table style="width:100%;">
								<tr>
									<td>Order By :</td>
									<td><input type="number" name="oby" maxlength="5" />
									</td>
								</tr>
								<tr>
									<td>Order to : </td>
									<td>
										<input type="number" name="oto" maxlength="5" />
									</td>
								</tr>
								<tr>
									<td>Total Amount</td>
									<td><input type="number" name="tot_amt" placeholder="Enter Price" />
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="payment" value="Proceed" /></td>
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

			//session_start();

			$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			if ($con) {
			}

			if (isset($_REQUEST['payment'])) {
				if ($_REQUEST['oby'] == "" || $_REQUEST['oto'] == "" || $_REQUEST['tot_amt'] == "") {
					echo "<script>alert('Please Fill all Details');</script>";
				}


				if (isset($_REQUEST['oby']) && isset($_REQUEST['oto']) && isset($_REQUEST['tot_amt'])) {

					$oby = $_REQUEST['oby'];
					$oto = $_REQUEST['oto'];
					$amt = $_REQUEST['tot_amt'];
					$trn_date = date("Y-m-d H:i:s");


					//$sql1="update".$tname." set".$cname."='".$nvalue."' where s_id=".$id;
					$sql1 = "insert into order_tb(c_id,s_id,tot_amt,trn_date) values($oby,$oto,$amt,'$trn_date')";

					if ($resulto = mysqli_query($con, $sql1)) {
						echo "<script>confirm('Record stored successfully! Do You want to continue?');</script>";
						echo "<script>window.location.replace('Customer.php')</script>";
					} else
						echo "<script>confirm('Record was not stored successful! Please try again !');</script>";
				}
			}

			?>

	</div>
	</form>
</body>

</html>