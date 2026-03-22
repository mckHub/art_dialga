<?php
session_start();

// Retrieve the bool variable from the session
$receivedBoolVariable = isset($_SESSION['myBoolVariable']) ? $_SESSION['myBoolVariable'] : false;
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$emailuser = isset($_SESSION['emailuser']) ? $_SESSION['emailuser'] : '';
$emailuser = filter_var($emailuser, FILTER_SANITIZE_EMAIL);
$commande_count = isset($_SESSION['commande_count']) ? $_SESSION['commande_count'] : '0';

// Now $receivedBoolVariable contains the boolean value
//echo "Received Bool Variable: " . ($receivedBoolVariable ? 'true' : 'false');
// Retrieve product details from the URL parameters

if(isset($_GET['setcommande_count'])){
  $commande_count = $_GET['setcommande_count'];
  

}
?>







<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vos commandes</title>
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    
  <link rel="icon" href="assets/titleiconl.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/stylecopy.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
</head>
<body>
  <style>
    .fa-star{
      color:#D2AA15;
    }
    </style>
  

  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light pt-1 pb-1 fixed-top" >
    <div class="container-xxl flex-container" style="margin:0; ">
      <!-- navbar brand / title -->
      <a class="navbar-brand" href="#intro">
        <span class="" id="intro">
          <img src="../assets/art1.png" width="40 px"  alt="Mon art" style="margin-right: 10px; border-radius: 60%;">
          ArtDialga
        </span>
      </a>
      
      <?php
      if ($receivedBoolVariable) {

  
        $db_host = 'localhost';
        $db_username = 'ytdcfvmy_malick';
        $db_password = 'iRG4!-QnM_qA';
        $db_name = 'ytdcfvmy_artdialga_db';



$db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');
$emailuser = mysqli_real_escape_string($db, $emailuser); 

$check_query = "SELECT * FROM commande WHERE email = '$emailuser'";
$check_result = mysqli_query($db, $check_query);
$num_rows = mysqli_num_rows($check_result);
         


echo '<div class="dropdown no-space column " style="width:0px;background-color:red;color:red;">';
echo '<button class="btn btn-secondary dropdown-toggle d-md-none d-block" style="left:30px;margin:0;padding:0;background-color:#232f3e;border:none;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';

echo $nom;
echo '</button>';
echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenuButtonsous" >';
echo '<a class="dropdown-item" href="#sidebarprofile" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">';
echo '<p style="color:black;margin:0">Profil</p>';
echo '</a>';
echo '<a class="dropdown-item" href="#sidebarcommandes" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">';
echo '<p ">Commandes</p>';
echo '</a>';
echo '<a class="dropdown-item" href="pages/connexion.php?deconnexion=true">';
echo '<p style="color:red;margin:0">Deconnexion</p>';
echo '</a>';
echo '</div>';
echo '</div>';
}
      ?>
          

      
        
          <!--<a class="d-md-none d-block" href="#sidebarprofilemobile" style="margin-left:90px;text-decoration:none;color:white;"  data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
          <i class="fa-solid fa-user" style="margin-right:20px"></i>
      </a>-->
      
      

      <a href="#sidebarcommandesde" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
<button type="button" class="btn btn-secondary   d-md-none d-block" style=" background-color:#232f3e;border:none;">
<span class="navbar-toggler-icon " style="background-color:white;font-size:16px"></span>


</span>
</button>
</a>

      
      <!-- toggle button for mobile nav        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon " style="background-color:white"></span>
      </button>
-->
      
      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav" >
          <li class="nav-item  " id="Accueil">
            <a class="nav-link"  href="../index.php" style="">Acceuil</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link "  href="../pages/gallerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="../pages/profil.php">
