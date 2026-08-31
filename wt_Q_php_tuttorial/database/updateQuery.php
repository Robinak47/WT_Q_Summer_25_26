<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_a_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL to update a record
$sql = "UPDATE MyGuests SET lastname=?  WHERE id=?";
$stmt=mysqli_prepare($conn, $sql);

$id=2;
$lastName="tom";

mysqli_stmt_bind_param($stmt, 'si',$lastName,$id);

if (mysqli_stmt_execute($stmt)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>