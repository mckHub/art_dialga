<?php
$db_host = 'localhost';
$db_username = 'ytdcfvmy_malick';
$db_password = 'iRG4!-QnM_qA';
$db_name = 'ytdcfvmy_artdialga_db';

// Create a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Insert data into the database
    $insertQuery = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $insertQuery->bind_param("sss", $name, $email, $message);
    
    if ($insertQuery->execute()) {
        header('Location: merci_message.php');
    } else {
        echo "Error: " . $insertQuery->error;
    }
    
}

// Close the database connection
$conn->close();
?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Contactez nous</title>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />  
  <link rel="icon" href="assets/titleiconl.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/stylecontact.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
</head>
<body>
  


  
  
  <nav class="navbar navbar-expand-md navbar-light pt-1 pb-1 fixed-top  ">
    <div class="container-xxl " style="padding:0;">
  
      <a class="navbar-brand" href="#intro">
        <span class="" id="intro">
          <img src="../assets/art1.png" width="40 px" alt="Mon art" style="margin-right: 10px; border-radius: 60%;">
          ArtDialga
        </span>
      </a>

      <a href="#sidebarcommandesde" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
<button type="button" class="btn btn-secondary   d-md-none d-block" style=" background-color:#232f3e;border:none;">
<span class="navbar-toggler-icon " style="background-color:white;font-size:16px;"></span>


</span>
</button>
</a>
      <style>
  .flex-container {
  display: flex;
  justify-content: space-between;
}

.no-space {
  margin-left: auto; 
}

.column {
  flex: 1; 
  border: 1px solid black;
  padding: 10px;
}
  </style>

      
 

      
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav" id="ul">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/gallerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/profil.php">
Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:#0DCAF0;">Contacts</a>
            
          </li>
        </ul>
        
        
        
      </div>
    </div>
  </nav>


 




<div class="container-fluid custom-container ">
  <div class="row">

    <div class="col-md"> 
      <form id="formm" method="POST" action="">
        <label for="name">Votre Nom:</label>
        <input type="text" id="name" name="name" required>
  
        <label for="email">Votre Email:</label>
        <input type="email" id="email" name="email" required>
  
        <label for="message">Votre Message:</label>
        <textarea class="custom-scrollbar" id="message" name="message" rows="4" maxlength="300" required></textarea>

  
        <button type="submit">Envoyer</button>
      </form>
    </div>
  
        <div class="col-md  customnumber text-center">
          <h5 class="text-muted">Nous contacter par téléphone</h5>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
            Voir mes numéros
          </button>
         <p class="text-muted" style="margin-top: 30px;">Contactez-nous sur l'un de ces numéros. </p>
            <p style="margin-top: 30px;font-weight: bold;" class="text-muted" >Lundi - Vendredi : 8H-22H (GMT)   </p>
             <p class="text-muted" style="margin-top: 10px;font-weight: bold;" >Samedi - Dimache : 8H-12H (GMT)  </p>
        </div>
      </div>
    </div>
    
  
    
  
  </div>
</div>
  
    

  <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog " id="modali">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title" id="modal-title">
          <ul>
            <li>+227 89 96 13 72 ( WhatsApp)</li>
            <li>+226 ... ( Telmob)</li>
            <li>+226 ... ( Orange/ OrangeMoney)</li>
            
          </ul> 
          </div>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
          <ul class="lists">
            <li class="list">
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
            <li class="list" style="  background-color: #dfe3f1;margin-left:0px;">
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



    



  
  





    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var contactForm = document.getElementById('contactForm');

      contactForm.addEventListener('submit', function (event) {
        event.preventDefault();

        
        console.log('Form submitted:', {
          name: contactForm.elements.name.value,
          email: contactForm.elements.email.value,
          message: contactForm.elements.message.value,
        });

        
        contactForm.reset();
      });
    });
  </script>
  <script src="../script/script.js" defer></script>  

</body>
</html>


