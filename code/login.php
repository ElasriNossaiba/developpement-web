<!DOCTYPE html>
    <html>
    <head>
      <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <?php
    require('config.php');
    session_start();
    if (isset($_POST['nom_utilisateur'])){
      $nom_utilisateur = stripslashes($_REQUEST['nom_utilisateur']);
      $nom_utilisateur = mysqli_real_escape_string($conn, $nom_utilisateur);
      $mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
      $mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);
        $query = "SELECT * FROM `utilisateur` WHERE nom_utilisateur='$nom_utilisateur' and mot_de_passe=' $mot_de_passe'";
      $result = mysqli_query($conn,$query) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      if($rows==1){
          $_SESSION['nom_utilisateur'] = $nom_utilisateur;
          header("Location: home.php");
      }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
      }
    }
    ?>
    <br><br><br><br><br>
    <form class="box" action="" method="post" name="login">
    
    <h1 class="box-title">Connexion</h1>
    <input type="text" class="box-input" name="nom_utilisateur" placeholder="Nom d'utilisateur">
    <input type="password" class="box-input" name="mot_de_passe" placeholder="Mot de passe">
    <input type="submit" value="Connexion " name="submit" class="box-button">
    <p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
    </form>
    </body>
    </html>