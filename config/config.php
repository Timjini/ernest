 <?php
    $host = 'srv659.hstgr.io';
    $user = '';
    $password = '';
    $database = '';

    // Create a connection to the database
    $mysqli = new mysqli($host, $user, $password, $database);

    // Check the connection
    if ($mysqli->connect_error) {
        //echo "<p>Connection failed: " . $mysqli->connect_error . "</p>";
    } else {
        //echo "<p>Connected to the database successfully!</p>";

        // Close the connection
        $mysqli->close();
    }
    ?>