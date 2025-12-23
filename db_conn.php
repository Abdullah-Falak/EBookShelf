<?php
$sname = "localhost";
$uname = "root";
$password = ""; // XAMPP default password is usually empty
$db_name = "ebook_shelf";

// Create connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>