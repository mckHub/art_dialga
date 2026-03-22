<?php

session_start();






// Check if the session is active before attempting to destroy it
if (isset($_SESSION)) {
                if(isset($_GET['deconnexion']))
                { 
                    $deconnexion = $_GET['deconnexion'];
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      session_destroy();
                      header("Location: ../index.php?receivedBoolVariable=false");
                
                      exit(); 
                   }
                                }                }
               
            ?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page connexion</title>
    
  <link rel="icon" href="assets/titleiconl.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
</head>
<body>




  
  <div class="container-fluid" style="margin-top: 10px;" id="sidebar">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-md-8">
            <form action="verification.php" method="POST">
              
                <input type="email" placeholder="Votre email" name="email" required>
                <input type="password" placeholder="Mot de passe" name="password" required>
                <div class="link">
                    <button type="submit" id="submit" class="login">Connexion</button>
                    <a href="../html/forgot_password.html" class="forgot">Mot de passe Oublié?</a>
                </div>
                <hr>
                <div class="button">
                    <a href="inscription.php">Creér un nouveau compte</a>
                
                </div>
                
            </form>
        </div>
    </div>
</div>
        
      <?php
                if(isset($_GET['m'])){
                    $err = $_GET['m'];
                    
                    if($err==1 || $err==2)
                    {
                        echo "<center> <p style='color:red'; font-family:Georgia, 'Times New Roman', Times, serif;>Email ou mot de passe incorrect.</p></center>";
                    }
                        
                        if($err==4)
                        {
                            echo "<center> <p style='color:red; font-family:Georgia, 'Times New Roman', Times, serif; margin-top: 40px;'>Connectez vous a votre Compte pour passer une commande.</p></center>";

                        }
                        
				
						
                }
                ?>          




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="script/scriptdefile.js" defer></script>
<script src="script/script.js" defer></script>
</body>
</html>