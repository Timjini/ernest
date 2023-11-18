<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection parameters
    $host = 'srv1046.hstgr.io';
    $user = 'u861150053_agence';
    $password = '1234@Ernest';
    $database = 'u861150053_ernest';

    // Create connection
    $conn = new mysqli($host, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $phone = $_POST["phone"];
    $type = $_POST["type"];
    $username = $_POST["username"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    // File Uploads
    $avatar = $_FILES["avatar"]["name"];
    $avatar_temp = $_FILES["avatar"]["tmp_name"];

    // Move uploaded file to a designated location (adjust the path accordingly)
    $upload_directory = "public/uploads";
    $avatar_path = $upload_directory . $avatar;
    move_uploaded_file($avatar_temp, $avatar_path);

    // Insert data into the database
    $query = "INSERT INTO utilisateurs (email, password, phone, type, username, first_name, last_name, avatar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssss", $email, $password, $phone, $type, $username, $first_name, $last_name, $avatar_path);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to the signup form if accessed directly
    header("Location: signup_form.php");
    exit();
}
