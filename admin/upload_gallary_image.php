<?php
     session_start();
     if(!isset($_SESSION['usrnm'])){
        header("Location:index.html");
     }

?>

<?php  
 include_once 'dbconnect.php';
    $connect = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

 // $connect = mysqli_connect("localhost", "root", "", "dcl");  
 if(isset($_POST["insert"]))  
 {  
 	  $category=$_POST['Category'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,category) VALUES ('$file','$category')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 } 
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>DCIL Admin Panel</title>

	<!-- <<<<<<<<<<< Google Fonts Link Add >>>>>>>>>>>>> -->

	<!-- header font style [Poppins] -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- slider text style[playFair] -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">



	<!-- Font Awesome CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			/*background-color: #B5D77E;*/
			background-color: lightblue;
		}
		.upload
		{
			height: 600px;
			width: 1000px;
			/*background-color: red;*/
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.logo
		{
			width: 100%;
			height: 150px;
			text-align: center;
			padding: 0;
			margin-top: 10px;
			/*background-color: green;*/
		}

		.logo img
		{
			width: 150px;
			height: 150px;
			margin: auto;
			display: block;
			border-radius: 15px;
		}
		.text
		{
			width: 100%;
			height: 40px;
			/*background-color: green;*/
			padding-top: 30px;
		}
		.text p
		{
			font-family: 'Alfa Slab One', cursive;
			font-size: 38px;
			text-align: center;
			color: black;
			margin: 0;
			letter-spacing: 1px;
		}

		.form_section
		{
			width: 100%;
			/*background-color: red;*/
		}

		.unorder
		{
			width: 100%;
			text-align: center;
			padding: 0;
		}

		.list
		{
/*			width: 150px;
			height: 150px;*/
			margin: auto;
			display: block;
			border-radius: 15px;
		}

		input[type=file] 
		{
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-family: 'Poppins', sans-serif;
			font-size: 18px;
		}

		li
		{
			padding: 10px;
			display: block;
			list-style: none;
			margin: 20px 0 0 0;
			/*background-color: green;*/
		}

		select
		{
			padding: 14px 20px;
			border: none;
			border-radius: 15px;
			background-color: #f1f1f1;	
		}
		label
		{
			margin:0 0 3px 0;
			padding:0px;
			display:block;
			font-weight: bold;
			font-family: 'Poppins', sans-serif;
			font-size: 20px;
			text-align: center;
		}

		 button 
		{
		  all: unset;
		  background: transparent;
		  border: 2px solid white;
		  padding: 1em 4em;
		  border-radius: 50px;
		  cursor: pointer;
		  display: inline-block;
		  font-weight: 700;
		  position: relative;
		  transition: all 300ms ease;
		}
		 button span 
		{
			display: inline-block;
			transition: all 300ms ease;
			font-family: 'Poppins', sans-serif;
			font-size: 14px;
		}
		 button:before,  button:after 
		{
		  content: "";
		  display: block;
		  position: absolute;
		  transition: all 300ms ease;
		  opacity: 0;
		}
		button:before {
		  height: 7px;
		  width: 7px;
		  background: transparent;
		  border-right: 2px solid;
		  border-top: 2px solid;
		  right: 30px;
		  top: 21px;
		  -webkit-transform: rotate(45deg);
		          transform: rotate(45deg);
		}
		button:after {
		  background: white;
		  height: 2px;
		  width: 50px;
		  left: 0;
		  top: 1.49em;
		}
		button:hover span {
		  -webkit-transform: translateX(-10px);
		          transform: translateX(-10px);
		}
		button:hover:before {
		  opacity: 1;
		}
		button:hover:after {
		  width: 14px;
		  opacity: 1;
		  -webkit-transform: translateX(160px);
		          transform: translateX(160px);
		}
		.lower
		{
			width: 100%;
			/*background-color: green;*/
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			padding-top: 30px;
		}
		.button_cont
		{
			width: 240px;
			/*background-color: red;*/
		}

		.button_cont a
		{
			text-decoration: none;
		}

		.example_e 
		{
			border: none;
			background: gray;
			color: black !important;
			font-weight: 100;
			padding: 20px;
			text-transform: uppercase;
			border-radius: 6px;
			display: inline-block;
			transition: all 0.3s ease 0s;
		}

		.example_e:hover 
		{
			color: #404040 !important;
			font-weight: 700 !important;
			letter-spacing: 3px;
			background: none;
			-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
			-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
			transition: all 0.3s ease 0s;
		}
	</style>
</head>
<body>

	<div class="upload">
		<div class="logo">
			<img src="image/logo.jpg">
		</div>
		<div class="text">
			<p>Gallary Image Upload</p>
		</div>
		<div class="form_section">
			<form method="post" enctype="multipart/form-data" class="form">
				<ul class="unorder">
					<li class="list">
						<label>Browse The Image From Computer</label>
						<input type="file" name="image" id="image" />
					</li>
					<li class="list">
						<label>Select The Catagoty Of Image</label>
						<select name="Category">
							<option value="office" >Office</option>
							<option value="factory" >Factory</option>
							<option value="ocation" >Ocation</option>
						</select>
					</li>
					<li class="list">
					    <button type="submit" name="insert"> <span>Upload</span></button>
					</li>
				</ul>
            </form>  
		</div>
		<div class="lower">
			<div class="button_cont" align="center">
				<a class="example_e" href="upload.html" target="_blank" rel="nofollow noopener">Back to Homepage</a>
			</div>
			<div class="button_cont" align="center">
				<a class="example_e" href="show_gallary_image.php" target="_blank" rel="nofollow noopener">View Gallary</a>
			</div>
		</div>
	</div>

</body>
</html>