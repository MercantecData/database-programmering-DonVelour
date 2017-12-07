<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" title="light" href="style.css">
	<meta charset="utf-8">
	<?php session_start(); 
	$uname = $_SESSION['uname'];
	?>
</head>
<body>
	<header>
		<div id="nav">
			<h1>Dette er en header, den skal du ikke være bange for...</h1>
			<ul>
				<li><a href="homePage.php">Hjem</a></li>
				<li><a href="enSide.php">Noget</a></li>
				<li><a href="enAndenside.php">andet</a></li>
				<li><a href="om_dig.php">Om Dig</a></li>
				
				<li id="logout"><a href="../index.php">Log ud</a></li>
				<li id="ShowUname"><a>Logget ind som: <?php echo $uname ?></a></li>	
			</ul>
			
		</div>
	</header>
</body>
</html>

