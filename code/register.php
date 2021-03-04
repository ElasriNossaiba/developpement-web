<!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <?php
    require('config.php');
    if (isset($_REQUEST['nom_utilisateur'], $_REQUEST['email'], $_REQUEST['mot_de_passe'])){
      // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
      $nom_utilisateur = stripslashes($_REQUEST['nom_utilisateur']);
      $nom_utilisateur = mysqli_real_escape_string($conn, $nom_utilisateur); 
      // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
      $email = stripslashes($_REQUEST['email']);
      $email = mysqli_real_escape_string($conn, $email);
      // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
      $mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
      $mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);
      //requéte SQL + mot de passe crypté
        $query = "INSERT into `utilisateur` (nom_utilisateur, email, mot_de_passe)
                  VALUES ('$nom_utilisateur', '$email', ' $mot_de_passe')";
      // Exécuter la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if($res){
           echo "<div class='sucess'>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                 <h1>Vous êtes inscrit avec succès.</h1>
                 <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
           </div>";
        }
    }else{
    ?>
    <br><br><br><br>
    <form class="box" action="" method="post">
     
        <h1 class="box-title">S'inscrire</h1>
      <input type="text" class="box-input" name="nom_utilisateur" placeholder="Nom d'utilisateur" required />
        <input type="text" class="box-input" name="email" placeholder="Email" required />
        <input type="password" class="box-input" name="mot_de_passe" placeholder="Mot de passe" required />
        <input type="submit" name="submit" value="S'inscrire" class="box-button" />
        <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    </form>
    <?php } ?>
    </body>
    </html>