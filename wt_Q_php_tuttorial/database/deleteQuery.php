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

// SQL to delete a record
$sql = "DELETE FROM MyGuests WHERE id=?";

$stmt=mysqli_prepare($conn, $sql);

$id=1;
mysqli_stmt_bind_param($stmt,'i',$id);


if (mysqli_stmt_execute($stmt)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>