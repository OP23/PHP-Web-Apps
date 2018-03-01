<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dealership</title>
<link rel="stylesheet" type="text/css" href="template/dealership.css">
</head>

<body>
<h1>Welcome to our dealership!</h1>

<p>
<a href="controller/controller.php">Just let me in!</a></br> <!--Note what is sent to the controller.php page : nothing! -->
<a href="controller/controller.php?page=car">Show me a car</a></br> <!--Note what is sent to the controller.php page : ?page=car -->
<a href="controller/controller.php?page=price">Show me it's price</a></br> <!--Note what is sent to the controller.php page : ?page=price-->
<a href="controller/controller.php?page=not sure">Unsure what I want to see</a></br> <!--Note what is sent to the controller.php page : ?page=not sure-->
<a href="controller/controller.php?page=car_ferrari">Ferrari Special Deal</a><br />
<a href="controller/controller.php?page=show_all">Show Me All The Deals</a><br />
</
</body>
</html>