<?php
  //creates the variables
  $servername = "localhost";
  $dbname = $_POST["dbname"]; // db is named ""
  $username = $_POST["username"]; // username is ""
  $password = $_POST["password"]; // password is ""

  // Opens a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Checks connection and throws error if failed
  if ($conn->connect_error) {
     die("<p class=\"error\">Connection failed: " . $conn->connect_error . "</p>");
  }

  if (isset($dbname)) {
    echo "<p class=\"success\">You're currently connected to the database named: <code>$dbname</code></p>";
  }

  else {
    echo "<p class=\"neutral\">You're not currently connected to a database</p>";
  }
?>