Portfolio</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link" href="pages/../contact.php">Contacts</a>
            
          </li>
        </ul>
        
        
        


        
        <?php
            // Check if the user is authenticated
           // $userAuthenticated = false; // Replace this with your authentication check

            if ($receivedBoolVariable) {
                // Display the user's name if authenticated


       echo'<a href="#sidebarcommandes"   data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">';

                
                
                echo'<button type="button" class="btn btn-secondary position-relative d-none d-md-block" style="background-color:#232f3e;border:none;margin-right:25px;">';
                echo'<i class="fa-solid fa-cart-shopping" style="color:white;font-size:20px"></i>';
                echo'<span class="position-absolute top-0 start-110 translate-middle badge rounded-pill bg-info">';
                  echo $num_rows;
                  
                echo'</span>';
              echo'</button>';
echo'</a>';

               


                echo '<div class="dropdown d-none d-md-block">';
                echo '  <button class="btn btn-secondary dropdown-toggle"  style="background-color:#232f3e;border:none;margin-right:25px;"type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                
                echo'<i class="fa-solid fa-user" style="margin-right:3px;"></i>';
                echo $nom;
                echo '  </button>';
                echo '  <div  class=" dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenuButtonsous">';
                echo '    <a class="dropdown-item" href="#sidebarprofile"  data-bs-toggle="offcanvas" role="button" aria-controls="sidebar"">';
                echo '      <p style="color:black;margin:0">Profil</p>';
                echo '    </a>';
                echo '    <a class="dropdown-item" href="../pages/connexion.php?deconnexion=true">';
                echo '      <p style="color:red;margin:0">Fermer</p>';
                echo '    </a>';
                echo'<button type="button" class="btn btn-secondary position-relative d-block d-md-none" style="">';
                echo'<i class="fa-solid fa-cart-shopping" style="color:white;"></i>';
                echo'<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">';
                  echo'3';
                  
                echo'</span>';
              echo'</button>';

                echo '  </div>';
                echo '</div>';

                


                
                
                
            
            } else {
                // Display the login link if not authenticated
                echo '<a href="connexion.php" class="nav-link" id="button">Connexion</a>';
                
            }?>
      </div>
    </div>
  </nav>

  

<?php

?>








  <!-- form-control, form-label, form-select, input-group, input-group-text -->
  
  <!-- get updates / modal trigger -->
  

  <!-- modal itself -->
  
  <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Recevez les dernières mises à jour</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="modal-email" class="form-label" name="emailsub">Votre adresse email :</label>
                <input type="email" class="form-control" id="modal-email" placeholder="Exemple: zongofatao@gmail.com">
            </div>
            <div class="modal-footer">
                <!-- Add an id to the button -->
                <a href="javascript:void(0);" id="sendButton" class="btn btn-primary">Envoyer</a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Get references to the email input and the send button
    var emailInput = document.getElementById('modal-email');
    var sendButton = document.getElementById('sendButton');

    // Add a click event listener to the send button
    sendButton.addEventListener('click', function () {
        // Validate the email format using a regular expression
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var isValidEmail = emailPattern.test(emailInput.value);

        // Display an alert or perform further actions based on email validity
        if (isValidEmail) {
            

            document.getElementById('sendButton').addEventListener('click', function () {
        // Retrieve the input value
        var emailValue = document.getElementById('modal-email').value;

        // Navigate to another page with the email value
        window.location.href = 'pages/send_email.php?email=' + encodeURIComponent(emailValue);
    });
        } else {
            alert('Votre Email est Invalid.');
        }
    });
});
</script>

<script>
    
</script>
        



<script>

document.addEventListener('DOMContentLoaded', function () {
    const toastLiveExample = document.getElementById('liveToast');
    
    if (toastLiveExample) {
        const toastBootstrap = new bootstrap.Toast(toastLiveExample);
        toastBootstrap.show();
    }
});



</script>

  <!-- side panel / offcanvas -->


 <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarcommandes" aria-labelledby="sidebar-label" style="width: 350px;">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title text-center" > Vos commandes</h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    



<?php

$db_host = 'localhost';
$db_username = 'ytdcfvmy_malick';
$db_password = 'iRG4!-QnM_qA';
$db_name = 'ytdcfvmy_artdialga_db';
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');
$emailuser = mysqli_real_escape_string($db, $emailuser); 

$check_query = "SELECT * FROM commande WHERE email = '$emailuser' ORDER BY timecommande DESC";

$check_result = mysqli_query($db, $check_query);
$num_rows = mysqli_num_rows($check_result);
if($num_rows!=0)
{
  echo '<div class="container" style="height: 300px; overflow-y: auto;">';
echo '<table>';
echo '<tr>';
echo '<th style="padding-right: 150px;">Tableau</th>';
echo '<th style="padding-right: 150px;">Prix(€)</th>';
echo '</tr>';
$total_prix = 0; // Initialize total prix variable
$row_number = 0;
while($User = mysqli_fetch_assoc($check_result)) {
    $row_number++;
    $background_color = $row_number % 2 == 0 ? '#efc5c5' : '#FFFFFF'; // Alternate background colors
    echo '<tr style="background-color: '.$background_color.';">';
    echo '<td><div style="padding-top: 10px; padding-bottom: 10px;">'.$User['nom_tableau'].'</div></td>';
    echo '<td><div style="padding-top: 10px; padding-bottom: 10px;">'.$User['prix'].'</div></td>';
    echo '</tr>';
    // Add prix of each row to the total prix
    $total_prix += $User['prix'];
}
echo '<tr style="height: 7px;"></tr>';
echo '<tr>';
echo '<td style="font-weight:bold">Total</td>';
echo '<td style="font-weight:bold">'.$total_prix.' €</td>';
echo '</tr>';
echo '</table>';
echo '<div class="profile-action">';
echo '<a href="#?emaile=' . $emailuser . '"><button class="btn-edit-profile">Modifier</button></a>';
echo '</div>';
echo '<p style="margin-top:100px;"></p>';
echo '</div>';
}

