<!DOCTYPE html>
<html>
<head>
	<title>Focus 411</title>
	
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="http://cecc.njit.edu/su14/css/offcanvas.css" rel="stylesheet">
    <link href="http://cecc.njit.edu/su14/css/bootstrap.css" rel="stylesheet">
    <link href="http://cecc.njit.edu/su14/css/carousel.css" rel="stylesheet">
    <link href="http://cecc.njit.edu/su14/css/just-nav.css" rel="stylesheet">
    <link href="http://cecc.njit.edu/su14/css/blog.css" rel="stylesheet">
    <link href="http://cecc.njit.edu/su14/css/3-col-portfolio.css" rel="stylesheet">

</head>
<body>


<?php

include '../header.php';

$content ="<h1>Who's Eligible</h1>
<p>
For food services that we provide you must be eligible with the requirements below. 
All individuals must have a photo id and birth certificate for the children under 18 years old.</p>

<ul>
<li>Families with Children under 18</li>
<li>Senior Citizens</li>
In order for you to be able to receive food you must have a referral from an agency below.</ul> <br>

<h1> Hours of Operation </h1> 
Our food pantry is open on Mondays, Wednesdays and Fridays from 9 a.m. to 3 p.m. <br>

Services for Senior Citizens is only available on Friday's. <br>"; 





$about = "<h1>About us</h1>
<p> Our mission is to provide community leadership by developing a variety of services of health and human development 
initiatives which advances the community towards self sufficiency, growth, empowerment, and a better quality of life.</p>";

$title = "<h1> FOCUS 411 </h1> 441-443 Broad Street | Newark, NJ 07102 | (973) 624-2528";

$img = "<img src='http://placehold.it/350x150'>"; 




				$focus = array(

				"content" => $content,

				"about" => $about,

				"img" => $img,

				"title" => $title
				);




			echo $focus['title']."<br>";
			echo $focus['img']."<br>";
			echo $focus['content']."<br>";
			echo $focus['about'];


include '../footer.php';