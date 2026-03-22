<?php
session_start();

$receivedBoolVariable = isset($_SESSION['myBoolVariable']) ? (bool)$_SESSION['myBoolVariable'] : false;

$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$emailuser = isset($_SESSION['emailuser']) ? $_SESSION['emailuser'] : '';
$emailuser = filter_var($emailuser, FILTER_SANITIZE_EMAIL);
$t = isset($_SESSION['t']) ? $_SESSION['t'] : '0';


if(isset($_GET['setcommande_count'])){
  $t = $_GET['setcommande_count'];
  

}
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hassane dialga</title>
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    
  <link rel="icon" href="assets/titleiconl.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
</head>
<body>
  <style>
    .fa-star{
      color:#D2AA15;
    }
    </style>

  
  <nav class="navbar navbar-expand-md navbar-light pt-1 pb-1 fixed-top">
    <div class="container-xxl flex-container" style="margin:0; ">
  
      <a class="navbar-brand" href="#intro">
        <span class="" id="intro">
          <img src="assets/art1.png" width="40 px"  alt="Mon art" style="margin-right: 10px; border-radius: 60%;">
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
         


echo '<div class="dropdown no-space column " style="width:83px;background-color:#232f3e;color:red;">';
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
echo '<p style="color:red;margin:0">Déconnexion</p>';
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
      
      
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav" >
          <li class="nav-item  " id="Accueil">
            <a class="nav-link"  href="#" style="color:#0DCAF0;">Acceuil</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link "  href="pages/gallerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="pages/profil.php">Portfolio</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link" href="pages/contact.php">Contacts</a>
            
          </li>
        </ul>
        
        
        


        
        <?php
      
            if ($receivedBoolVariable) {
      


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

                echo'<form style="color:red;padding:0" action="pages/connexion.php?deconnexion=true" method="POST">';
    echo'<input type="hidden" name="deconnexion" value="true">';
    echo'<button type="submit" class="dropdown-item"><p style="color:red;margin:0">Fermer</p></button>';
echo'</form>';
                
                echo'<button type="button" class="btn btn-secondary position-relative d-block d-md-none" style="">';
                echo'<i class="fa-solid fa-cart-shopping" style="color:white;"></i>';
                echo'<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">';
                  echo'3';
                  
                echo'</span>';
              echo'</button>';

                echo '  </div>';
                echo '</div>';

                


                
                
                
            
            } else {
      
                echo '<a href="pages/connexion.php" class="nav-link" id="button">Connexion</a>';
                
            }?>
      </div>
    </div>
  </nav>

  

<?php

?>








<div class="d-block d-sm-none">

<section class="wrapper" >
    <i class="fa-solid fa-arrow-left button" id="prev"></i>
    <div class="image-container" style="margin-top: 50px;">
    <div class="carousel" id="carousel">
        <img src="assets/img1.jpg" class="img-fluid" alt="" />
        <img src="assets/img2.jpg" class="img-fluid" alt="" />
        <img src="assets/img3.jpg" class="img-fluid" alt="" />
        <img src="assets/img4.jpg" class="img-fluid" alt="" />
        <img src="assets/img5.jpg" class="img-fluid" alt="" />
        <img src="assets/img6.jpg" class="img-fluid" alt="" />
        <img src="assets/img7.jpg" class="img-fluid" alt="" />
        <img src="assets/img8.jpg" class="img-fluid" alt="" />
        <img src="assets/img10.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        <img src="assets/img1.jpg" class="img-fluid" alt="" />
        <img src="assets/img2.jpg" class="img-fluid" alt="" />
        <img src="assets/img3.jpg" class="img-fluid" alt="" />
        <img src="assets/img4.jpg" class="img-fluid" alt="" />
        <img src="assets/img5.jpg" class="img-fluid" alt="" />
        <img src="assets/img6.jpg" class="img-fluid" alt="" />
        <img src="assets/img7.jpg" class="img-fluid" alt="" />
        <img src="assets/img8.jpg" class="img-fluid" alt="" />
        <img src="assets/img10.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        
      </div>
      <i class="fa-solid fa-arrow-right button" id="next"></i>
    </div>
  </section>

