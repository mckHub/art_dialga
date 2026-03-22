<?php

// Check if email parameter is set and not empty
if(isset($_GET['email']) && !empty($_GET['email'])) {
    // Sanitize the email address
    $erre = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
} else {
    // Handle the case where email parameter is missing or empty
    echo "Email parameter is missing or empty.";
    exit();
}

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Configure SMTP for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'malickdialga9@gmail.com';  // Replace with your Gmail email address
$mail->Password = 'lbaitphpfzhdlmwq';  // Replace with your Gmail password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use TLS
$mail->Port = 587;
$mail->isHTML(true);  // Set email format to HTML

// Set email content
$mail->setFrom('malickdialga9@gmail.com', 'ArtDialga');  // Replace with your Gmail email address
$mail->addAddress($erre, 'Madia');
$mail->Subject = 'Souscription';
$mail->Body = '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abonnement aux actualités</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <table role="presentation" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="center">
                <table role="presentation" cellspacing="0" cellpadding="0" width="600">
                    <tr>
                        <td style="background-color: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <h3 style="color: #333333;text-align: center;">Abonnement pour recevoir des actualités</h3>
                            

                            <p style="color: #666666;">Merci d\'avoir choisi de recevoir des actualités d\'ArtDialga </p>
                            
                            <p style="color: #666666;">Si vous n\'avez pas choisi de vous abonner à nos actualités, vous pouvez ignorer cet e-mail en toute sécurité.</p>
                            <p style="color: #666666;">Merci,<br><br>ArtDialga</p>

                            <!-- Example of including a link -->

                            
                            
                            <p style="text-align: center;">
                                <a href="https://artdialga/index.php" style="color: #3498db; text-decoration: none;">Visiter notre site Web</a> |
                                <a href="https://artdialga.com/pages/souscription.php?email=' . $erre . '" style="color: #3498db; text-decoration: none;">Se Désabonnez-vous</a>
                            </p>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>
';

// Database configuration
$db_host = 'localhost';
$db_username = 'ytdcfvmy_malick';
$db_password = 'iRG4!-QnM_qA';
$db_name = 'ytdcfvmy_artdialga_db';

// Create a connection to the database
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');

// Sanitize email address to prevent SQL injection
$erre = mysqli_real_escape_string($db, $erre);

// Check if the email already exists in the database
$check_query = "SELECT * FROM emails WHERE email = '$erre'";
$check_result = mysqli_query($db, $check_query);

// If the email already exists, redirect with a notification
if (mysqli_num_rows($check_result) > 0) {
    header('Location: ../index.php?mytoastVariablenon');
    exit();
} else {
    // Insert the email into the database
    $insert_query = "INSERT INTO emails (email) VALUES ('$erre')";
    $result = mysqli_query($db, $insert_query);

    // Check if the insertion was successful
    if ($result) {
        // Send the email
        if ($mail->send()) {
            // Redirect with a success notification
            header('Location: ../index.php?mytoastVariable');
            exit();
        } else {
            // Handle email sending error
            echo 'Une erreur s\'est produite lors de l\'envoi de l\'email: ' . $mail->ErrorInfo;
        }
    } else {
        // Handle database insertion error
        echo 'Error: ' . mysqli_error($db);
    }
}

// Close the database connection
mysqli_close($db);
?>
