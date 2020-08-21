<?php
echo "Teste H1<br>";

$servername = "192.168.122.30";
$username = "web";
$password = "teste123";
$dbname = "inteligencia";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuario";
//echo $sql;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["nome"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>

