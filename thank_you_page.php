<?php
// Initialize variables to hold form data
$name = "";
$email = "";
$message = "";
$thankYouMessage = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validate and process the data (you can add more validation if needed)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Process the data (e.g., send an email, store in a database, etc.)
        
        // Display thank you message
        $thankYouMessage = "Thank you for your submission!";
    } else {
        $thankYouMessage = "Please fill in all the fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form Example</title>
</head>
<body>
    <h1>Contact Us</h1>
    
    <?php if (!empty($thankYouMessage)) : ?>
        <p><?php echo $thankYouMessage; ?></p>
    <?php else : ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
            
            <label for="message">Message:</label><br>
            <textarea id="message" name="message"><?php echo $message; ?></textarea><br>
            
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</body>
</html>
