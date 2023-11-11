<?php
session_start();
require('../config/db_connection.php'); // Establish database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate admin credentials
    $query = "SELECT * FROM `utilisateurs` WHERE email='$email' AND password='$password' AND type='admin'";
    $result = mysqli_query($conn, $query);


    if (!$result) {
        die('Error in SQL query: ' . mysqli_error($conn) . '<br>Query: ' . $query);
    }



    if (mysqli_num_rows($result) === 1) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: ../admin/panel.php');
        exit();
    } else {
        echo 'Invalid credentials. Please try again.';
    }
}
