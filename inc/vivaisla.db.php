<?php

// Define all the properties for database connection
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "vivaisla");

// Prepare statement for MySQL connection
$link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Connect to MySQL, if there's an error, show the error.
if($link->connect_error){
    die("Connection Error: " . $link->connect_error);
}

?>