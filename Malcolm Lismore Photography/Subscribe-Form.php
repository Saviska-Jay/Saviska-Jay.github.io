<!DOCTYPE html>
<html>

<head>

    <title> PHP Script to Handle Subscribe Form Data </title>

</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "malcolm_lismore_photography_db_saviska";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Get form data
        $sub_email = $_POST['sub_email'];
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO newsletter_subscribe_emails_table (sub_email) VALUES (?)");
        $stmt->bind_param("s", $sub_email);
        // Execute statement
        if ($stmt->execute()) {
            echo "Subscribed successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        // Close connection
        $stmt->close();
        $conn->close();
    }
    ?>

</body>

</html>