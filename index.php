<?php include('header.php'); ?>
<div id = "content">
  <?php
  if (isset($_SESSION['login'])) {
    ?>
    <!-- Connecté sur opencode -->
    <div id="signup">
      <h1>Votre activité sur openCode</h1>
      <p>Félicitations <strong><?php echo '<a href="profile.php">' . $_SESSION['login'] . '</a>'; ?></strong>  vous avez terminé tous les exercices HTML.</p>
      <p>Ne vous arrêtez pas en si bon chemin, notre <a href="catalog.php">catalogue d'exercices</a> vous attends!</p>
      <h2>Dernière activité</h2>
      <p><a href="exercicePHP6.php"> PHP - Exercice 6</a></p>
    </div>
  <?php } ?>
  <!-- présentation du projet opencode -->
  <div id="presentation">
    <div id="opencode">
      <h2>openCode qu'est-ce que c'est ?</h2>
      <p>OpenCode est un site pour apprendre à coder rapidement et efficacement.</p>
      <p>Une méthode idéale pour s'initier à des langages tels que le HTML, le CSS, le PHP ou même encore le Javascript.</p>
    </div>
    <div id="explaination">
      <h2>Génial! Mais combien ça coûte ?</h2>
      <p>OpenCode est un site entierement gratuit, tous nos exercices sont libre d'accès.</p>
      <p>Pour y accèder, une inscription gratuite, et c'est tout!</p>
    </div>
    <div id="freeExercices">
      <h2>Des exercices de qualité !</h2>
      <p>Les exercices sur openCode ont été réalisés bénévolement -et avec brio- par des professionnels de l'informatique.</p>
      <p>Si vous êtes developpeur n'hésitez pas à partager vos idées avec nous.</p>
    </div>
  </div>
  <!-- s'inscrire sur opencode -->
  <?php
  if (!isset($_SESSION['login'])) {
    ?>
  <div id="signup">
    <h1>S'inscrire sur openCode</h1>
    <form method="post" action="#">
      <p><label for="username">Choisissez un pseudo :</label>
      <input type="text" name="username" id="username" placeholder="Pseudo" size="30" maxlength="10" /></p>
      <p><label for="password">Choisissez un mot de passe :</label>
      <input type="password" name="password" id="password" /></p>
      <p><label for="mail">Votre adresse email :</label>
      <input type="email" /></p>
      <p><input type="submit" value="Inscription" /></p>
    </form>
  </div>
<?php } ?>
</div>
<?php include('footer.php'); ?>
