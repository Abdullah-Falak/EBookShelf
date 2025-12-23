<?php
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    // 1. Check if email exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // 2. Verify the password
        if (password_verify($pass, $row['password'])) {
            // Success: Log them in
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['full_name'];
            
            // Redirect to Home Page
            header("Location: index.html");
            exit();
        } else {
            echo "Incorrect Password!";
        }
    } else {
        echo "User not found!";
    }
}
?>