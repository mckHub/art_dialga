<?php
session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {

    $db_host = 'localhost';
    $db_username = 'ytdcfvmy_malick';
    $db_password = 'iRG4!-QnM_qA';
    $db_name = 'ytdcfvmy_artdialga_db';
    
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if ($email !== "" && $password !== "") {
        
        $stmt = mysqli_prepare($db, "SELECT id, motdepasse, nom FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        
        mysqli_stmt_store_result($stmt);

        
        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Bind the result variables
            mysqli_stmt_bind_result($stmt, $id, $stored_hashed_password, $nom);
            mysqli_stmt_fetch($stmt);

            // Verify the password
            if (password_verify($password, $stored_hashed_password)) {
                // Store session variables
                $_SESSION['myBoolVariable'] = true; // or false
                $_SESSION['nom'] = $nom;
                $_SESSION['emailuser'] = $email;

                // Corrected SQL query using parameterized statement to prevent SQL injection
                $stmt = mysqli_prepare($db, "SELECT email, COUNT(*) AS t FROM commande WHERE email = ?");
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $reponsen = mysqli_fetch_assoc($result);
                $_SESSION['t'] = $reponsen['t'];

                // Redirect to index.php with commande_count as a parameter
                header('Location: ../index.php?t=' . $_SESSION['t']);
                exit();
            } else {
                $errv = 1;

                header('Location: connexion.php?m=' . $errv); // Mot de passe incorrect
                exit();
            }
            
        } else {
            header('Location: connexion.php?m=1'); // Utilisateur non trouvé
            exit();
        }
    } else {
        header('Location: connexion.php?m=2'); // Utilisateur ou mot de passe vide
        exit();
    }
} else {
    header('Location: ../index.php');
    exit();
}

mysqli_close($db); // Fermer la connexion
?>
