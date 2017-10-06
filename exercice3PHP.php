<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><a href="exercice2PHP.php" class="left">&lt;</a> PHP - Exercice 3  <a href="exercice4PHP.php">&gt;</a></h1>
  </div>
  <div id="Instruction">
    <h2>Afficher tous les nombres impairs entre 0 et 300, par ordre croissant.</h2>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
        <code class="language-php">
          &lt;?php
          for ($number = 0; $number &lt; 300; $number++) {
            if ($number % 2 == 1) {
              echo $number . ' ';
            }
          }
          ?&gt;
          </code>
          </pre>
        </div>
    <script type="text/javascript">
        showHidden('text');
    </script>
  </div>
</div>
<?php
include('footer.php');
 ?>
