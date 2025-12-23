<?php
include "db_conn.php"; // Connect to DB

if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['password'])) {

    // 1. Get data from form
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // 2. Encrypt the password (Security Best Practice)
    // Never store plain text passwords!
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // 3. Insert into Database
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        // Success: Redirect to Login Page
        header("Location: login.html");
    } else {
        // Error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>