</div>
  

  


      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav" >
          <li class="nav-item  " id="Accueil">
            <a class="nav-link"  href="#" style="color:#0DCAF0;">Acceuil</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link "  href="pages/gallerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="pages/profil.php">Portfolio artistique</a>
          </li>
          <li class="nav-item"  >
            <a class="nav-link" href="pages/contact.php">Contacts</a>
            
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

                echo'<form style="color:red;padding:0" action="pages/connexion.php?deconnexion=true" method="POST">';
    echo'<input type="hidden" name="deconnexion" value="true">';
    echo'<button type="submit" class="dropdown-item"><p style="color:red;margin:0">Fermer</p></button>';
echo'</form>';
                
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
                echo '<a href="pages/connexion.php" class="nav-link" id="button">Connexion</a>';
                
            }?>
      </div>
    </div>
  </nav>

  

<?php

?>








<div class="d-block d-sm-none">

<section class="wrapper" >
    <i class="fa-solid fa-arrow-left button" id="prev"></i>
    <div class="image-container" style="margin-top: 50px;">
    <div class="carousel" id="carousel">
        <img src="assets/img1.jpg" class="img-fluid" alt="" />
        <img src="assets/img2.jpg" class="img-fluid" alt="" />
        <img src="assets/img3.jpg" class="img-fluid" alt="" />
        <img src="assets/img4.jpg" class="img-fluid" alt="" />
        <img src="assets/img5.jpg" class="img-fluid" alt="" />
        <img src="assets/img6.jpg" class="img-fluid" alt="" />
        <img src="assets/img7.jpg" class="img-fluid" alt="" />
        <img src="assets/img8.jpg" class="img-fluid" alt="" />
        <img src="assets/img10.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        <img src="assets/img1.jpg" class="img-fluid" alt="" />
        <img src="assets/img2.jpg" class="img-fluid" alt="" />
        <img src="assets/img3.jpg" class="img-fluid" alt="" />
        <img src="assets/img4.jpg" class="img-fluid" alt="" />
        <img src="assets/img5.jpg" class="img-fluid" alt="" />
        <img src="assets/img6.jpg" class="img-fluid" alt="" />
        <img src="assets/img7.jpg" class="img-fluid" alt="" />
        <img src="assets/img8.jpg" class="img-fluid" alt="" />
        <img src="assets/img10.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        <img src="assets/img11.jpg" class="img-fluid" alt="" />
        <img src="assets/img12.jpg" class="img-fluid" alt="" />
        <img src="assets/img13.jpg" class="img-fluid" alt="" />
        <img src="assets/img14.jpg" class="img-fluid" alt="" />
        
      </div>
      <i class="fa-solid fa-arrow-right button" id="next"></i>
    </div>
  </section>

</div>
  

  


<div class="container-fluid px-4 py-2" style="border-radius: 13px; background-color:aliceblue;">
  <div class="row">

    <!-- Sidebar -->
  <div class="col-md-2 mx-3 d-none d-md-block" style="border-radius: 13px;  ">
  
  <a href="pages/gallerie.php" style="text-decoration: none; color: inherit;"><!-- Sidebar Content -->

<div class=" " >
  <div class="row text-center" style="background-color:white;border-radius: 5px;">
  <p style="text-decoration: none; color: inherit;margin-bottom:5px;">Galerie d'œuvres</p>
    <!-- Image 1 -->
    <div class="col-md-6 px-1 mb-1 "  >
      <img src="assets/img1.jpg" class="img-fluid " style="border-radius:7px;" alt="Image 1">
    </div>

    <!-- Image 2 -->
    <div class="col-md-6 px-1 mb-1">
      <img src="assets/img2.jpg" class="img-fluid" style="border-radius:7px;" alt="Image 2">
    </div>

    <div class="col-md-6 px-1 mb-1">
      <img src="assets/img3.jpg" class="img-fluid" style="border-radius:7px;" alt="Image 1">
    </div>

    <!-- Image 2 -->
    <div class="col-md-6 px-1 mb-1">
      <img src="assets/img4.jpg" class="img-fluid" style="border-radius:7px;" alt="Image 2">
    </div>
    
    <div id="carouselExampleInterval" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="100a000">
      <img src="assets/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="assets/img4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img9.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="assets/img10.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img12.jpg" class="d-block w-100" alt="...">
    </div>


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  </div>

  </a>
  <a href="pages/profil.php" style="text-decoration: none; color: inherit;"><!-- Sidebar Content -->
  <div class="row my-3 text-center " style="background-color:white;border-radius: 5px;">
  <p style="text-decoration: none; color: inherit;margin-bottom:5px;">Portfolio artistique</p>
    <!-- Image 1 -->
    <div class="col-md-12 px-1 mb-1" >
      <img src="assets/imgpa.png" class="img-fluid rounded" style="width:120px;" alt="Mon Profil">

