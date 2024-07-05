<?php
// Include the database connection
include 'db.php';

// Fetch data from the database
$sql = "SELECT * FROM yourtable";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

// Convert data to JSON format (if needed for use in JavaScript)
$jsonData = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {  
            font-family: cursive; 
            background-color: rgba(247, 247, 241, 0.861);  
            color: #e3d80f;  
            line-height: 1.5;  
            background-image: url("images/techlogo.jpeg");  
            background-size: cover;  
            background-repeat: no-repeat;  
        }  
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>About TechSolutions</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="db.php">db</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <section>
            <h2>Our Mission</h2>
            <p>At TechSolutions, our mission is to provide innovative and reliable technology solutions to our clients.</p>
        </section>
        
        <!-- Example section to display data from database (if needed) -->
        <section>
            <h2>Database Data</h2>
            <pre><?php echo print_r($data, true); ?></pre>
        </section>
    </main>

    <!-- Contact Form -->
    <div class="container">  
        <h2>Contact Us</h2>  
        <form id="contact-form" method="post" action="contact.php">  
            <div class="form-label">  
                <label for="name">Name:</label>  
                <input required="" type="text" name="name">  
            </div>  
            <div class="form-label">  
                <label for="email">Email:</label>  
                <input required="" id="email" type="email" name="email">  
            </div> 
            <div class="form-label">  
                <label for="tel">Tel:</label>  
                <input required="" type="text" name="tel">  
            </div>  
            <div class="form-label">  
                <label for="message">Message:</label>  
                <textarea required="" id="message" name="message"></textarea>  
            </div>  
            <input id="submit-btn" value="Send Message" type="submit">  
        </form>  
    </div> 

    <footer>
        <p>&copy; 2024 TechSolutions. All rights reserved.</p>
    </footer>
</body>
</html>
