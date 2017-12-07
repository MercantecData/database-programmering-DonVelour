<link rel="stylesheet" type="text/css" href="clientSide/style.css">
<?php
include 'connect.php';
include 'Header.php';




$sql = "SELECT id FROM minions WHERE username = 'hans'" ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "id: " .$row["id"];

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }
$conn->close();
?>








// $result = mysqli_query("SELECT * FROM `minions` ");
// $rows = array();
// while($r = mysqli_fetch_assoc($result)) {
//     $rows[] = $r;
// }
// print json_encode($rows);




// $sql = "SELECT * FROM `minions` ";

// $result = $conn->query($sql);

// if ($result->num_rows > 0) 
// {
// 	$filename = "BackUp.txt";
// 	$handle = fopen($filename, 'w');
// 	while($row = $result->fetch_assoc())
// 	{
// 		fwrite($handle, "id: " . $row["id"]. " - Name: " . $row["username"]. " - Password: "  . $row["password"]. " - Created: "  . $row["created"]. " - Modified: "  . $row["modified"].  
// "
// ");
// }
// 	fclose($handle);
// ?>
// <h1>Der er nu blevet taget en back up af databasen, filen er gemt som txt fil.</h1>
// <?php	     
// } 
// else 
// {
//     echo "0 results";
// }
