<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="..\styles\stylesheet.css">
</head>
<body>
	<div id="wrapper">
		
		<div id="banner">

		</div>



		<nav id="navigation">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="Item.php">Services</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</nav>



		<div id="content_area">
			<?php echo $content; ?>
		</div>



		<div id="sidebar">
			<?php echo $sidebar; ?>
		</div>


		<footer>
			<p>All rights reserved</p>
		</footer>
	</div>
</body>
</html>