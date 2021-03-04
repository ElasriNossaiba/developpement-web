<!DOCTYPE html>
<html>
<title>rendez</title>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
			
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    
    <style>
      body, html {
        height: 100%;
        margin: 2px;
        font-family: Arial, Helvetica, sans-serif;
        background-color:beige;
        text-align: justify;
      }
      
      * {
        box-sizing: border-box;
      }
      .fotter{
        background:rgb(224, 224, 178);
      }
      
      .bg-image {
        /* The image used */
        background-image: url("aalame.jpeg");
        
 
        /* Full height */
        height: 250px; 
        width: 100%;
        
        /* Center and scale the image nicely */
       
        background-repeat: no-repeat;
        background-size: cover;
      }
      

     

  </style>      
    
    
</head>


<body>
  <div class="bg-image"></div>


  

  <!-- Navbar -->
      
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark" >
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav mr-auto">
       
      <a href="home.php" class=" p-6 btn btn-warning active" role="button" aria-pressed="true">Home</a>
        
        <li class="nav-item dropdown">
          <div class="col px-md-3"> <button type="button"  class=" p-6 btn btn-warning dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Primaire </button> 
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="p1.php">1ere annee</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="p2.php">2eme annee</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="p3.php">3eme annee</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="p4.php">4eme annee</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="p5.php">5eme annee</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="p6.php">6eme annee</a>
              </div></div>
      
        </li>

        <li class="nav-item dropdown">
          <button type="button" class="p-6 btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> College </button> 
            <div class="dropdown-menu">
              <a class="dropdown-item" href="c1.php">1ere annee</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="c2.php">2eme annee</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="c3.php">3eme annee</a>
              <div class="dropdown-divider"></div>
              </div>
          </li>
          <li class="nav-item dropdown">
            <div class="col px-md-3"> <button type="button" class=" p-6 btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Photos  </button> 
            <div class="dropdown-menu">
                <a class="dropdown-item" href="img_peda.php">Sorties pédagogiques</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="img_act.php">Activités parascolaires</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="img_mat.php">Materiel</a>
              </div></div>
          </li>
          <a href="contact.php" class=" p-6 btn btn-warning active" role="button" aria-pressed="true">Contact</a>
          
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

  </nav>

      <div align="left" >
        <a href="logout.php">Déconnexion</a>
        </div>
        
<br><br>
<br><br>
<br><br>



<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"alaalme.com"<alaalame.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
          <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
          <u>Sujet :</u>'.$_POST['sujet'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					
				</div>
			</body>
		</html>
		';

		mail("nossaibaas11@gmail.com", "CONTACT ", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body class="text-center">
		<h3>Envoyer un message</h3>
		<form method="POST" action="">
    <br><br>
			<input size="40" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<input size="40" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
      <input size="40" type="text" name="sujet" placeholder="Votre sujet" value="<?php if(isset($_POST['mail'])) { echo $_POST['sujet']; } ?>" /><br /><br />
      <textarea rows="7" cols="42" name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>






<br><br>
<br><br>
<br><br>
<br><br>



<!-- Contact Section -->
<div class="fotter">
    <br><br><br>
    <img src="logo.png" class="rounded mx-auto d-block" width="200px" >
    <br><br>
<section class="contact-section ">
 <div class="container">

   <div class="row">

     <div class="col-md-4 mb-3 mb-md-0">
       <div class="card py-4 h-100">
         <div class="card-body text-center">
           <i class="fas fa-map-marked-alt text-primary mb-2"></i>
           <h4 class="text-uppercase m-0">Address</h4>
           <hr class="my-4">
           <a href="https://goo.gl/maps/ime5UD6Tbo5MqSUQ7"><span class="fa fa-map-marker"></span> Lot Assalam N°120 Route de Sefrou en face de l'arrondissement Sais-Fès</a></li>
               
         </div>
       </div>
     </div>

     <div class="col-md-4 mb-3 mb-md-0">
       <div class="card py-4 h-100">
         <div class="card-body text-center">
           <i class="fas fa-envelope text-primary mb-2"></i>
           <h4 class="text-uppercase m-0">Email</h4>
           <hr class="my-4">
           <div class="small text-black-50">
             <a href="#">alaalam2013@live.fr</a>
           </div>
         </div>
       </div>
     </div>

     <div class="col-md-4 mb-3 mb-md-0">
       <div class="card py-4 h-100">
         <div class="card-body text-center">
           <i class="fas fa-mobile-alt text-primary mb-2"></i>
           <h4 class="text-uppercase m-0">Phone</h4>
           <hr class="my-4">
           <div class="small text-black-50">05 35 61 58 84</div>
         </div>
       </div>
     </div>
   </div>
   
   <br>
 <div class="social d-flex justify-content-center">
 <a href="https://www.instagram.com/" class="mx-2">
   <i class="fab fa-instagram"></i>
 </a>
 <a href="https://www.facebook.com/Alaalame2013/?_rdc=1&_rdr" class="mx-2">
   <i class="fab fa-facebook-f"></i>
 </a>
 <a href="https://www.youtube.com/" class="mx-2">
   <i class="fab fa-youtube"></i>
 </a>
</div>

<hr>
            
     <div class="copyright">
       <p>Made with <i class="fa fa-heart"></i> by Nossaiba</p>
     </div>
  

</section>
<br>
 </div>


</body>
</html>