<?php include 'change_password_process.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement du mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<?php 
$uemail = isset($_GET['email']) ? $_GET['email'] : null;
?>
    <div class="container p-3 border  rounded-3" style="max-width: 600px">
        <h3 class="display-6 text-center p-2 ">
            Changer Votre mot de Passe
        </h3>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" name="email" id="inputEmail" value="<?php echo $uemail?>" class="form-control" required readonly>
                </div>
            </div>
            <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Nouveau Mot de Passe</label>
    <div class="col-sm-8">
        <input type="password" name="new_password" id="newPassword" class="form-control" required>
    </div>
</div>

<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Confirmez Mot de Passe</label>
    <div class="col-sm-8">
        <input type="password" name="confirm_password" id="confirmPassword" class="form-control" required>
        <div id="passwordMatchMessage"></div>
    </div>
</div>

<script>
document.getElementById("confirmPassword").addEventListener("keyup", function() {
    var newPassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var messageElement = document.getElementById("passwordMatchMessage");
    
    if (newPassword === confirmPassword) {
        messageElement.innerHTML = "Les mots de passe correspondent.";
        messageElement.style.color = "green";
    } else {
        messageElement.innerHTML = "Les mots de passe ne correspondent pas.";
        messageElement.style.color = "red";
    }
});
</script>
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <button  type="submit" class="btn btn-primary" name="change">Valider</button>
        </div>
    </div>
</div>

        </form>
    </div>

    <!-- Optional: Add Bootstrap JS (for some functionalities like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8W+3lP7/7kOGaMKtQpA6STDKD4FNtMmM2iRaFndbcZl+iGgJsFNVZ4YU2tWW" crossorigin="anonymous"></script>
</body>
</html>
