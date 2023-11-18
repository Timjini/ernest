<?php
//  Check .env file
$host =
$user =
$password =
$database =



try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $type = $_POST["type"];
        $username = $_POST["username"];
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];

        // File Uploads
        $avatar = $_FILES["avatar"]["name"];
        $avatar_temp = $_FILES["avatar"]["tmp_name"];
        $document = $_FILES["document"]["name"];

        // Move uploaded files to the desired directory (public/uploads)
        $avatar_path = "public/uploads/" . $avatar;

        move_uploaded_file($avatar_temp, $avatar_path);

        // Insert data into the database
        $sql = 'INSERT INTO utilisateurs (email, password, phone, type, username, first_name, last_name, avatar) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);

        // Generate a random authToken or handle it as needed
        $authToken = uniqid();

        $stmt->execute([$email, $password, $phone, $type, $username, $firstName, $lastName, $avatar_path, $document_path, $children_names, $city, $discipline]);


        // Redirect to a success page or display a success message
        header("Location: ./auth/login.php");
        exit();
    }
} catch (PDOException $e) {
    // Handle database connection or query errors
    $errorMessage = "Database error: " . $e->getMessage();
    error_log($errorMessage);
    echo "<script>alert('$errorMessage');setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
    exit();
} catch (Exception $e) {
    // Handle other errors (e.g., file uploads)
    $errorMessage = "Error: " . $e->getMessage();
    error_log($errorMessage);
    echo "<script>alert('$errorMessage');</script>";
    exit();
}
