<?php
if(isset($_GET['p']) && isset($_GET['t']) && isset($_GET['e'])){
  $prix = isset($_GET['p']) ? base64_decode(urldecode($_GET['p'])) : '';
  $produit = isset($_GET['t']) ? base64_decode(urldecode($_GET['t'])) : '';
  $email = isset($_GET['e']) ? base64_decode(urldecode($_GET['e'])) : '';

  if ($email == null ) {
    $errv = 4;

                  
    // Product details are set, you can continue with your logic here
    header('Location: connexion.php?m=' . $errv); // Mot de passe incorrect
    exit(); // Important to terminate the script after redirection
  } 
  
  else{

if(isset($_POST['envoyer']))
{
    // Assuming you have established a MySQL connection
    $db_host = 'localhost';
$db_username = 'ytdcfvmy_malick';
$db_password = 'iRG4!-QnM_qA';
$db_name = 'ytdcfvmy_artdialga_db';
    // Create connection
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO commande (nom, prenom, telephone, email, adresse_livraison, nom_tableau, date_livraison, prix) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssd", $nom, $prenom, $telephone, $email, $adresse_livraison, $nom_tableau, $date_livraison, $prix);

    // Set parameters
    $nom = $conn->real_escape_string($_POST['txtnom']);
    $prenom = $conn->real_escape_string($_POST['txtprenom']);
    $telephone = $conn->real_escape_string($_POST['txtphone']);
    $email = $conn->real_escape_string($_POST['txtmail']);
    $adresse_livraison = $conn->real_escape_string($_POST['txtalivraison']);
    $nom_tableau = $conn->real_escape_string($_POST['titre']);
    $date_livraison = $conn->real_escape_string($_POST['txtdate']);
    $prix = $conn->real_escape_string($_POST['prix']);
    
        // Execute the statement
        if ($stmt->execute()) {
          // Base64 encode and URL encode each parameter individually
          $encoded_prix = urlencode(base64_encode($prix));
          $encoded_nom_tableau = urlencode(base64_encode($nom_tableau));
          $encoded_adresse_livraison = urlencode(base64_encode($adresse_livraison));
          $encoded_nom = urlencode(base64_encode($nom));
          $encoded_email = urlencode(base64_encode($email));
      
          // Construct the URL with encoded parameters
          $redirect_url = "merci.php?m=$encoded_prix&p=$encoded_nom_tableau&z=$encoded_adresse_livraison&n=$encoded_nom&e=$encoded_email";
      
          // Perform the redirection
          header("Location: $redirect_url");
          exit; // Ensure script stops executing after redirect
      }
      else {
        echo "Error: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}      
  }
  
}?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Commandes</title>
		<link href="../css/indexcomande.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../css/ncomande.css"/>
	</head>
	
	<body>
		
		

  
       
 

  <title>Commande de Livres</title>
<div>
<center><p class="affich11">Les champs marqués avec Astérix (*) sont exigés</p> </center></br>
			
</div>

<center><div class="tabb990">
<FORM Method="POST" Action="">                   
<table class="tabb900">
<tr>
<td>                                  
<div id="container">
  <b> * Nom</b> 
      <p>
        <input type="text" name="txtnom" placeholder="Entrez votre nom comme indiqué dans votre pièce d'identé." required/> 
      </p> 
      
      <b>* Prenom</b> 
      <p>
        <input type="text" name="txtprenom" placeholder="Votre prenom comme indiqué dans votre pièce d'identé." required /> 
      </p>  
                                                                   
  <b> * Numero telephone</b>         
      <p>
        <input type="tel" name="txtphone" pattern="/^(?:(?:(?:\+|00)33\s?[\(]0[\)])|0)(?:(?:(?:(?:[1-9]\d)|(?:[0-9]{2})))\s?(?:(?:(?:\d{2})|(?:\d{3})))\s?(?:(?:\d{2})\s?(?:(?:\d{2})|(?:\d{3}))))|(?:(?:6|7)[\-\.\s]?\d{2}[\-\.\s]?\d{2}[\-\.\s]?\d{2}[\-\.\s]?\d{2}))$/"  required/> 
   </p>
                                                              
   <b>  Adresse E-mail</b> 
      <p>
        <input type="email" name="txtmail"  value="<?php echo $email?>" id="readOnlyInput" readonly /> 
      </p>

</div>
</td>
<td id="tddiveac90">
</td>
<td>                                  
<div id="container">                   
   
      <b>* Adresse de livraison</b> 
      <p>
        <input type="text" name="txtalivraison" required /> 
      </p> 
      <b>Nom du Tableau</b> 
      <p>
        <input type="text" name="titre" value="<?php echo $produit?>" id="readOnlyInput" readonly /> 
        
      </p>  
                                                                   
  <b>Livré avant le </b> 
      <p>
        <input type="date" name="txtdate" /> 
      </p>                                                                          
        
        
  <b>Prix</b>         
      <p>
        <input type="text" name="prix" id="readOnlyInput" value="<?php echo $prix?> €" readonly/> 
   </p>
</div>
</td>


</tr>
</table>
<table class="tabb90" >
<tr>
<td><p>
        <input type="submit"  name="envoyer" value="Envoyer" />
      </p></td>
		<td><p>
        <input type="reset"  name="suppr" value="Effacer" />
      </p></td>
</tr>
</table>
</FORM>







</div><br/><br/>


  </body>
</html>



			