<p class="text-center text-md-start text-muted">
Hassane Dialga est un artiste peintre basée à Ouagadougou, Burkina Faso...
</p>
          </a>
    </div>

    
  </div>
</div>
          
    </div>

    <!-- Main Content -->
    <div class="col-md-9 " style="border-radius: 10px; background-color: white;">
    <section id="intro">
    <div class="container-lg " >
      <div class="row justify-content-center align-items-center ">
        <div class="col-md-7 text-center text-md-start d-none d-md-block" >
          <h1>
            <div class="" style="margin-bottom: 20px;color: black ;" >Sport-Spirituel</div>
            
          </h1>
          <p class="lead my-7 text-muted">La tradition spirituelle a souvent séparé le corps et l’esprit, donnant à chacun son référentiel et sa logique propres. Pourtant le rôle primordial du corps était déjà une réalité spirituelle expérimentée et connue des Pères du désert puis des moines.</p>
          

          <!-- open sidebar / offcanvas -->
          
        </div>
        <div class="col-md-5 text-center  d-md-block " >
          <!-- tooltip -->
          <span class="tt" data-bs-placement="bottom" title="Sport spirtuel pour la purification de l'ame">
            <img src="assets/img14.jpg" class="img-fluid" alt="Sport spirtuel pour la purification de l'ame">
            <p>
            <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1200;
$nom_tableau='Sport spirtuel pour la purification de l\'âme.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));

// Construct the URL with encoded parameters
$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>


            <a style="margin-top:8px" href="<?php echo htmlspecialchars($redirect_url); ?>" class="btn" id="buttoncustomize">Commandez</a>
            <p class=" text-muted d-none d-md-block " id="prices"> 1200 €</p>
              <h5 class="text-muted"id="titleof">Sport spirtuel pour la purification de l'âme.</h5>
            </p>
          </span>
        </div>
      </div>
    </div>
  </section>

      <!-- Add your main content here -->
    </div>

    

  </div>
</div>

















  
  

  

  
  <section id="topics">
    <div class="container-md">
      <div class="text-center">
        <h2>Collection...</h2>
        <p class="lead text-muted">Tableaux de tous genres. </p>
      </div>

    </div>
  </section>

  
  <div class="container-fluid">
    <div class="row">
      <div class="card col-lg-3 col-md-4 col-sm-6 mb-4  ">
    <img class="card-img-top" src="assets/img8.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Résilience dans les vallées d'Autriches.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,3x0,7 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block " id="price"> 1200 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1200 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Janvier 2024</small></p>
      
      
      
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1200;
$nom_tableau='Résilience dans les vallées d\'Autriches.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img1.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Transhumance et crise identitaire</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand" ></i> 1,3/0,7 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block " id="price">1200 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1200 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Novembre 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1200;
$nom_tableau='Transhumance et crise identitaire.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img11.jpg" alt="Card image cap">
    <div class="card-body text-center" id="card">
      <h5 class="card-title" id="card-title">Nature et Identité culturelle (aux abois).</h5> 
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,1/0,63 m</p>
          
        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block " id="price">900 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 900 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Janvier 2024</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=900;
$nom_tableau='Nature et Identité culturelle (aux abois).';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img13.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Sur les pas des ancêtres.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1/0,65 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price"> 800 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 800 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
      
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Juillet 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=800;
$nom_tableau='Sur les pas des ancêtres.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img2.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Voyage solidaire au cœur de la vallée.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,1/0,65 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">800 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 800 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Juin 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=800;
$nom_tableau='VoyageVoyage solidaire au cœur de la vallée.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img9.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Détente au sommet désertique.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,3/0,7 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block " id="price">1000 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1000 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Novembre 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1000;
$nom_tableau='Détente au sommet désertique.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img19.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">L'évidence climatique et le mode de vie.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,3/0,7 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price"> 1100 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1100 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Aout 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1100;
$nom_tableau='L\'évidence climatique et le mode de vie.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img4.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Voyage aux confins du désert.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,3/0,7 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price"> 1100 €</p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1100 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text  d-none d-md-block"><small class="text-muted">Date de création: Janvier 2024</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1100;
$nom_tableau='Voyage aux confins du désert.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img14.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Sport spirituel pour la purification de l'âme.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,2/0,67 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block " id="price">900 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 900 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: November 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=900;
$nom_tableau='Sport spirituel pour la purification de l\'âme.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img18.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Une pensée montagnarde à la recherche de la voie de l'âme.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1/0,63 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">700 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 700 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Janvier 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=700;
$nom_tableau='Une pensée montagnarde à la recherche de la voie de l\'âme.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>

  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img17.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Campement nomade.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1/0,63 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">700 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 700 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Mars 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=700;
