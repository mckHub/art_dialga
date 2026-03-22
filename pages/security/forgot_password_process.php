<?php
    if(isset($_POST['reset'])) {
        $email = $_POST['email'];
    }
    else {
        exit();
    }
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require '../../PHPMailer/src/Exception.php';
    require '../../PHPMailer/src/PHPMailer.php';
    require '../../PHPMailer/src/SMTP.php';
    
    $mail = new PHPMailer();
    
    // SMTP configuration for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'malickdialga9@gmail.com';  // Replace with your Gmail email address
    $mail->Password = 'lbaitphpfzhdlmwq';  // Replace with your Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use TLS
    $mail->Port = 587;
    
    
    // Email content
    $mail->setFrom('malickdialga9@gmail.com', 'ArtDialga');  // Replace with your Gmail email address
    
    $mail->addAddress($email,'Madia');
    $mail->Subject = 'Votre commande';
    $mail->Body = 'Merci d\'avoir Contacter ArtDialga';
    
    // Send the email
    


        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Réinitialisation du mot de passe';
    
        $conn = new mySqli('localhost', 'ytdcfvmy_malick', 'iRG4!-QnM_qA', 'ytdcfvmy_artdialga_db');

if($conn->connect_error) {
    die('Could not connect to the database.');
}
$nameQuery = $conn->query("SELECT nom FROM users WHERE email = '$email'");
        
        // Check if the nameQuery was successful
        if ($nameQuery && $nameQuery->num_rows > 0) 
        {
            $userData = $nameQuery->fetch_assoc();
            $nom = $userData['nom'];
            
            // Now $nom contains the name of the user
//            echo "Name of the user: " . $nom;
        }
        else{
            header('Location: forgot_password.php?inconnu');   
        }
        $mail->Body    = '<!DOCTYPE html>
        
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Réinitialisation du mot de passe</title>
        </head>
        <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
        
            <table role="presentation" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td align="center">
                        <table role="presentation" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                                <td style="background-color: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <h3 style="color: #333333;">Réinitialiser votre mot de passe</h3>
                                    

                                    <p style="color: #666666;">' . $nom . ',Vous avez demandé de réinitialiser votre mot de passe. Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe :</p>
                                    <p>
                                        
                                    
                                    <a style="color: #3498db; text-decoration: none;" href="https://artdialga.com/pages/security/change_password.php?code=' . $code . '&email=' . $email . '">Réinitialiser le mot de passe</a>

                                    </p>
                                    <p style="color: #666666;">Si vous n\'avez pas demandé cette réinitialisation de mot de passe, vous pouvez ignorer en toute sécurité cet e-mail.</p>
                                    <p style="color: #666666;">Merci,<br>ArtDialga</p>

                                  

                            <!-- Example of including a link -->
                            <p style="text-align: center;">
                                <a href="https://artdialga.com/index.php" style="color: #3498db; text-decoration: none;">Visiter notre site Web</a>
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





    


        $conn = new mySqli('localhost', 'ytdcfvmy_malick', 'iRG4!-QnM_qA', 'ytdcfvmy_artdialga_db');

        if($conn->connect_error) {
            die('Could not connect to the database.');
        }

        $verifyQuery = $conn->query("SELECT * FROM users WHERE email = '$email'");

        if($verifyQuery->num_rows) {
            $codeQuery = $conn->query("UPDATE users SET reset_token = '$code', token_expiration = NOW() WHERE email = '$email'");
                
//            $mail->send();
            if ($mail->send()) {
                

                echo '<div class="bg-light">
        <div class="container mt-5">
            <div class="card">
                <div class="card-body text-center">
                    <h2 class="card-title mb-4">Réinitialisation du mot de passe</h2>
                    <p class="card-text">Un email de réinitialisation de mot de passe a été envoyé à votre adresse. Veuillez vérifier votre boîte de réception.</p>
                    <a href="../../index.php" class="btn btn-primary">Retour à l\'accueil</a>
                </div>
            </div>
        </div>
    </div>';

                
            } else {
                echo 'Error: ' . $mail->ErrorInfo;
            }
            
        }
        $conn->close();
    
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de mail de recuperation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>


<body >
    


    <!-- Bootstrap JS (optional, for certain features like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-rqXdLbCTjztA7thTpu8AZkAOxHdSw2ft9bGmG8fGoA2EVqGx2hjOS2xCyoA7JsS6" crossorigin="anonymous"></script>
</body>
</html>