else{
  echo '<div class="container text-center">';
  echo '<p class="my-3">Aucune  commande d\'abord.</p>';
  echo '</div>';
}

?>
		
    
</div>
	
  


    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarprofilemobile" aria-labelledby="sidebar-label">
    <div class="offcanvas-header text-center">
    <h5 class="offcanvas-title " ></h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

<div class="">
    <div class="profile-header">
        <img src="../assets/imgp.png" alt="Profile Picture" class="profile-picture">
        <h2 class="profile-name"><?php echo $nom?></h2>
    </div>
    <div class="profile-info">
        <p><i class="fas fa-envelope"></i><?php echo $emailuser?></p>
        <p><i class="fa-solid fa-id-card"></i> <?php echo $nom?></p>
        <p><i class="fa-solid fa-basket-shopping"></i> <?php echo $commande_count?> Commande(s)</p>
    </div>
    <div class="profile-action">
        <button class="btn-edit-profile">Editer</button>
    </div>
</div>
</div>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarprofile" aria-labelledby="sidebar-label">
    <div class="offcanvas-header text-center">
    <h5 class="offcanvas-title " ></h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>



<div class="">
    <div class="profile-header">
        <img src="../assets/imgp.png" alt="Profile Picture" class="profile-picture">
        <h2 class="profile-name"><?php echo $nom?></h2>
    </div>
    <div class="profile-info">
        <p><i class="fas fa-envelope"></i><?php echo $emailuser?></p>
        <p><i class="fa-solid fa-id-card"></i><?php echo $nom?></p>
        <p><i class="fa-solid fa-basket-shopping"></i> <?php echo $num_rows?> Commande(s)</p>
    </div>
    <div class="profile-action">
    
        <a href="pages/inscriptionreset.php?emaile=' . $emailuser . '"><button class="btn-edit-profile">Editer</button></a>
    </div>
</div>
      
    </div>
    </div>



    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarcommandesde" aria-labelledby="sidebar-label" style="width: 350px;background-color:white;color:black;">
    
    <div class="sidebar">
        <div class="logo">
          
          <span class="logo-name" style="margin-left:100px;">         </span>
          <button style="margin-left:220px" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="sidebar-content" >
          <ul class="lists ">
            <li class="list " >
              <a href="../index.php" class="nav-link">
                <i class="bx bx-home-alt icon" style="color:black;"></i>
                <span class="link">Accueil</span>
              </a>
            </li>
            <li class="list">
              <a href="gallerie.php" class="nav-link">
              <i class="fa-solid fa-photo-film" style="color:black; margin-right:12px;" ></i>
                <span class="link">Galerie</span>
                
              </a>
            </li>
            <li class="list">
              <a href="profil.php" class="nav-link">
              <i class="fa-solid fa-user" style="color:black; margin-right:17px;"></i>
                <span class="link">
Portfolio</span>
              </a>
            </li>
            <li class="list">
              <a href="contact.php" class="nav-link">
              <i class="fa-solid fa-phone-flip" style="color:black; margin-right:16px;"></i>
                <span class="link">Contacts</span>
              </a>
            </li>
            <?php if ($receivedBoolVariable) {

            echo'<li class="list" style=" margin-top:40px;">';
            echo '<a href="../pages/connexion.php?deconnexion=true" class="nav-link">';
              
              echo'<i class="fa-solid fa-right-from-bracket" style="color:black; margin-right:16px;"></i>';       
                echo'<span class="link">Se deconnecter</span>';
              echo'</a>';
            echo'</li> ';
            }

            else{
              echo'<li class="list" style=" margin-top:40px;">';
              echo'<a href="pages/connexion.php" class="nav-link">';
              echo'<i class="fa-solid fa-right-from-bracket" style="color:black; margin-right:16px;"></i>';
              
                echo'<span class="link">Se connecter</span>';
              echo'</a>';
            echo'</li> ';
            }    
            ?>    
          </ul>

          
          </div>   
    </div>
    </div>
    


    <?php
$emailuser = isset($_SESSION['emailuser']) ? $_SESSION['emailuser'] : '';

                ?>
<?php

$db_host = 'localhost';
$db_username = 'ytdcfvmy_malick';
$db_password = 'iRG4!-QnM_qA';
$db_name = 'ytdcfvmy_artdialga_db';$db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');
$req = "SELECT * FROM commande WHERE email='$emailuser'";

