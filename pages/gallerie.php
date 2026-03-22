
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Galerie</title>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
  <script src="script.js" defer></script>
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    
  <link rel="icon" href="assets/titleiconl.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/stylegalerie.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
</head>
<body>
  

  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light pt-1 pb-1 ">
    <div class="container-xxl" style="padding:0;">
      <!-- navbar brand / title -->
      <a class="navbar-brand" href="#intro">
        <span class="" id="intro">
          <img src="../assets/art1.png" width="40 px" alt="Mon art" style="margin-right: 10px; border-radius: 60%;">
          ArtDialga
        </span>
      </a>
      <!-- toggle button for mobile nav -->
      <a href="#sidebarcommandesde" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
<button type="button" class="btn btn-secondary   d-md-none d-block" style=" background-color:#232f3e;border:none;">
<span class="navbar-toggler-icon " style="background-color:white;font-size:16px;"></span>


</span>
</button>
</a>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav" id="ul">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" style="color:#0DCAF0;">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contacts</a>
            
          </li>
        </ul>
        
       
        
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <!-- Images Filter Buttons Section -->
    <div class="row mt-5" id="filter-buttons">
      <div class="col-12">
        <button class="btn mb-2 me-1 active" data-filter="tous">Tous</button>
        <button class="btn mb-2 mx-1" data-filter="nature">Nature</button>
        <button class="btn mb-2 mx-1" data-filter="spirituel">Spirituel</button>
        <button class="btn mb-2 mx-1" data-filter="voyage">Voyage</button>
        <button class="btn mb-2 mx-1" data-filter="Autres">Autres</button>
      </div>
    </div>

    <!-- Filterable Images / Cards Section -->
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
      <div class="card p-0 " data-name="nature" onclick="enlargeImage('../assets/img8.jpg')">
        <img class="card-img-top" src="../assets/img8.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Résilience dans les vallées d'Autriches.</h6>
        </div>
      </div>
      <div class="card p-0" data-name="Autres" onclick="enlargeImage('../assets/img1.jpg')">
        <img class="card-img-top" src="../assets/img1.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Transhumance et crise identitaire.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="nature" onclick="enlargeImage('../assets/img11.jpg')">
        <img class="card-img-top" src="../assets/img11.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Nature et Identité culturelle (aux abois).</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="Autres" onclick="enlargeImage('../assets/img13.jpg')">
        <img class="card-img-top" src="..//assets/img13.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Sur les pas des ancêtres.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="voyage" onclick="enlargeImage('..assets/img2.jpg')">
        <img class="card-img-top" src="../assets/img2.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Voyage solidaire au cœur de la vallée.</h6>
          
        </div>
      </div>
      
      <div class="card p-0" data-name="nature" onclick="enlargeImage('../assets/img9.jpg')">
        <img class="card-img-top" src="../assets/img9.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Détente au sommet désertique.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="nature" onclick="enlargeImage('../assets/img19.jpg')">
        <img class="card-img-top" src="../assets/img19.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">L'évidence climatique et le mode de vie.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="voyage" onclick="enlargeImage('../assets/img4.jpg')">
        <img class="card-img-top" src="../assets/img4.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Voyage aux confins du désert.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="spirituel" onclick="enlargeImage('../assets/img14.jpg')">
        <img class="card-img-top" src="../assets/img14.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Sport spirituel pour la purification de l'âme.</h6>
          
        </div>
      </div>
      
      <div class="card p-0" data-name="spirituel" onclick="enlargeImage('../assets/img18.jpg')">
        <img class="card-img-top" src="../assets/img18.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Une pensée montagnarde à la recherche de la voie de l'âme.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="nature" onclick="enlargeImage('../assets/img17.jpg')">
        <img class="card-img-top" src="../assets/img17.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Campement nomade.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="voyage" onclick="enlargeImage('../assets/img3.jpg')">
        <img class="card-img-top" src="../assets/img3.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Voyage transsaharien.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="voyage" onclick="enlargeImage('../assets/img10.jpg')">
        <img class="card-img-top" src="../assets/img10.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Migration pastorale dans le désert.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="nature" onclick="enlargeImage('../assets/img12.jpg')">
        <img class="card-img-top" src="../assets/img12.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Les arpenteurs du désert.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="voyage" onclick="enlargeImage('../assets/img16.jpg')">
        <img class="card-img-top" src="../assets/img16.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Voyage mémorable au cœur des culminations.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="voyage" onclick="enlargeImage('../assets/img6.jpg')">
        <img class="card-img-top" src="../assets/img6.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Voyage dans la vallée des dunes.</h6>
          
        </div>
      </div>
      <div class="card p-0" data-name="nature" onclick="enlargeImage('../assets/img7.jpg')">
        <img class="card-img-top" src="../assets/img7.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Berger montagnard et les passionnés du désert.</h6>  
        </div>
      </div>

    
      
      <div class="card p-0" data-name="Autres" onclick="enlargeImage('../assets/img5.jpg')">
        <img class="card-img-top" src="../assets/img5.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Case nomade au pied de la montagne.</h6>          
        </div>

      </div>
      
      <div class="enlarged-image" id="enlargedContainer">
        <span class="close-icon" onclick="closeImage()">&#10006;</span>
        <img id="enlargedImage" src="" alt="Enlarged Image">
      </div>



    </div>
  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebar-label" style="text-align: center;">Connectez Vous</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="containero flex">
      <form action="#">
        <input type="email" placeholder="Votre Email" required>
        <input type="password" placeholder="Mot de passe" required>
        <div class="link">
          <button type="submit" class="login">Connexion</button>
          <a href="#" class="forgot">Mot de passe Oublie?</a>
        </div>
        <hr>
        <div class="button">
          <a href="#">Creez un nouveau compte</a>
        </div>
      </form>
      
    </div>
    </div>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarcommandesde" aria-labelledby="sidebar-label" style="width: 350px;background-color:white;color:black;">
    
    <div class="sidebar">
        <div class="logo">
          
          <span class="logo-name" style="margin-left:100px;">         </span>
          <button style="margin-left:220px" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="sidebar-content" >
          <ul class="lists">
            <li class="list">
              <a href="../index.php" class="nav-link">
                <i class="bx bx-home-alt icon" style="color:black;"></i>
                <span class="link">Accueil</span>
              </a>
            </li>
            <li class="list" style="  background-color: #dfe3f1;margin-left:0px;">
              <a href="gallerie.php" class="nav-link">
              <i class="fa-solid fa-photo-film" style="color:black; margin-right:12px;" ></i>
                <span class="link">Galerie</span>
                
              </a>
            </li>
            <li class="list">
              <a href="profil.php" class="nav-link">
              <i class="fa-solid fa-user" style="color:black; margin-right:17px;"></i>
                <span class="link">Portfolio</span>
              </a>
            </li>
            <li class="list">
              <a href="contact.php" class="nav-link">
              <i class="fa-solid fa-phone-flip" style="color:black; margin-right:16px;"></i>
                <span class="link">Contacts</span>
              </a>
            </li>

            
          </ul>

          
          </div>   
    </div>
    </div>  



    <?php include 'footer.php'; ?>


  
  




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="../script/script.js" defer></script>
  <script src="../script/scriptgallerie.js" defer></script>

  
  


</body>
</html>

