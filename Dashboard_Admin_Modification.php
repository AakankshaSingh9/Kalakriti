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
							<a href="#">
								<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
								<span class="title modifications"><h2>Modifications</h2></span>
							</a>
						</li>
						<li>
							<a href="Dashboard_Admin_ResetPwd.php">
								<span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
								<span class="title pwdmenu"><h2>Password</h2></span>
							</a>
						</li>
						<li>
							<a href="#" id="logout">
								<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
								<span class="title logout"><h2>Sign Out</h2></span>
							</a>
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
					 	<section>
						<div class="update-records">
								<center><h2>Update Records</h2></center>
							<table style="width:100%;">
								<tr>
									<td>Select Table</td>
									<td>
										<select name="table_name">
											<option value="seller_tb">Seller</option>
											<option value="customer_tb">Customer</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Select Column</td>
									<td>
										<select name="cname">
											<option value="fname">First Name</option>
											<option value="lname">Last Name</option>
											<option value="email_id">Email_id</option>
											<option value="password">Password</option>
											<option value="DOJ">DOJ</option>
										</select>
									</td>									
								</tr>
								<tr>
									<td>Enter Value</td>
									<td><input type="text" name="nvalue" />
									</td>
								</tr>
								<tr>
									<td>Select Id</td>
									<td>
										<input type="text" name="value" maxlength="5"/>
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="modify"/></td>
								</tr>
							</table>
						</div>
						<div class="delete-records">
								<center><h2>Delete Records</h2></center>
							<table style="width:100%;">
								<tr>
									<td>Select Table</td>
									<td>
										<select name="table_name1">
											<option>Seller</option>
											<option>Customer</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Select Id</td>
									<td>
										<input type="text" name="value1" maxlength="5"/>
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="deleteval"/></td>
								</tr>
							</table>
						</div>
						</section>						
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
				
				document.getElementById("logout").addEventListener("click",show);
			function show()
			{
				confirm("Do you want to logout?");
				window.location.replace('Mainpage.php');
			}
				
			</script>
			<?php
				$db_host="localhost";
				$db_user="root";
				$db_pass="";
				$db_name="kalakriti";
				
				$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
				if($con)
				{}
			
				 if(isset($_REQUEST['modify']))
				{
					if($_REQUEST['table_name']=="" || $_REQUEST['cname']=="" || $_REQUEST['nvalue']=="" || $_REQUEST['value']=="" )
					{
						echo "<script>alert('Please Fill all Details');</script>";
					}
				
				
					if(isset($_REQUEST['table_name']) && isset($_REQUEST['cname']) && isset($_REQUEST['nvalue']) && isset($_REQUEST['value']))
					{
						
						$tname=$_REQUEST['table_name'];
						$cname=$_REQUEST['cname'];
						$nvalue=$_REQUEST['nvalue'];
						$id=$_REQUEST['value'];
						
						if($tname=='seller_tb')
							//$sql1="update".$tname." set".$cname."='".$nvalue."' where s_id=".$id;
							$sql1="update $tname set $cname='$nvalue' where s_id=$id";
						
						else
							$sql1="update $tname set $cname='$nvalue' where c_id=$id";
						
						if($result1=mysqli_query($con,$sql1))
							echo "<script>confirm('Record updated successfully! Do You want to continue?');</script>";
						else
							echo "<script>confirm('Record updation unsuccessful! Please try again !');</script>";
						
					}
				}
				elseif(isset($_REQUEST['deleteval']))
				{
					 if($_REQUEST['table_name1']=="" || $_REQUEST['value1']=="" )
					{
						echo "<script>alert('Please Fill all Details');</script>";
					}
				
				
					if(isset($_REQUEST['table_name1']) && isset($_REQUEST['value1']))
					{
						
						$tname=$_REQUEST['table_name1'];
						$id=$_REQUEST['value1'];
						
						if($tname=='seller_tb')
							//$sql1="update".$tname." set".$cname."='".$nvalue."' where s_id=".$id;
							$sql1="delete from $tname where s_id=$id";
						
						else
							$sql1="delete from $tname where c_id=$id";
						
						if($result1=mysqli_query($con,$sql1))
							echo "<script>confirm('Record updated successfully! Do You want to continue?');</script>";
						else
							echo "<script>confirm('Record updation unsuccessful! Please try again !');</script>";
						
					}
				}
			
			?>
				
			</div>					
		</form>
	</body>
</html>