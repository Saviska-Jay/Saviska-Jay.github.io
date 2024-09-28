<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- This is the Web Page Title  -->
    <title>Contact Me</title>

    <!-- Page Title Icon  -->
    <link rel="icon" type="image/png" href="resources/m-icon.png">

    <!-- Linking With Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">

    <!-- Linking With the Local CSS File  -->
    <link rel="stylesheet" type="text/css" href="contact-me.css">

</head>

<body>

    <!-- This is The Navigation Bar -->
    <div id="navigation-bar" class="navigation-bar">
        <nav>
            <a href="index.html" class="navigation-bar-items">Home</a>
            <a href="about-me.html" class="navigation-bar-items">About Me</a>
            <a href="gallery-1.html" class="navigation-bar-items">Gallery</a>
            <a href="packages-prices-pg.html" class="navigation-bar-items">Packages & Prices</a>
            <a href="contact-me.html" class="navigation-bar-items">Contact Me</a>
        </nav>
    </div>


    <!-- Contact Me Form Section  -->
    <section class="contact-me-section">
        <h1>Contact Me</h1>
        <h3>Contact us and purchase your package. Fill out the fields and click the submit button.</h3>
        <form method="post" action="">
            <label for="first-name">First Name : </label>
            <input required type="text" id="first-name" name="first-name">&nbsp; &nbsp;
            <label for="last-name">Last Name : </label>
            <input required type="text" id="last-name" name="last-name"> <br><br><br>
            <label for="tel-no">Telephone Number : </label>
            <input required type="tel" id="tel-no" name="tel-no"> <br><br><br>
            <label for="contact-form-email">Email Address : </label>
            <input required type="email" id="contact-form-email" name="contact-form-email"><br><br><br>
            <label for="package-list">Select Your Package : </label>
            <select required id="package-list" name="package-list">
                <option value="Wedding Bliss Package - USD 500">Wedding Bliss Package - USD 500</option>
                <option value="Graduation Memories Package - USD 250">Graduation Memories Package - USD 250</option>
                <option value="Portrait Perfection Package - USD 100">Portrait Perfection Package - USD 100</option>
                <option value="Event Extravaganza Package - USD 400">Event Extravaganza Package - USD 400</option>
                <option value="Family Fun Package - USD 150">Family Fun Package - USD 150</option>
                <option value="Nature's Beauty Package - USD 300">Nature's Beauty Package - USD 300</option>
            </select><br><br><br>
            <label for="msg">Type Your Message Here : </label><br>
            <textarea id="msg" name="msg" rows="10"></textarea><br><br><br>
            <input class="my-button" type="submit" value="Submit">
        </form>
    </section>

    <!-- Footer Section  -->
    <footer>
        <p class="footer-text">© Malcolm Lismore - 2024</p>
        <p class="footer-text">Developed By Saviska Jayawickrama</p>
        <p class="footer-text"><a href="https://saviska-jay.github.io/"><img
                    src="https://i.pinimg.com/originals/b0/f6/9b/b0f69bc06598a0cbb29c0e6d771aef4a.gif" width="5%"></a>
        </p>


    </footer>


    
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
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $tel_no = $_POST['tel-no'];
        $email = $_POST['contact-form-email'];
        $package = $_POST['package-list'];
        $message = $_POST['msg'];
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contact_me_form_table (first_name, last_name, tel_no, email, package, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $first_name, $last_name, $tel_no, $email, $package, $message);
        // Execute statement
        if ($stmt->execute()) {
            $success = true;
        } else {
            $success = false;
        }
        // Close connection
        $stmt->close();
        $conn->close();
    }
    ?>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            <?php if ($success) { ?>
                alert("Contact form submitted successfully.");
            <?php } else { ?>
                alert("Error occurred during submission!");
            <?php } ?>
        });
    </script>

</body>

</html>