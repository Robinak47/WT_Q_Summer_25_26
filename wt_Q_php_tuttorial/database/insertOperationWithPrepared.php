<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_a_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES (?,?,?)";

$stmt=mysqli_prepare($conn, $sql);

$firstName="mr.";
$lastName="Meow";
$email="meow@aiub.edu";
mysqli_stmt_bind_param($stmt,'sss',$firstName,$lastName,$email);

if (mysqli_stmt_execute($stmt)==true) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>