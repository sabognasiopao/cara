<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="adoptionstyle.css">  
<title>OurAnimals</title>
</head>

<body>
	
	<div class="container">
 	<img src="LOGO.png" width="50" height="50" alt="LOGO" class="logo"/> 
 		<h3 style="margin-right: 30px;"> CARA Philippines Wellfare </h3>
		<div class="vl"></div>
  
		<ul>
			<li><a href="index.html">Home</a>         </li>
			<li> <a href="Join.html">Join</a></li>
        	<li><a href="OurAnimals.html">Our Animals</a> </li>
			<li><a href="AboutUs.html">About Us</a>     </li>
			<li><a href="ContactUs.html">Contact Us</a>   </li>
		</ul>
	</div>		
	
<?php

$dogs = array (

		"DOG1" => array (
			"breed" => Labrador,
			"location" => Pasig,
			"gender" => Male,
			"age" => Adult, 
		),
		
		"DOG2" => array (
			"breed" => Pug,
			"location" => Caloocan,
			"gender" => Female,
			"age" => Puppy, 
		),

		"DOG3" => array (
			"breed" => Aspin,
			"location" => Pasig,
			"gender" => Male,
			"age" => Puppy, 
		)

);
	
$cats = array (

		"CAT1" => array (
			"breed" => Ragamuffin,
			"location" => Pasig,
			"gender" => Male,
			"age" => Adult, 
		),
		
		"CAT2" => array (
			"breed" => Oriental,
			"location" => Caloocan,
			"gender" => Female,
			"age" => Adult, 
		),

		"CAT3" => array (
			"breed" => Ocicat,
			"location" => Pasig,
			"gender" => Male,
			"age" => Puppy, 
		)

);
	
echo "		<img src=\"H.png\" width=\"1530px\" height=\"250px\" style=\"margin-left: -5px; margin-top: 30px; border-radius: 40px\">\n";
echo "	\n";
echo "		<h1 style=\"text-align: center\"> DOGS</h1>\n";
echo "	\n";
echo "	<div class=\"fourthcontainer\">\n";
echo "			\n";
echo "				<div class=\"FifthBox\">\n";
echo "					<div class=\"fifthcontainer\">\n";
echo "						<div>   <img src=\"a1.jpg\" alt=\"Avatar\" style=\"border-radius: 50%; width: 150px;height: 150px; margin-right: 10px;\"> </div>\n";
echo "						<div>\n";
echo "							<h2 > .$dogs['DOG1']['breed']. </h2>\n";
echo "							<ul   style=\"margin-top: -20px; margin-left: -40px; color: black;font-size: 18px;\" >\n";
echo "								<li>Location: .$dogs['DOG1']['location'].</li>\n";
echo "								<li>Gender: Male .$dogs['DOG1']['gender'].</li>\n";
echo "								<li>Age: .$dogs['DOG1']['age'].</li>\n";
echo "							\n";
echo "							</ul>\n";
echo "						</div></div></div>\n";
echo "				<div class=\"FifthBox\">\n";
echo "					<div class=\"fifthcontainer\">\n";
echo "						<div>   <img src=\"a5.jpg\" alt=\"Avatar\" style=\"border-radius: 50%; width: 150px;height: 150px; margin-right: 10px;\"> </div>\n";
echo "						<div>\n";
echo "							<h2 > .$dogs['DOG2']['breed']. </h2>\n";
echo "							<ul   style=\"margin-top: -20px; margin-left: -40px; color: black;font-size: 18px;\" >\n";
echo "								<li>Location: .$dogs['DOG2']['location'].</li>\n";
echo "								<li>Gender: .$dogs['DOG2']['gender'].</li>\n";
echo "								<li>Age: .$dogs['DOG2']['age'].</li>\n";
echo "							\n";
echo "							</ul>\n";
echo "				</div></div></div>\n";
echo "		\n";
echo "				<div class=\"FifthBox\">\n";
echo "					<div class=\"fifthcontainer\">\n";
echo "						<div>   <img src=\"a6.jpg\" alt=\"Avatar\" style=\"border-radius: 50%; width: 150px;height: 150px; margin-right: 10px;\"> </div>\n";
echo "						<div>\n";
echo "							<h2 > .$dogs['DOG3']['breed']. </h2>\n";
echo "							<ul   style=\"margin-top: -20px; margin-left: -40px; color: black;font-size: 18px;\" >\n";
echo "								<li>Location: .$dogs['DOG3']['location'].</li>\n";
echo "								<li>Gender: .$dogs['DOG3']['gender'].</li>\n";
echo "								<li>Age: .$dogs['DOG3']['age'].</li>\n";
echo "							</ul>\n";
echo "				</div></div></div>\n";
echo "			\n";
echo "	</div>\n";
echo "	\n";
echo "		<h1 style=\"text-align: center; margin-top: 50px;\"> CATS</h1>\n";
echo "	\n";
echo "		<div class=\"fourthcontainer\">\n";
echo "			\n";
echo "				<div class=\"FifthBox\">\n";
echo "					<div class=\"fifthcontainer\">\n";
echo "						<div>   <img src=\"a2.jpg\" alt=\"Avatar\" style=\"border-radius: 50%; width: 150px;height: 150px; margin-right: 10px;\"> </div>\n";
echo "						<div>\n";
echo "							<h2 > Aspin </h2>\n";
echo "							<ul   style=\"margin-top: -20px; margin-left: -40px; color: black;font-size: 18px;\" >\n";
echo "								<li>Location: Pasig</li>\n";
echo "								<li>Gender: Male</li>\n";
echo "								<li>Age: Adult</li>\n";
echo "							\n";
echo "							</ul>\n";
echo "						</div></div></div>\n";
echo "				<div class=\"FifthBox\">\n";
echo "					<div class=\"fifthcontainer\">\n";
echo "						<div>   <img src=\"a3.jpg\" alt=\"Avatar\" style=\"border-radius: 50%; width: 150px;height: 150px; margin-right: 10px;\"> </div>\n";
echo "						<div>\n";
echo "							<h2 > Aspin </h2>\n";
echo "							<ul   style=\"margin-top: -20px; margin-left: -40px; color: black;font-size: 18px;\" >\n";
echo "								<li>Location: Pasig</li>\n";
echo "								<li>Gender: Male</li>\n";
echo "								<li>Age: Adult</li>\n";
echo "							\n";
echo "							</ul>\n";
echo "				</div></div></div>\n";
echo "		\n";
echo "				<div class=\"FifthBox\">\n";
echo "					<div class=\"fifthcontainer\">\n";
echo "						<div>   <img src=\"a4.jpg\" alt=\"Avatar\" style=\"border-radius: 50%; width: 150px;height: 150px; margin-right: 10px;\"> </div>\n";
echo "						<div>\n";
echo "							<h2 > Aspin </h2>\n";
echo "							<ul   style=\"margin-top: -20px; margin-left: -40px; color: black;font-size: 18px;\" >\n";
echo "								<li>Location: Pasig</li>\n";
echo "								<li>Gender: Male</li>\n";
echo "								<li>Age: Adult</li>\n";
echo "							\n";
echo "							</ul>\n";
echo "				</div></div></div>\n";
echo "			\n";
echo "	</div>\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	</div>\n";
echo "\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "	\n";
echo "<div class=\"hl2\"></div>\n";
echo "	\n";
echo "<h6 style=\"color:aliceblue; text-align: center\">© 2004- 2020 Adopt-a-Pet.com - All Rights Reserved</h6>";

?>