$nom_tableau='Campement nomade.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img3.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Voyage transsaharien.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1/0,6 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">600 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 600 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Octobre 2022</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=600;
$nom_tableau='Voyage transsaharien.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img10.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Migration pastorale dans le désert.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1/0,6 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">590 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 590 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Octobre 2021</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=590;
$nom_tableau='Migration pastorale dans le désert.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img12.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Les arpenteurs du désert.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,3/0,7m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block " id="price">1000 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1000 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Novembre 2022</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1000;
$nom_tableau='Les arpenteurs du désert.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img16.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Voyage mémorable au cœur des culminations.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,2/0,68 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">1000 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1000 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Octobre 2020</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1000;
$nom_tableau='Voyage mémorable au cœur des culminations.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img6.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Voyage dans la vallée des dunes. </h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,3/0,7 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">1100 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 1100 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Avril 2016</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=1100;
$nom_tableau='Voyage dans la vallée des dunes.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img7.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Berger montagnard et les passionnés du désert.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1,25/0,67 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">800 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 800 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block" ><small class="text-muted">Date de création: Juin 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=800;
$nom_tableau='Berger montagnard et les passionnés du désert.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>
    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-sm-6 mb-4 mb-3">
    <img class="card-img-top" src="assets/img5.jpg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title" id="card-title">Case nomade au pied de la montagne.</h5>
      <div class="row">
        <div class="col-md-6 border-right">
          <p class="text-muted d-none d-md-block" id="taille"><i class="fa-solid fa-expand"></i> 1/0,63 m</p>

        </div>
        <div class="col-md-6">
          <p class="text-muted d-none d-md-block" id="price">600 € </p>
        </div>
      </div>
      <p class="text-muted d-md-none d-block " id="prices"> 600 €</p>
      <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
      <p class="card-text d-none d-md-block"><small class="text-muted">Date de création: Octobre 2023</small></p>
      <?php

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$prix=600;
$nom_tableau='Case nomade au pied de la montagne.';
$encoded_prix = urlencode(base64_encode($prix));
$encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/commandes.php?p=$encoded_prix&t=$encoded_nom_tableau&e=$encoded_email";

      
?>
<button type="button" class="btn" id="buttoncustomize"><a href="<?php echo htmlspecialchars($redirect_url); ?>" style="text-decoration:none ;color: white  ;">Commandez</a></button>

    </div>
  </div>
      </div>
    </div>
  
    
    


  <section class="bg-light" id="beforefoot" >
    <div class="xcontainer">
      <div class="text-center">
        <h2>Restez Informez</h2>
        <p class="lead">Recevez les dernières mises à jour...</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-muted my-4">"Plongez dans l'univers captivant de l'art en vous inscrivant dès maintenant pour recevoir en avant-première les dernières créations artistiques. En devenant membre de notre communauté artistique, vous aurez un accès exclusif aux toutes dernières œuvres, des tableaux qui captivent l'âme et éveillent l'imagination. Ne manquez pas l'opportunité d'être parmi les premiers à découvrir les nouveautés artistiques, à suivre l'évolution de mon travail et à participer à des événements exclusifs réservés à notre communauté d'amoureux de l'art. Rejoignez-nous dès maintenant et laissez l'art vous inspirer chaque jour."</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
            Enregistrez vous!
          </button>
        </div>
      </div>
    </div>
  </section>

  
  
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
  
                <a href="javascript:void(0);" id="sendButton" class="btn btn-primary">Envoyer</a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  
    var emailInput = document.getElementById('modal-email');
    var sendButton = document.getElementById('sendButton');

  
    sendButton.addEventListener('click', function () {
  
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var isValidEmail = emailPattern.test(emailInput.value);

  
        if (isValidEmail) {
            

            document.getElementById('sendButton').addEventListener('click', function () {
  
        var emailValue = document.getElementById('modal-email').value;

  
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

  

  <?php
if (isset($_GET['mytoastVariable'])) {

  

echo'<div class="toast-container position-fixed bottom-0 end-0 p-1">';
  echo'<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">';
    echo'<div class="toast-header">';
      echo'<strong class="me-auto">ArtDialga </strong>';
      
      echo'<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>';
      echo' </div>';
      echo'<div class="toast-body bg-dark " style="color:white" >';
      echo' <p style="">' . $nom . ' Merci Pour votre Enregistrement. </p>';
      echo'</div>';
      echo'</div>';
      echo'</div>';
}     
 
if (isset($_GET['mytoastVariablenon'])) {

  

  echo'<div class="toast-container position-fixed bottom-0 end-0 p-1">';
    echo'<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">';
      echo'<div class="toast-header">';
        echo'<strong class="me-auto">ArtDialga </strong>';
        
        echo'<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>';
        echo' </div>';
        echo'<div class="toast-body bg-dark " style="color:white" >';
        echo' <p style="">' . $nom . ' cet e-mail est déjà abonné.. Merci! </p>';
        echo'</div>';
        echo'</div>';
        echo'</div>';
        
  }     
    
  if (isset($_GET['toastun'])) {

  

    echo'<div class="toast-container position-fixed bottom-0 end-0 p-1">';
      echo'<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">';
        echo'<div class="toast-header">';
          echo'<strong class="me-auto">ArtDialga </strong>';
          
          echo'<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>';
          echo' </div>';
          echo'<div class="toast-body bg-dark " style="color:white" >';
          echo' <p style=""> Désabonnement Réussi! Merci </p>';
          echo'</div>';
          echo'</div>';
          echo'</div>';
          
    }     
  
?>


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

$check_query = "SELECT * FROM commande WHERE email = '$emailuser'";
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
$total_prix = 0; 
$row_number = 0;
while($User = mysqli_fetch_assoc($check_result)) {
    $row_number++;
    $background_color = $row_number % 2 == 0 ? '#efc5c5' : '#FFFFFF'; 
    echo '<tr style="background-color: '.$background_color.';">';
    echo '<td><div style="padding-top: 10px; padding-bottom: 10px;">'.$User['nom_tableau'].'</div></td>';
    echo '<td><div style="padding-top: 10px; padding-bottom: 10px;">'.$User['prix'].'</div></td>';
    echo '</tr>';
    
    $total_prix += $User['prix'];
}
echo '<tr style="height: 7px;"></tr>';
echo '<tr>';
echo '<td style="font-weight:bold">Total</td>';
echo '<td style="font-weight:bold">'.$total_prix.' €</td>';
echo '</tr>';
echo '</table>';
echo '<div class="profile-action">';

$emailuser = filter_var($emailuser, FILTER_VALIDATE_EMAIL);
$encoded_email = urlencode(base64_encode($emailuser));


$redirect_url = "pages/liste_commande.php";



echo '<a href="' . htmlspecialchars($redirect_url) . '"><button class="btn-edit-profile">Modifier</button></a>';


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
	
  


    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarprofile" aria-labelledby="sidebar-label">
    <div class="offcanvas-header text-center">
    <h5 class="offcanvas-title " ></h5>

      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>



<div class="">
    <div class="profile-header">
        <img src="assets/imgp.png" alt="Profile Picture" class="profile-picture">
        <h2 class="profile-name"><?php echo $nom?></h2>
    </div>
    <div class="profile-info">
        <p><i class="fas fa-envelope"></i><?php echo $emailuser?></p>
        <p><i class="fa-solid fa-id-card"></i><?php echo $nom?></p>
        <p><i class="fa-solid fa-basket-shopping"></i> <?php echo $num_rows?> Commande(s)</p>
    </div>
    <div class="profile-action">
    
    <a href="pages/inscriptionreset.php"><button class="btn-edit-profile">Editer</button></a>

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
                <span class="link">Portfolio</span>
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
    
    <?php include 'pages/footer.php'; ?>





  
  


    


            
       
            


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


     <!-- Malick Signature -->