$resultat = mysqli_query($db, $req) or die ("la requête ne peut pas être exécutée");
					
 
?>
	

  
  <div class="container-fluid" style="margin-top:60px">
    <div class="row">
      <div class="col-md-9">
        <div class="">
          <!-- Content for the first column -->
          <div id="container">

<FORM Method="POST" Action="">    
<table class="table table-striped">
  <thead>
    <tr>    

      <th scope="col">Nom</th>
      
      <th scope="col">Tableau</th>
      <th scope="col">Addresse de Livraison</th>
    
      <th scope="col">Prix</th>
      <th scope="col"style="text-align:center;">Supprimer</th>
      
    </tr>
  </thead>
  <tbody>
    
    <?php
    $total_prix = 0; // Initialize total prix variable
    $row_number = 0;
    
while($User = mysqli_fetch_assoc($resultat)) {
    $row_number++;
    $total_prix += $User['prix'];
?>

<tr class="">

    
    <td><?php echo $User['nom'];?> <?php echo $User['prenom'];?></td>
    
    
    <td><?php echo $User['nom_tableau'];?></td>
    <td><?php echo $User['adresse_livraison'];?></td>
    
    <td><?php echo $User['prix'];?></td>
    <td style="text-align:center;"><a style="text-decoration:none;color:red;" href="modifiercommande.php?id=<?php echo $User['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>

</tr>
<?php
}

?>

    <tr>
    <td colspan=3 style="font-weight:bold;"><?php echo $row_number ?> Commande(s) </td>
    <td colspan=2 style="font-weight:bold;">Total: <?php echo $total_prix ?> €</td>
    
    
</tr>
  </tbody>
  
</table>
	


      
</form>

        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-muted">
        <h3 class="" style="margin-bottom:20px;">Options de Paiement</h3>

<p class=" " style="font-size:15px;">Merci d'avoir choisi nos produits ! Voici les options de paiement disponibles :</p>

<h4>1. Western Union</h4>
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
  </div>











<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarcommandesde" aria-labelledby="sidebar-label" style="width: 350px;background-color:white;color:black;">
    
    <div class="sidebar">
        <div class="logo">
          
          <span class="logo-name" style="margin-left:100px;">         </span>
          <button style="margin-left:220px" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="sidebar-content" >
          <ul class="lists ">
            <li class="list " style="  background-color: #dfe3f1;margin-left:0px;">
              <a href="#" class="nav-link">
                <i class="bx bx-home-alt icon" style="color:black;"></i>
                <span class="link">Accueil</span>
              </a>
            </li>
            <li class="list">
              <a href="pages/gallerie.php" class="nav-link">
              <i class="fa-solid fa-photo-film" style="color:black; margin-right:12px;" ></i>
                <span class="link">Galerie</span>
                
              </a>
            </li>
            <li class="list">
              <a href="pages/profil.php" class="nav-link">
              <i class="fa-solid fa-user" style="color:black; margin-right:17px;"></i>
                <span class="link">
Portfolio</span>
              </a>
            </li>
            <li class="list">
              <a href="pages/contact.php" class="nav-link">
              <i class="fa-solid fa-phone-flip" style="color:black; margin-right:16px;"></i>
                <span class="link">Contacts</span>
              </a>
            </li>
            <?php if ($receivedBoolVariable) {

            echo'<li class="list" style=" margin-top:40px;">';
            echo '<a href="pages/connexion.php?deconnexion=' . urlencode(htmlspecialchars('true', ENT_QUOTES, 'UTF-8')) . '" class="nav-link">';

              
              echo'<i class="fa-solid fa-right-from-bracket" style="color:black; margin-right:16px;"></i>';       
                echo'<span class="link">Se deconnecter</span>';
              echo'</a>';
            echo'</li> ';
            }

            else{
              echo'<li class="list" style=" margin-top:40px;">';
              echo'<a href="pages/connexion.php" class="nav-link">';
              echo'<i class="fa-solid fa-right-from-bracket" style="color:black; margin-right:16px;"></i>';
              
                echo'<span class="link">Se connecter</span>';
              echo'</a>';
            echo'</li> ';
            }    
            ?>    
          </ul>

          
          </div>   
    </div>
    </div>





    <?php include 'footer.php'; ?>

  
  
	





  
  


    


            
            <!-- Malick Dialga -->
            


<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  const tooltips = document.querySelectorAll('.tt')
  tooltips.forEach(t => {
    new bootstrap.Tooltip(t)
  })
</script>
<script src="script/scriptdefile.js" defer></script>
<script src="script/script.js" defer></script>
</body>
</html>













