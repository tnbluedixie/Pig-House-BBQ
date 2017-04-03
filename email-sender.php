<!DOCTYPE html>
<html lang="en">
<head>
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<title>Pig House BBQ</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Ranga:700" rel="stylesheet">
</head>
<body>
  <div class="body">
	<header class="main-header" id="header">
		<div class="container clearfix">
			<h1 class="name"><a href="index.html">Pig House BBQ</a></h1>
			<ul class="main-nav">
				<li><a href="index.html" id="selected1">home</a></li>
				<li><a href="about.html">about</a></li>
				<li><a href="info.html">info</a></li>
				<li><a href="menu.html">menu</a></li>
        <li><a href="reviews.html">reviews</a></li>
        <li><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</header><!--/.main-header-->   

	<div class="banner">
		<img class="logo" src="img/Pig_House_Logo.png" alt="Pig House Logo">
	</div><!--/.banner-->
    
    <div class="container clearfix bp" id="bp7">
    
    <div class="tertiary col">
      <h2>Thank you for contacting us!</h2>
    </div><!--/.tertiary-->
    
  </div>

	<div class="container clearfix bp" id="bp1">
		
		<div class="primary col">
			<h2>The Pig House</h2>
			<p>The Pig House, a drive-through experience, is a restaurant that sells BBQ along with an assortment of other meats.</p>
      <p>Our menu includes:</p>
      <ul id="ul2">
        <li>BBQ</li>
        <li>Chicken</li>
        <li>Ribs</li>
        <li>Baked beans</li>
        <li>Chips</li>
        <li>Salad</li>
        <li>Nachos</li>
        <li>Bologna</li>
      </ul>
      <p>and so much more!</p>
		</div><!--/.primary-->
		
		<div class="secondary col">
	    <p><img class="img" id="img1" src="img/PHB_Store_Img.jpg" alt="Pig House BBQ Restaurant" border="8"><figcaption align="center">Our Restaurant</figcaption></p>
		</div><!--/.secondary-->	
		
	</div><!--/.container-->

	<footer class="main-footer">
    <p class="footernavp" align="center"><a href="index.html" id="selected7">home</a> | <a href="about.html">about</a> | <a href="info.html">info</a> | <a href="menu.html">menu</a> | <a href="reviews.html">reviews</a> | <a href="contact.html">contact</a></p>
    <div id="fsl1"><a href="https://www.facebook.com/PigHouseBBQ/" target="blank"><img src="img/facebook_icon.jpg" alt="Facebook Logo And Link" class="social-icon"></a></div>
    <div id="fsl2"><a href="tel:731-423-8566" target="blank"><img src="img/phone-icon.png" alt="Phone Logo And Link" class="social-icon"></a></div>
    <p class="footerp"><a class="link" href="https://www.google.com/maps/place/Pighouse+BBQ/@35.638,-88.8224542,15z/data=!4m5!3m4!1s0x0:0x70928f5e82f18da0!8m2!3d35.638!4d-88.8224542" target="blank">Address: 1024 Campbell St, Jackson, Tennessee</a></p>
    <p class="footerp"><a class="link" href="info.html">Monday-Saturday 10:00 AM to 6:30 PM</a></p>
    <p class="footlp">&copy;2017 Pig House Inc</p>
	</footer>
	</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  $to = "thepighousebbq@gmail.com";
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $subject = "Form submission";
  $message = $first_name . " " . $last_name . " at " . $email . "
wrote the following:" . "\n\n" . $_POST['message'];

  mail($to,$subject,$message);

  }
?>