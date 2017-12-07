<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="clientSide/style.css">
<html>
<head>
  <title>Opret bruger</title>
  <meta charset="utf-8">
  <?php include 'loginHeader.php' ?>
</head>
<body>

<form action="add.php" method="post">
  <div class="container">
    <h1>Opret bruger</h1>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required> 

    <label><b>Gentag Password</b></label>
    <input type="password" placeholder="Enter Password Again" name="gentagpsw" required> 

    <label><b>Fornavn</b></label>
    <input type="text" placeholder="Enter fornavn" name="fnavn" required> 

    <label><b>Efternavn</b></label>
    <input type="text" placeholder="Enter efternavn" name="enavn" required> 

    <label><b>E-amil</b></label>
    <input type="text" placeholder="Enter E-amil" name="email" required>  

    <label><b>Addresse</b></label>
    <input type="text" placeholder="Enter Addresse" name="adr" required>

    <label><b>Køn</b></label><br>
    <input type="radio" name="køn" value="Man"> Man<br>
    <input type="radio" name="køn" value="Kvinde"> Kvinde<br>
    <input type="radio" name="køn" value="Andet" checked> Andet <br><br>

    <label><b>Fødselsdato</b></label><br>
    <input type="date" name="fdag"> 
        
    <button type="submit" name="submit">Opret</button>
  </div>

  <div class="container">
   <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>
</body>
</html>


<?php
include 'connect.php';

if (isset($_POST['submit']))
{
		$uname = $_POST["uname"];
		$psw = $_POST["psw"];
    $gentagpsw = $_POST["gentagpsw"];
    $hash = password_hash($psw, PASSWORD_DEFAULT);
    $fnavn = $_POST["fnavn"];
    $enavn = $_POST["enavn"];
    $email = $_POST["email"];
    $adr = $_POST["adr"];
    $gender = $_POST["køn"];
    $fdato = $_POST["fdag"];
    session_start();
    $_SESSION['køn'] =  $gender;

		$sql = "INSERT INTO minions (username, password, fornavn, efternavn, email, addresse, gender, fdato) VALUES ('$uname', '$hash', '$fnavn', '$enavn', '$email', '$adr', '$gender' , '$fdato')";

	if ($conn->query($sql) === TRUE) {
		header('location: login.php');
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
