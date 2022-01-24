<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard-POSTCustomer</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Dashboard.css">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<style>
		td{
			font-size:18px;
			padding:20px;
			
		}
		table{
			margin:20px;
			width:90%;
			
		}
		</style>
	</head>
	<?php 
		$db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="kalakriti";
		
		$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
		if($con)
		{}
	
		$sql = "Select * from post";
		$res=mysqli_query($con,$sql);																						
											
	?>
	<body>
	
		<div class="container">
				<?php
					include("dashheader.php");
				?>
				
				<div class="">
					<form>
						<table border="1" style="border-collapse:collapse;width:80%;">
							<tr>
								<td style="text-align:center;font-size:22px;"><b>Seller Name</b></td>
								<td style="text-align:center;"><b>Post</b></td>
							</tr>
							<?php 
								while($rows=$res->fetch_assoc())
								{
							?>
							<tr>
								<td><?php echo $rows['name']; ?></td>
								<td><img src="uploads/<?php echo $rows['file']; ?>" style="width:120px;height:90px;"></td>
							</tr>
							<?php } ?>
						</table>
					</form>
				</div>
				
		</div>
	
	</body>
</html>
		