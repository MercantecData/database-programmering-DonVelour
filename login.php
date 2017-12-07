<!DOCTYPE html>
<html oncontextmenu="return false;">
<head>
	<title>Log ind</title>
	<link rel="stylesheet" type="text/css" href="clientSide/style.css">
	<?php include 'loginHeader.php' ?>
</head>
<body>

<form action="login.php" method="post">
	
  <div class="imgcontainer">
    <img src="clientSide/pics/loginShadow.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
  </div>

  <div class="container">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>
</body>
</html>

<?php include 'connect.php'; 

if (isset($_POST['submit']))
{
	
	$uname = $_POST["uname"];
	$psw = $_POST["psw"];

	$sql = "SELECT * FROM `minions` WHERE username = '$uname' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$hash = $row['password'];

	if ($uname == 'databackup' && $psw == 'admin')
	{

		header('location: databaseBackup.php');
	}

	if (password_verify($psw, $hash))
	{
		session_start();
		$_SESSION['uname'] = $uname;

		header('location: clientSide/homePage.php');
		// header('location: ClientSide/om_dig.php');
	}

	// $uname = $_POST["uname"];
	// $psw = $_POST["psw"];
	// // $_SESSION['uname'] = $uname;


	// 

	// $sql = "SELECT`username`, `password` FROM `minions` WHERE username = '$uname' AND password = '$psw' ";
	// $result = mysqli_query($conn,$sql);
	// $count = mysqli_num_rows($result);

	// if ($count >= 1) 
	// {
	// 	header('location: om_dig.php');
	// 	// header('location: clientSide/index.html');
	// } 
	// else {
 //    	echo "Error: " . $sql . "<br>" . $conn->error;
	// }
}
$conn->close();
?>