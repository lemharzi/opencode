<?php
session_start();
if (isset($_POST['deconnect'])) {
session_destroy();
header("Refresh:0");
} elseif (isset($_POST['login'])) {
  $_SESSION['login'] = $_POST['login'];
}
//$_SESSION['login'] = 'promo3';
//$_SESSION['login'] = isset($_POST['login']) ? $_POST['login'] : null;
//if (isset($_SESSION['login'])) {
//  setcookie('login', $_SESSION['login'], time() + 365*24*3600, null, null, false, true);
//}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:900|Source+Code+Pro|Sarpanch" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="assets/css/prism.css" rel="stylesheet" />
  <script type="text/javascript" src="assets/js/buttonHide.js"></script>
  <title>openCode</title>
</head>
<body>
  <script src="assets/js/prism.js"></script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <header>
    <div id="logo">
      <a href="index.php"><img src="assets/img/opencode.svg" alt="LogoOpenCode" title="Home"/><span>openCode</span></a>
    </div>
    <!-- formulaire  de login -->
    <div id="signin">
      <?php
      if (isset($_SESSION['login'])) {
      echo '<p>Bonjour ' . $_SESSION['login'] . '</a>, content de vous revoir!</p><p><a href="profile.php">Modifier votre profil.</a></p>';
      ?>
      <form method="post">
      <input type="hidden" name="deconnect" value="true" />
      <p><input  type="submit" value="Déconnexion" /></p>
      </form>
      <?php } else{ ?>
        <form method="post">
          <p>
            <label for="pseudo">Se connecter :</label><br />
            <input type="text" name="login" id="login" placeholder="Login"/>
            <input type="password" name="password" id="password" placeholder="Password"/><br />
            <input  type="submit" value="Connexion" /><br />
            <a href="#">J'ai oublié mon mot de passe.</a>
          </p>
          <p><a href="#signup" class="signup">Pas encore inscrit sur openCode ?</a></p>
        </form>
      <?php } ?>
    </div>
    <!-- barre de navigation -->
    <nav>
        <h1 id="nav-catalog"><a href="catalog.php">Nos exercices</a></h1>
        <h1 id="nav-home"><a href="index.php">Accueil</a></h1>
          <!--<span id="nav-exercice"><a href="exercice.php">Exercices</a></span>
          <span id="nav-contact"><a href="contact.php">Nous contacter</a></span>
           <span id="nav-profile"><a href="profile.php">Profil</a></span>         -->
    </nav>
  </header>
