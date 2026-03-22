<?php
session_start(); // Start or resume the session

// Get the session variable
// Retrieve the current value of $_SESSION['commande_count'] or set it to 0 if it doesn't exist
$commandeCount = isset($_SESSION['commande_count']) ? $_SESSION['commande_count'] : 0;
if (!isset($_SESSION['commande_count'])) {
    $_SESSION['commande_count'] = $commandeCount;
} 
else{
$newCommandeCount = $commandeCount + 1;

// Optionally, you can update the value in $_SESSION['commande_count'] with the new incremented value
$_SESSION['commande_count'] = $newCommandeCount;
    
}

?>

<?php
              if(isset($_GET['m']) && isset($_GET['p']) && isset($_GET['z']) && isset($_GET['n']) && isset($_GET['e'])){
                $prix = isset($_GET['m']) ? base64_decode(urldecode($_GET['m'])) : '';
                $produit = isset($_GET['p']) ? base64_decode(urldecode($_GET['p'])) : '';
                $adresse_livraison = isset($_GET['z']) ? base64_decode(urldecode($_GET['z'])) : '';
                $nom = isset($_GET['n']) ? base64_decode(urldecode($_GET['n'])) : '';
                $email = isset($_GET['e']) ? base64_decode(urldecode($_GET['e'])) : '';
                                
              }
                ?>
                

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <title>Remerciement pour Votre Commande</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-top: 10px;
        }

        .order-details {
            text-align: left;
            margin-top: 30px;
        }

        .thank-you-message {
            color: #28a745;
            font-weight: bold;
            margin-top: 20px;
        }

        img {
            max-width: 50%;
            height: auto;
        }
    </style>
</head>
<body>





<style>
  /* Custom CSS for image size */
  .rounded-image {
    width: 250px; /* Set your desired width */
    height: 250px; /* Set your desired height */
    overflow: hidden; /* Ensure the image stays within the rounded border */
  }
</style>
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-6">
            <div class="container mt-2">
                <div class="rounded-circle rounded-image mx-auto">
                    <img src="../assets/merci.png" alt="Image de Remerciement" class="img-fluid">
                </div>
                <h1>Pour Votre Commande !</h1>
                <p><?php echo $nom ?>! Votre commande a été passée avec succès. Nous apprécions votre confiance.</p>
                <div class="order-details">
                    <h2>Détails de la Commande</h2>
                    <!-- Afficher les détails de la commande ici -->
                    <p><strong>Nom du Tableau :</strong> <?php echo $produit ?></p>
                    <p><strong>Montant Total :</strong> <?php echo $prix ?></p>
                    <p><strong>Addresse de Livraison :</strong> <?php echo $adresse_livraison ?></p>
                    <!-- Ajouter plus de détails si nécessaire -->        
                    <p class="thank-you-message" style="text-align:center">Nous vous enverrons un email de confirmation sous peu.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <h1 class="display-4">Options de Paiement</h1>
                <p class="lead">Merci d'avoir choisi nos produits ! Voici les options de paiement disponibles :</p>

                <h2>1. Western Union</h2>
                <p>Pour payer avec Western Union, veuillez suivre ces étapes :</p>
                <ol>
                        <li>Contactez-nous pour obtenir les détails du bénéficiaire.</li>
                        <li>Rendez-vous dans un point de vente Western Union.</li>
                        <li>Remplissez le formulaire de paiement avec les détails fournis.</li>
                        <li>Effectuez le paiement et recevez un reçu.</li>
                    </ol>

                <h2>2. MoneyGram</h2>
                <p>Pour payer avec MoneyGram, veuillez suivre ces étapes :</p>
                <ol>
                        <li>Contactez-nous pour obtenir les détails du bénéficiaire.</li>
                        <li>Rendez-vous dans un point de vente MoneyGram.</li>
                        <li>Remplissez le formulaire de paiement avec les détails fournis.</li>
                        <li>Effectuez le paiement et recevez un numéro de référence.</li>
                    </ol>

                <h2>3. Orange Money</h2>
                <p>Pour payer avec Orange Money, veuillez suivre ces étapes :</p>
                <ol>
                        <li>Contactez-nous pour obtenir les détails Orange Money.</li>
                        <li>Initiez un transfert via la plateforme Orange Money.</li>
                        <li>Fournissez les informations nécessaires pendant le transfert.</li>
                        <li>Confirmez la transaction et recevez un SMS de confirmation.</li>
                    </ol>

                <h2>4. Virements Bancaires</h2>
                <p>Pour payer par virement bancaire, veuillez nous contacter pour obtenir les coordonnées bancaires.</p>

                <p>Si vous avez des questions ou avez besoin d'aide, n'hésitez pas à nous contacter.</p>
            </div>
        </div>
    </div>
    
    <p style="text-align: center;">
        <a href="../index.php" style="color: #3498db; text-decoration: none;">Retour à la page d'accueil</a>
    </p>
</div>


    
</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

// SMTP configuration for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'malickdialga9@gmail.com';  // Replace with your Gmail email address
$mail->Password = 'lbaitphpfzhdlmwq';  // Replace with your Gmail password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use TLS
$mail->Port = 587;
$mail->isHTML(true);                                  // Set email format to HTML

// Email content
$mail->setFrom('malickdialga9@gmail.com', 'ArtDialga');  // Replace with your Gmail email address
$mail->addAddress($email, 'Madia');
$mail->Subject = 'Commande';
$mail->Body = '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de commande</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <table role="presentation" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td align="center">
                <table role="presentation" cellspacing="0" cellpadding="0" width="600">
                    <tr>
                        <td style="background-color: #ffffff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <h2 style="color: #333333;text-align:center; ">Confirmation!!</h2>
                            <p style="color: #666666;">' . $nom . ',   Merci pour Votre Commande !</p>

                           
                            <div class="container">
                          
                          
                            <p> Votre commande a été passée avec succès. Nous apprécions votre confiance.</p>
                            <div class="order-details">
                                <h3>Détails de la Commande</h3>
                                <!-- Afficher les détails de la commande ici -->
                                <p><strong>Nom du Tableau :</strong> ' . $produit . '</p>
                                <p><strong>Montant Total :</strong> ' . $prix . '</p>
                                <p><strong>Addresse de Livraison :</strong> ' . $adresse_livraison . '</p>
                                <!-- Ajouter plus de détails si nécessaire -->
                            </div>
                            
                            
                        </div>
                            <p style="color: #666666;">Si vous avez des questions ou des préoccupations, n\'hésitez pas à nous contacter.</p>
                            <p style="color: #666666;">Merci,<br><br>ArtDialga</p>

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
</html>'
;
$mail->send();
?>


<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    