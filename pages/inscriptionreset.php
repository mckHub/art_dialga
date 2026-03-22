<?php
session_start();
$emailuser = isset($_SESSION['emailuser']) ? $_SESSION['emailuser'] : '';

$servername = "localhost";
$username = "ytdcfvmy_malick";
$password = "iRG4!-QnM_qA";
$dbname = "ytdcfvmy_artdialga_db";

$conn = new mysqli($servername, $username, $password, $dbname);
$req = "SELECT * FROM users WHERE email='$emailuser'";
$resultat = mysqli_query($conn, $req) or die("la requête ne peut pas être exécutée");
$User = mysqli_fetch_assoc($resultat);
$nom = $User['nom'];
$email = $User['email'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    // Assign values from form
    $Nom_User = $_POST['nom'];
    $email = $emailuser; // Assuming you want to update the current user's email
    
    // Prepare update query
    $updateQuery = "UPDATE users SET nom = ? WHERE email = ?";
    
    // Prepare statement
    $updateStmt = $conn->prepare($updateQuery);
    
    // Bind parameters
    $updateStmt->bind_param("ss", $Nom_User, $email); // Assuming 'nom' is a string and 'email' is a string as well
    
    // Execute statement
    if ($updateStmt->execute()) {
        header("Location: connexion.php");
        exit(); // Exit to prevent further execution
    } else {
        header("Location: connexion.php");
        exit(); // Exit to prevent further execution
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier Profil</title>
    <link rel="stylesheet" href="../css/inscriptionreset.css">
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
    <h4 class="label">Rééditer votre compte</h4>
    <form class="login_form" action="inscriptionreset.php" method="post" name="form" onsubmit="return validated()">
        <div class="font">Nom</div>
        <input autocomplete="off" type="text" name="nom" value="<?php echo $nom; ?>" maxlength="9">
        <div id="nom_error">Votre nom doit avoir au moins 3 caractères</div>
        
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
