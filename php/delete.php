<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
//$sql = "DELETE FROM users WHERE users.user_id=". $_SESSION['unique_id'].";";
$sql = mysqli_query($conn, "DELETE FROM users WHERE users.unique_id='". $_SESSION['unique_id']."';")or die();

if ($sql = TRUE) {
    echo "Record deleted successfully";
    session_unset();
    session_destroy();
    header("location: ../login.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>