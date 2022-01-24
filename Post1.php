<!DOCTYPE html>
<html>
	<head>
		<title>Kalakriti - Post page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type"text/css" href="../Mini Project/CSS/Post1.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Galada|Indie+Flower|Lacquer|Lemonada|Lobster|Montserrat|Dancing+Script|Open+Sans+Condensed:300|Pacifico|Poppins|Quicksand|Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Frijole|Give+You+Glory|Monoton|Reenie+Beanie|Rye&display=swap" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<!--<link rel="stylesheet" href="https://shubox-codepen-io.s3.amazonaws.com/codepen.css">
		--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<script src="https://unpkg.com/shubox@0.4.4/dist/shubox.umd.js"></script>
	</head>
	<body>
		<div class="header">
			<a name="backlink" onclick="goBack()"><--BACK</a>
			<a href="#">> POST</a>
		</div>
		
		<div class="container">
		
			<div class="title">
				<h2>Post</h2>
				<p>If you are a seller you can post your work here.</p>
				<p>Or else if you are a customer then you can have a view of post and later can communicate with the artist if interested.</p>
			</div>
			<br/><br/>
			
			
			
				<label for="name">Name :</label>
				<input type="text" name="name" placeholder="Enter your name" required/>
				<br/>
				
				<div class="shubox--container">
				  <form class="shubox--form codepen--center">
					<div class="shubox--upload-target"
						 id="shubox--upload-target"></div>
					
					<div class="shubox--upload-preview"
						 id="shubox--upload-preview"></div>
				  </form>
				</div>
			
		</div>
	</body>
</html> 


	<script>
	// Use an adjacent `previewsContainer` to
	// display the photo thumbnails, their upload
	// progress, and success or failure state

	uploader = new Shubox("#shubox--upload-target", {
	  key: "7e1e4069",
	  transformName: 'multi-upload',
	  previewsContainer: '#shubox--upload-preview',
	  addedfile: function(){ console.log('added') },
	  success: function(){ console.log('file uploaded') },
	  queuecomplete: function(){ console.log('done') },
	  s3Key: "multis/{{filename}}",
	  transformCallbacks: {
		".webp": function(shuboxFile) {
		  console.log(shuboxFile.transforms[".webp"].s3url);
		},
		"200x200#": function(shuboxFile) {
		  console.log(shuboxFile.transforms["200x200#"].s3url);
		},
		"400x400": function(shuboxFile) {
		  console.log(shuboxFile.transforms["400x400"].s3url);
		},
		"800x800": function(shuboxFile) {
		  console.log(shuboxFile.transforms["800x800"].s3url);
		}
	  }
	})
	
	function goBack() {
	  window.history.back();
	}
	</script>

