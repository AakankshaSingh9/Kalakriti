<!DOCTYPE html>
<html>

<head>
	<title>Kalakriti-Admin Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Dashboard.css">
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
					<a href="#">
						<span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
						<span class="title dashboard">
							<h2>Dashboard</h2>
						</span>
					</a>
				</li>
				<li>
					<a href="Dashboard_Admin_Modification.php">
						<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
						<span class="title modifications">
							<h2>Modifications</h2>
						</span>
					</a>
				</li>
				<li>
					<a href="Dashboard_Admin_ResetPwd.php">
						<span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
						<span class="title pwdmenu">
							<h2>Password</h2>
						</span>
					</a>
				</li>
				<li>
					<a href="#" id="logout">
						<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
						<span class="title logout">
							<h2>Sign Out</h2>
						</span>
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
					<img src="../Mini project/image/dpg.jpg">
				</div>
			</div>

			<form method="POST" action="">

				<div class="tabs">
					<main>

						<input id="tab1" type="radio" name="tabs" checked>
						<label for="tab1" name="seller">Seller</label>

						<input id="tab2" type="radio" name="tabs">
						<label for="tab2" name="customer">Customer</label>

						<input id="tab3" type="radio" name="tabs">
						<label for="tab3" name="Order">Order</label>

						<input id="tab4" type="radio" name="tabs">
						<label for="tab4" name="Feedback">Feedback</label>

						<section id="content1">
							<table id="tabs-table-report" border=2>
								<tr>
									<th title="Seller id">S_ID</th>
									<th title="First Name">FNAME</th>
									<th title="Last Name">LNAME</th>
									<th title="Email id">EMAIL_ID</th>
									<th title="Password">PASSWORD</th>
									<th title="Registration Date">DOJ</th>
								</tr>
								<?php
								$db_host = "localhost";
								$db_user = "root";
								$db_pass = "";
								$db_name = "kalakriti";


								$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
								if ($con) {
								}

								$sql_all = "select * from seller_tb";
								$result = mysqli_query($con, $sql_all);
								while ($rows = mysqli_fetch_assoc($result)) {

									echo "<tr>";
									echo "<td>" . $rows['s_id'] . "</td>";
									echo "<td>" . $rows['fname'] . "</td>";
									echo "<td>" . $rows['lname'] . "</td>";
									echo "<td>" . $rows['email_id'] . "</td>";
									echo "<td>" . $rows['password'] . "</td>";
									echo "<td>" . $rows['doj'] . "</td>";
									echo "</tr>";
								}


								?>

							</table>
						</section>

						<section id="content2">
							<table id="tabs-table-report" border="2">
								<tr>
									<th title="Customer id">C_ID</th>
									<th title="First Name">FNAME</th>
									<th title="Last Name">LNAME</th>
									<th title="Email id">EMAIL_ID</th>
									<th title="Password">PASSWORD</th>
									<th title="Registration Date">DOJ</th>
								</tr>

								<?php

								$sql_cust = "select * from customer_tb";
								$result_cust = mysqli_query($con, $sql_cust);
								while ($row_all = mysqli_fetch_assoc($result_cust)) {
									echo "<tr>";
									echo "<td>" . $row_all['c_id'] . "</td>";
									echo "<td>" . $row_all['fname'] . "</td>";
									echo "<td>" . $row_all['lname'] . "</td>";
									echo "<td>" . $row_all['email_id'] . "</td>";
									echo "<td>" . $row_all['password'] . "</td>";
									echo "<td>" . $row_all['doj'] . "</td>";
									echo "</tr>";
								}

								?>

							</table>
						</section>

						<section id="content3">
							<table id="tabs-table-report" border=2>
								<tr>
									<th title="Order id">Order_ID</th>
									<th title="Customer Id">C_ID</th>
									<th title="Seller Id">S_ID</th>
									<th title="Total Amount">TOT_AMT</th>
									<th title="Trn_date">TRN_DATE</th>
								</tr>
								<?php

								$sql_cust = "select * from order_tb";
								$result_cust = mysqli_query($con, $sql_cust);
								while ($row_all = mysqli_fetch_assoc($result_cust)) {
									echo "<tr>";
									echo "<td>" . $row_all['order_id'] . "</td>";
									echo "<td>" . $row_all['c_id'] . "</td>";
									echo "<td>" . $row_all['s_id'] . "</td>";
									echo "<td>" . $row_all['tot_amt'] . "</td>";
									echo "<td>" . $row_all['trn_date'] . "</td>";
									echo "</tr>";
								}

								?>
							</table>
						</section>

						<section id="content4">
							<table id="tabs-table-report" border=2>
								<tr>
									<th title="Srno">SRNO</th>
									<th title="Emailid">EMAILID</th>
									<th title="Feedback">FEEDBACK</th>
									<th title="Date">DATE</th>
								</tr>
								<?php

								$sql_cust = "select * from feedback_tb";
								$result_cust = mysqli_query($con, $sql_cust);
								while ($row_all = mysqli_fetch_assoc($result_cust)) {
									echo "<tr>";
									echo "<td>" . $row_all['srno'] . "</td>";
									echo "<td>" . $row_all['emailid'] . "</td>";
									echo "<td>" . $row_all['feedback'] . "</td>";
									echo "<td>" . $row_all['date'] . "</td>";
									echo "</tr>";
								}
								?>
							</table>
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
		</div>


		</form>

		<?php ?>
</body>

</html>