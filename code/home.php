<?php
      // Initialiser la session
      session_start();
      // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
      if(!isset($_SESSION["nom_utilisateur"])){
        header("Location: login.php");
        exit(); 
      }
    ?>
   
    <!DOCTYPE html>
<html>
<title>Home</title>

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
 
       
         <div >
        <a href="logout.php">Déconnexion</a>
        </div>
    
   <br><br>
    
    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
      <div class="col-xl-6 col-lg-7">
        <img  class="rounded mx-auto d-block" height="500px" src="ecole.jpg" alt="">
      </div>
      <div class="col-xl-6 col-lg-5">
        <div class="featured-text text-center text-lg-left">
          <h1>Bienvenue <?php echo $_SESSION['nom_utilisateur']; ?> à notre école ! </h1>
          <br>
          <p class="text-black-50 mb-0">Nous sommes une école citoyenne attachée à son identité nationale et ouverte sur le monde. Notre institution acceuille les enfants à partir de l'âge de deux ans en maternelle et assure leur évolution tout au long de l'enseignement du primaire et du collège.
              <br><br>
              Notre équipe administrative travaille en coordination avec les professeurs et veille au bon déroulement des cours et à faire régner une bonne moralité et une bonne discipline. Tous nos enseignants sont recrutés selon des normes à même d'assurer la réalisation de notre mission et de nos objectifs pédagogiques.
              <br><br>
              Notre équipe qualifiée et engagée, s'inscrit dans un processus de développement continu dans le but de former des apprenants équilibrés, épanouis et ouverts d'esprit.</p>
             
            </div>
         
         
         </div>
      </div>
    </div>

  
    

  <br><br><br>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="mater.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h1 class="display-4">Pre-scolaire</h1>
            <p style="text-align: justify">A la maternelle AL AALAM, notre ambition première est de permettre à chaque enfant, selon des démarches pédagogiques adaptées, de devenir autonome, sociable et de s'approprier des connaissances pour qu'il puisse aborder aisément les apprentissages fondamentaux de l'école primaire.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="primaire.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Primaire</h2>
            <p style="text-align: justify" >Au primaire AL AALAM, l'enfant est considéré comme un ensemble de talents à mettre en valeur. Un processus éducatif visant l'excellence et conçu pour accompagner chaque élève selon son propre rythme dans son développement et dans la recherche de son potentiel

              L'école AL AALAM est un ensemble d'atout qui se conjugue pour permettre aux enfants de s'instruire et de s'épanouir.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="college.JPG" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">College</h2>
            <p style="text-align: justify" >Au collège AL AALAM nous offrons le programme national et préparons nos élèves aux diplômes nationaux.

              De surcroit nous avons adopté un programme international délivré par le baccalauréat internationnal.
              
              Nous dispensons un programme cadre riche de défis pédagogiques et qui permet d'équilibrer l'apprentissage disciplinaire et interdisciplinaire.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br> <br> <br> 
  <br> <br> <br> 
  <br> <br> <br> 
  <br> <br> <br> 
  
   <p style="font-size:70px;text-align:center; color: brown; ">Pourquoi nous choisir ?</p>
   
<div class="mx-auto" style="width: 400px;">
  <div class="mx-auto" style="width: 200px;"> 
  <br><br>
      <h2>Compétences:</h2><br>
  </div>
  <p>Cadres compétents et soigneusement sélectionnés assurant un sens de responsabilité pour l'éducation et le bien-être des apprenants.</p>
      <br><br><hr class="my-4"><br><br>
</div>


<div class="mx-auto" style="width: 400px;">
  <div class="mx-auto" style="width: 200px;">
  <h2>Matériel :</h2><br>
  </div>
  <li>
      Informatique, internet et salle multimédias. </li> 
  <li> Laboratoire scientifique bien équipé pour l'initiation à la méthodologie expérimentale.</p>
   </li>
   <br><br><hr class="my-4"><br><br>
</div>

<div class="mx-auto" style="width: 400px;">
  <div class="mx-auto" style="width: 200px;">
  <h2>Activités :</h2><br>
  </div>
  <li>Ateliers, clubs et projets pédagogiques.</li>
  <li>Journées pédagogiques et formatives constantes</li>
  <br><br>
</div>
  <br> <br> <br> 
  <br><br><br>

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