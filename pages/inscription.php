<?php
$servername = "localhost";
$username = "ytdcfvmy_malick";
$password = "iRG4!-QnM_qA";
$dbname = "ytdcfvmy_artdialga_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    $Nom_User = $_POST['nom'];
    $Email = $_POST['email'];
    $MP = $_POST['password'];
    $hashed_password = password_hash($MP, PASSWORD_DEFAULT);
    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM users WHERE email = ?";
    $checkEmailStmt = $conn->prepare($checkEmailQuery);
    $checkEmailStmt->bind_param("s", $Email);
    $checkEmailStmt->execute();
    $checkEmailResult = $checkEmailStmt->get_result();

    if ($checkEmailResult->num_rows > 0) {
        // Email already exists, display an error message
        header("location:inscription.php?erreur");
        exit; // Stop execution after redirection
    } else {
        // Email doesn't exist, proceed with insertion
        $insertQuery = "INSERT INTO users(nom, email, motdepasse) VALUES(?, ?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("sss", $Nom_User, $Email, $hashed_password);

        if ($insertStmt->execute()) {
            header("location: connexion.php");
            exit; // Stop execution after redirection
        } else {
            header("location:connexion.php");
            exit; // Stop execution after redirection
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <style>
        /* Add responsive styles here */
        @media only screen and (max-width: 600px) {
            .container {
                width: 80%;
            }

            .login_form {
                width: 100%;
            }

            input {
                width: 100%;
            }

            button {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <h4 class="label">Inscription</h4>
    <form class="login_form" action="inscription.php" method="post" name="form" onsubmit="return validated()">
        <div class="font">Nom</div>
        <input autocomplete="off" type="text" name="nom" maxlength="9">
        <div id="nom_error">Votre nom doit avoir au moins 3 caractères</div>
        <div class="font">Email</div>
        <input autocomplete="off" type="text" name="email">
        
        <div id="email_error">Votre Email a un format invalid</div>
        <div class="font font2">Mot de passe</div>
        <div style="position: relative;">
            <input type="password" name="password" id="passwordInput">

            </span>
        </div>
        <div id="pass_error">Mot de passe doit avoir plus de 5 caractères</div>
        <button type="submit" name="send" style="margin-left:20px">Enregistrer</button>
    </form>
    <?php
    if(isset($_GET['erreur'])){
        echo "<center><p style='margin-bottom:5px;margin-top:15px;color:red;font-family:Georgia, Times New Roman, Times, serif;'>Un compte utilise déjà ce Email.</p></center>";
        echo "<center><a href='connexion.php' style='text-decoration: none;margin-top:30px;color:blue;font-family:Georgia, Times New Roman, Times, serif;'>Se connecter</a></center>";
    }
    ?>
</div>
<script src="../script/valid.js" defer></script>
</body>
</html>
