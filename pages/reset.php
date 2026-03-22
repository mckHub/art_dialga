<?php
// Database configuration
$dbHost = 'your_database_host';
$dbName = 'your_database_name';
$dbUser = 'your_database_user';
$dbPassword = 'your_database_password';

// Connect to the database
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Function to generate a random token
function generateToken() {
    return bin2hex(random_bytes(32));
}

// Function to send a password reset email
function sendResetEmail($email, $token) {
    // Implement your email sending logic here
    // You may use a library like PHPMailer or mail() function
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form is submitted
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        // Check if the email exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Generate a unique token
            $token = generateToken();

            // Store the token in the database
            $stmt = $conn->prepare("UPDATE users SET reset_token = :token WHERE email = :email");
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // Send a password reset email with the token
            sendResetEmail($email, $token);

            echo "Password reset email sent. Check your email for further instructions.";
        } else {
            echo "Email not found in our records.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>
<body>
    <h2>Password Reset</h2>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
