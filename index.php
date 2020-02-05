<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DB Connect</title>
    <link rel="stylesheet" href="styles/style.css">
    <!--<script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>-->
  </head>
  <body>
    <main>
      <h1>Database Connection</h1>
      <form action="index.php" method="POST">
        <input type="text" name="dbname" placeholder="Database">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="submit" value="Submit">
      </form>
      <!--<?php
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
      ?>-->
    </main>
  </body>
</html>
