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
  $sql= "UPDATE users SET img = 'default.png' WHERE users.unique_id=". $_SESSION['unique_id'].";";
  $result = mysqli_query($conn, $sql)or die;

  echo "Connected successfully";

  if ($sql = TRUE) {
    echo "Record updated successfully";
    header("location: ../users.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }

  $conn->close();
?>