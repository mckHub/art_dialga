<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe Oublie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container p-3 border border-1 rounded-3 mt-3">
        <h1 class="display-8 text-center p-2 ">Réinitialisation du mot de passe</h1>
        <form action="forgot_password_process.php" method="post">
            <div class="row mb-3 justify-content-md-center">
                <div class="col-md-6 col-lg-4">
                    <input type="email" name="email" placeholder="Addresse Email " class="form-control">
                </div>
                <div class="col-md-6 col-lg-2">
                    <button type="submit" class="btn btn-primary w-100" name="reset">Réinitialiser</button>
                </div>
            </div>
        </form>
    </div>
    <?php
                if(isset($_GET['inconnu'])){
                    
                        echo "<center> <p style='color:red'; font-family:Georgia, 'Times New Roman', Times, serif;>Aucun compte utilise cet émail.</p></center>";
                        echo "<center><p style='margin-top:20px; color:blue; font-family:Georgia, \"Times New Roman\", Times, serif;'><a href='../../pages/inscription.php' style='text-decoration: none;'>Créer un nouveau compte</a></p></center>";


						
                }
                ?>
    <!-- Bootstrap JS (optional, for certain features like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-rqXdLbCTjztA7thTpu8AZkAOxHdSw2ft9bGmG8fGoA2EVqGx2hjOS2xCyoA7JsS6" crossorigin="anonymous"></script>
</body>
</html>
