<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Dashboard-POST</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Dashboard.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<style>
		input[type='text'],
		textarea {
			border-radius: 5px;
			width: 198px;
			font-size: 14px;
			font-family: poppins;
			border: 1px solid #333;
			padding: 2px;
			resize: none;
		}

		input[type='text'],
		textarea:focus {
			border: 1px solid blue;
		}

		#postsellerlabel,
		#fileToUpload {
			font-size: 15px;
			color: #a6a6a6;
			font-family: poppins;
			display: block;
		}

		table,
		td {
			padding: 20px;
		}

		input[type='submit'] {
			border: 2px solid maroon;
			padding: 9px 15px;
			color: #fff;
			display: block;
			margin-left: 130px;
			border-radius: 5px;
			background-color: #1c232d;
			transition: .9s;
		}

		input[type='submit']:hover {
			background-color: #A64AC9;
		}

		form {
			border: 2px dashed;
			border-radius: 20px;
			width: 550px;
			background-color: #fae6ff;
		}

		tbody {
			position: relative;
			left: 59px;
		}
	</style>
</head>

<body>
	<div class="container">
		<?php
		include("dashheader.php");
		?>

		<div class="Post">
			<center><br />
				<h1>POST</h1><br />
				<form method="post" action="PostSeller.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td>
								Enter Name
							</td>
							<td>
								<input id="postsellerlabel" type="text" name="sname" required />
							</td>
						</tr>
						<tr>
							<td>
								Post details
							</td>
							<td>
								<textarea rows="3" cols="30" name="pdetails"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								Select Files
							</td>
							<td>
								<input type="file" name="fileToUpload" id="fileToUpload">
							</td>
						</tr>
						<tr>
							<br />
							<td colspan=2>
								<input type="submit" name="submit">
							</td>
						</tr>
					</table>
			</center>
			</form>
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
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if ($con) {
	}
	if (isset($_REQUEST['submit'])) {
		if (isset($_REQUEST['sname']) && isset($_REQUEST['pdetails']) && isset($_FILES['fileToUpload'])) {
			$name = $_REQUEST['sname'];
			$details = $_REQUEST['pdetails'];
			$filename = $_FILES['fileToUpload'];
			$fname = $filename['name'];
			$date = date("Y-m-d H:i:s");


			if (!file_exists($target_file)) {
				/*if($imageFileType == "jpg" && $imageFileType == "png" && $imageFileType == "jpeg" && $imageFileType == "gif" ) 
							{*/
				if ($_FILES["fileToUpload"]["size"] < 1500000) {
					$sql_post = "INSERT INTO post(name,details,file) VALUES('$name','$details','$fname')";
					$res = mysqli_query($con, $sql_post);

					if ($res)
						echo "<script>confirm('Data recorded successfully!');</script>";
					else
						echo "<script>confirm('Operation was unsuccessful! Please Try Again!');</script>";
				} else {
					echo "</script>alert('Sorry, your file is too large.');</script>";
					$uploadOk = 0;
				}
				/*}
							else
							{
								echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
									$uploadOk = 0;
							}*/
			} else {
				echo "<script>alert('Sorry, file already exists.');</script>";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "<script>alert('Sorry, your file was not uploaded.');</script>";
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
					echo "<script>confirm('File has been uploaded successfully.');</script>";
				else
					echo "<script>confirm('Sorry, there was an error uploading your file.')</script>";
			}
		} else {
			echo "<script>alert('All the fields are required to proceed further.');</script>";
		}
	} else {
	}
	?>
</body>

</html>