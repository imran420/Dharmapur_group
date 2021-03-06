<?php

 $connect = mysqli_connect("localhost", "root", "", "dharlitl_dcl");  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>DCIL Gallary</title>
	<link rel="stylesheet" href="css/header_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/gallary.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">


	<!-- <<<<<<<<<<< Google Fonts Link Add >>>>>>>>>>>>> -->

	<!-- header font style [Poppins] -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- slider text style[playFair] -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">



	<!-- Font Awesome CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- <<<<<<<<<<<<<< Header Section Start >>>>>>>>>>>>>>>>>>>>>> -->

<section class="nav-bar">
	<div class="nav-container">
	  <div class="brand">
	    <a href="index.php"><img src="image/logo.jpg"></a>
	  </div>
	  <nav>
	    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
	    <ul class="nav-list borderXwidth">
	        <li>
	          <a href="index.php">Home</a>
	        </li>
	        <li>
	          <a href="product.html">Products</a>
	        </li>
	        <li>
	          <a href="#">Gallery <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
  				<ul class="nav-dropdown">
				  <li>
				    <a href="gallary.php">Office Gallary</a>
				  </li>
				  <li>
				    <a href="factory_gallary.php">Factory Gallary</a>
				  </li>
				  <li>
				    <a href="others_gallary.php">Others Gallary</a>
				  </li>
				</ul>
	        </li>
	        <li>
	          <a href="#">Company <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
				<ul class="nav-dropdown">
				  <li>
				    <a href="about.html">About Us</a>
				  </li>
				  <li>
				    <a href="company_msg.html">Messages</a>
				  </li>
				  <li>
				    <a href="library.html">Mission</a>
				  </li>
				    				  <li>
				    <a href="project.html">Project</a>
				  </li>
				</ul>
	        </li>
<!-- 	        <li>
	          <a href="library.html">Library</a>
	        </li> -->
	        <li>
	          <a href="contact.html">Contact Us</a>
	        </li>
	    </ul>
	  </nav>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="javascript/header_java.js"></script>

<!-- <<<<<<<<<<<<<<< Header Section End >>>>>>>>>>>>>> -->


<!-- <<<<<<<<<<<<<<< Image Catagory Section Start >>>> -->

<div class="gallary">
	<h1>DCIL Gallay</h1>
	<div class="border">
		<img src="image/border.png">
	</div>

	  <div class="image">
	  	<div class="image_section">
					  <?php  
	                      $query = "SELECT * FROM tbl_images WHERE category='ocation'";  
	                      $result = mysqli_query($connect, $query);  
	                      while($row = mysqli_fetch_array($result))  
	                      { 
	                          // echo '<img class="myImages" id="myImg" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" />   ';
	                          echo '<a href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" data-lightbox="roadtrip"> <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'"></a>';
	                      }  
          			  ?> 
        </div>
	  </div>
</div>


<!-- The Modal Section Start -->

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<!-- The Modal Section End -->

<script type="text/javascript" src="javascript/gallary.js"></script>
<script type="text/javascript" src="javascript/lightbox-plus-jquery.min.js"></script>

<!-- <<<<<<<<<<<<<<< Image Catagory Section End >>>>>> -->

<!-- <<<<<<<<<<<<<<< Footer Section Start >>>>>>>>>>>>>>>> -->

<div class="footer_section">
  <div class="footer">
    <div class="footer_add">
      <h1>Dharmapur Ceramics Industries Limited</h1>
      <p>House #105, Flat #A5, Road #13/A, Banani, Dhaka-1213</p>
    </div>
    <div class="footer_logo">
      <img src="image/logo.jpg">
    </div>
    <div class="footer_social">
      <a href=""><i class="fa fa-facebook fa-2x"></i></a>
      <a href=""><i class="fa fa-instagram fa-2x"></i></a>
      <a href=""><i class="fa fa-youtube fa-2x"></i></a>
    </div>
  </div>
  <div class="footer_copy">
    <p>© COPYRIGHT 2019 - Dharmapur Ceramics Industries Ltd. | Design By DevCTRL</p>
  </div>
</div>

<!-- <<<<<<<<<<<<<<< Footer Section End >>>>>>>>>>>>>>>> -->


</body>
</html>