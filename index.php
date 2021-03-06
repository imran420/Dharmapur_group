<?php
          include_once 'dbconnect.php';

           $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
          
          if($db->connect_error){
             die("Connection failed: " . $db->connect_error);
          }
        
          $result = $db->query("SELECT * FROM images order by created DESC  limit 4");
          $text =$db->query("SELECT Heading, para FROM images order by created DESC limit 4");
             
          
      ?>
      </div>
            
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Dharmapur Ceramics Ltd</title>
	<link rel="stylesheet" href="css/header_style.css">
	<link rel="stylesheet" type="text/css" href="css/image_slider.css">
	<link rel="stylesheet" type="text/css" href="css/home_about.css">
	<link rel="stylesheet" type="text/css" href="css/home_commitment.css">
  <link rel="stylesheet" type="text/css" href="css/home_figure.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">

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
<!--          <li>
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


<!-- <<<<<<<<<<<<<<< Slider Section Start >>>>>>>>>>>> -->

<div id="vanilla-slideshow-container">
  <div id="vanilla-slideshow">    

      <?php
           While(($imgData = $result->fetch_assoc())&& ($texts =$text->fetch_assoc())){ 
           echo "<div class='vanilla-slide'>"; 
           echo "<img data-u='image' src='display.php?id=". $imgData['id'] . "' alt='tiger'>"; 
           echo'<div class="content">'; 
           echo '<h1 class="animated fadeInDown">'.$texts['Heading'].'</h1>';
        //   echo'<p class="animated fadeInUp">'.$texts['para'].'</p>'; 
           echo '</div>';
           echo "</div>";
          
          }
      ?>
      <!-- content here -->
      



<!--  --> 

  </div>

  <!-- slideshow indicators -->
  <div id="vanilla-indicators"></div>

  <!-- slideshow arrows -->
  <div id="vanilla-slideshow-previous">
    <img src="image/arrow-previous.png" alt="slider arrow">
  </div>
  <div id="vanilla-slideshow-next">
    <img src="image/arrow-next.png" alt="slider arrow">
  </div>

</div>

<script src="javascript/vanillaSlideshow.min.js"></script>
<script>
  vanillaSlideshow.init({
    slideshow: true,
    delay: 5000,
    arrows: true,
    indicators: true,
    random: false,
    animationSpeed: '3s'
  });
</script>

<!-- <<<<<<<<<<<<<<< Slider Section End >>>>>>>>>>>>>> -->



<!-- <<<<<<<<<<<<<<< Home About Us Section Start >>>>> -->

<div class="home_about_section">
	<div class="home_about">
		<div class="home_about_text">
			<h1>Welcome</h1>
			<h2>Dharmapur Ceramic Industries Limited</h2>
			<img src="image/border.png">
			<p>Dharmapur Ceramics Industries Ltd is an Eco-Friendly Wall & Wall roof manufacturing company. We are introducing green brick manufacturing product under the Energy Kiln Project of Bangladesh Bank (BB) & refinanced bye Asian Development Bank (ADB),</p>
			<p>Leader arranger Bangladesh Infrastructure Finance Fund Limited (BIFFL) including Bangladesh Commerce Bank Limited (BCBL). We have a collaboration agreement with Future Carbon. Our Certificate of Incorporation No: C-129683/2016. Our TIN No: 819611252143.</p>
		</div>
		<div class="home_about_image">
			<img src="image/about.jpg">
		</div>
	</div>
</div>

<!-- <<<<<<<<<<<<<<< Home About Us Section End >>>>>>> -->


<!-- <<<<<<<<<<<<<<< Commitment Section Start >>>>>>>> -->

<div class="home_commitment_section">
	<h1>Our Commitment</h1>
	<p>We promise the best quality</p>
  <div class="border">
    <img src="image/border.png">
  </div>
	<div class="home_commitment">
		<div class="home_commitment_one">
      <div class="home_commitment_one_image">
        <img src="image/commitment1.png">
      </div>
      <div class="home_commitment_one_text">
        <h1>Premium Quality Bricks</h1>
        <h2>We are specialized in manufacturing a wide range of quality bricks are made using top grade raw material using advanced technology. Known for high compressive strength and minimum wastage, our range of clay bricks cater to the varied requirements of construction industry.</h2>
      </div>
    </div>
		<div class="home_commitment_two">
      <div class="home_commitment_two_image">
        <img src="image/commitment2.png">
      </div>
      <div class="home_commitment_two_text">
        <h1>Green Brick Manufacturing</h1>
        <h2>Carbon emission is considered one of the most vulnerable problem globally. The technologies of the developed world are contributing most to this global phenomenon of high-carbon emissions. In this regard we have to innovate green technology for more efficient and less polluting industrial processes.</h2>
      </div>
    </div>
		<div class="home_commitment_three">
      <div class="home_commitment_three_image">
        <img src="image/commitment3.png">
      </div>
      <div class="home_commitment_three_text">
        <h1>Energic Klin Project</h1>
        <h2>Bricks are being manufactured in these traditional kilns are being manufactured in are burning firewood causing the imbalance of greens on the earth. Furthermore, the smoke emitted from bricks kilns causes respiratory problem and asthma in children and elderly people in nearby areas. </h2>
      </div>
    </div>
	</div>
</div>

<!-- <<<<<<<<<<<<<<< Commitment Section Start >>>>>>>> -->


 <!-- <<<<<<<<<<<<<<< Countdown Figure Section Start >> -->

<div class="figure">

  <h1>Production Figure</h1>
  <h2>Some Information About Our Production in Numbers</h2>
  <div class="border">
    <img src="image/border.png">
  </div>

  <div class="figure_container">

    <div class="figure_container_one">

      <div class="icon">
        <i class="fa fa-snowflake-o fa-3x" aria-hidden="true"></i>
      </div>
      <p>800000+</p>
      <h2>Bricks Per Day</h2>

    </div>

    <div class="figure_container_two">

      <div class="icon">
        <i class="fa fa-archive fa-3x" aria-hidden="true"></i>
      </div>
      <p>2400000+</p>
      <h2>Bricks Per Month</h2>
      
    </div>

    <div class="figure_container_three">

      <div class="icon">
        <i class="fa fa-users fa-3x" aria-hidden="true"></i>
      </div>
      <p>200+</p>
      <h2>Happy Customer</h2>
      
    </div>

    <div class="figure_container_four">

      <div class="icon">
        <i class="fa fa-tasks fa-3x" aria-hidden="true"></i>
      </div>
      <p>300+</p>
      <h2>Total Project</h2>
      
    </div>

  </div>
  
</div>

<!-- <<<<<<<<<<<<<<< Countdown Figure Section End >>>>>> -->


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
    <p>© COPYRIGHT 2019 - Dharmapur Ceramics Industries Ltd. | Design By DevCtrl</p>
  </div>
</div>

<!-- <<<<<<<<<<<<<<< Footer Section End >>>>>>>>>>>>>>>> -->



</body>
</html>