<?php
    if(isset($_GET['code'])) {
        $code = $_GET['code'];

        $conn = new mySqli('localhost', 'ytdcfvmy_malick', 'iRG4!-QnM_qA', 'ytdcfvmy_artdialga_db');
        if($conn->connect_error) {
            die('Could not connect to the database');
        }

        $verifyQuery = $conn->query("SELECT * FROM users WHERE reset_token = '$code' and token_expiration >= NOW() - INTERVAL 1 DAY");

        if($verifyQuery->num_rows == 0) {
            header("Location: ../../pages/connexion.php");
            exit();
        }

        if(isset($_POST['change'])) {
            $email = $_POST['email'];
            $new_password = $_POST['new_password'];
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $changeQuery = $conn->query("UPDATE users SET motdepasse = '$hashed_password' WHERE email = '$email' and reset_token = '$code' and token_expiration >= NOW() - INTERVAL 1 DAY");

            if($changeQuery) {
                header("Location: ../../index.php");
            }
        }
        $conn->close();
    }
    else {
        header("Location: index.html");
        exit();
    }
?>
