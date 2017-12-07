<!DOCTYPE html>
<html>
<head>
	<title>Om dig</title>
	<link rel="stylesheet" type="text/css" href="clientSide/style.css">
	<meta charset="utf-8">
	<?php include '../connect.php'; 
	include 'header.php';
	session_start();
	$uname = $_SESSION['uname']; 

	$sql = "SELECT * FROM `minions` WHERE username = '$uname' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	?>
</head>
<body>
	<div class="brugerInfo">
			<label><b>Username - </b></label><label><b> Nuværende: <?php echo $row['username'] ?></b></label><br>
		    <!-- <input type="text" placeholder="Enter Username" name="uname" required> --><br><br>

		    <label><b>Password - </b></label><label><b> Nuværende: <?php echo '********' ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required>--><br><br> 

    		<label><b>Fornavn - </b></label><label><b> Nuværende: <?php echo $row['fornavn'] ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required>--><br><br> 

    		<label><b>Efternavn - </b></label><label><b> Nuværende: <?php echo $row['efternavn'] ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required>--><br><br> 

    		<label><b>E-mail - </b></label><label><b> Nuværende: <?php echo $row['email'] ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required>--><br><br> 

    		<label><b>Addresse - </b></label><label><b> Nuværende: <?php echo $row['addresse'] ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required>--><br><br> 

    		<label><b>Køn - </b></label><label><b> Nuværende: <?php echo $row['gender'] ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required>--><br><br> 

    		<label><b>Fødselsdato - </b></label><label><b> Nuværende: <?php echo $row['fdato'] ?></b></label><br>
    		<!-- <input type="text" placeholder="Enter Username" name="uname" required><br>--><br> 
	</div>


</body>
</html>
