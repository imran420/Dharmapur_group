<?php
     session_start();
     if(!isset($_SESSION['usrnm'])){
        header("Location:login.html");
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
		.gallary
		{
			height: 700px;
			width: 100%;
			/*background-color: red;*/
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.logo
		{
			width: 100%;
			height: 100px;
			text-align: center;
			padding: 0;
			margin-top: 10px;
			/*background-color: green;*/
		}

		.logo img
		{
			width: 100px;
			height: 100px;
			margin: auto;
			display: block;
			border-radius: 15px;
		}
		.text
		{
			width: 100%;
			height: 60px;
			/*background-color: green;*/
			padding-top: 10px;
		}
		.text p
		{
			font-family: 'Alfa Slab One', cursive;
			font-size: 30px;
			text-align: center;
			color: black;
			margin: 0;
			letter-spacing: 1px;
		}
		.image
		{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			padding-top: 20px;
			padding-bottom: 40px;
		}
		.image_container
		{
			height: 350px;
			width: 300px;
			margin-left: 15px;
		}
		.pic
		{
			height: 300px;
			width: 300px;
			background-color: grey;
			border-radius: 10px;
		}
		.button {
			display: block;
			width: 160px;
			margin: 0 auto;
			margin-top: 20px;
			margin-bottom: 0;
			overflow: hidden;
			position: relative;
			transform: translatez(0);
			text-decoration: none;
			box-sizing: border-box;
			font-size: 18px;
			font-weight: normal;
			box-shadow: 0 9px 18px rgba(0,0,0,0.2);
		}

		.instagram {
			text-align: center;
			border-radius: 50px;
			padding: 16px;
			color: white;
			background: #BD3381;
			transition: all 0.2s ease-out 0s;
		}

		.gradient {
			display: block;
			position: absolute;
			top: 0;
			right: 0;
			width: 100%;
			height: 100%;
			bottom: auto;
			margin: auto;
			z-index: -1;
			background: radial-gradient(90px circle at top center, rgba(238,88,63,.8) 30%, rgba(255,255,255,0));
			transition: all 0s ease-out 0s;
			transform: translatex(-140px);
			animation: 18s linear 0s infinite move;
		}

		@keyframes move {
			0% {
				transform: translatex(-140px);
			}
			25% {
				transform: translatex(140px);
				opacity: 0.3;
			}
			50% {
				transform: translatex(140px);
				opacity: 1;
				background: radial-gradient(90px circle at bottom center, rgba(238,88,63,.5) 30%, rgba(255,255,255,0));
			}
			75% {
				transform: translatex(-140px);
				opacity: 0.3;
			}
			100% {
				opacity: 1;
				transform: translatex(-140px);
				background: radial-gradient(90px circle at top center, rgba(238,88,63,.5) 30%, rgba(255,255,255,0));
			}
		}

		.lower
		{
			width: 100%;
			height: 100px;
			/*background-color: green;*/
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			padding-top: 30px;
		}
		.button_cont
		{
			width: 300px;
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

	<div class="gallary">
		<div class="logo">
			<img src="image/logo.jpg">
		</div>
		<div class="text">
			<p>DCIL Gallary Image Replace</p>
		</div>

<?php
include_once 'dbconnect.php';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}


$result = $db->query("SELECT id, created FROM images order by created DESC  limit 4");
$update="Update";
echo "<div class='image'>";
While($imgData = $result->fetch_assoc()){  

    echo "<div class='image_container'>"; 
    echo "<div> <img class='pic' data-u='image' src='display.php?id=".$imgData['id']."'></div>"; 
    echo "<a href='update.php?id=".$imgData['id']."' class='button instagram'><span class='gradient'></span>".$update."</a></div>";

}
echo "</div>";


?>
		<!-- <div class="image">
			<div class="image_container">
				<div class="pic"></div>
				<a href="#" class="button instagram"><span class="gradient"></span>Update</a>
			</div>
			<div class="image_container">
				<div class="pic"></div>
				<a href="#" class="button instagram"><span class="gradient"></span>Update</a>
			</div>

			<div class="image_container">
				<div class="pic"></div>
				<a href="#" class="button instagram"><span class="gradient"></span>Update</a>
			</div>

			<div class="image_container">
				<div class="pic"></div>
				<a href="#" class="button instagram"><span class="gradient"></span>Update</a>
			</div>
		</div> -->
		<div class="lower">
			<div class="button_cont" align="center">
				<a class="example_e" href="upload.html" target="_blank" rel="nofollow noopener">Back to Homepage</a>
			</div>
			<div class="button_cont" align="center">
				<a class="example_e" href="slider.php" target="_blank" rel="nofollow noopener">View Slider</a>
			</div>
		</div>
	</div>


</body>
</html>
