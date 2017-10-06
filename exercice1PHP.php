<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><span class="left">&lt;</span>  PHP - Exercice 1 <a href="exercice2PHP.php">&gt;</a></h1>
  </div>
  <div id="Instruction">
    <p>Faire deux variables avec des chiffres, afficher
      l'addition de ces deux chiffres, puis la multiplication.</p>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
        <code class="language-php">
          &lt;?php
           $chiffre1 = 17;
           $chiffre2 = 13;
           $add = $chiffre1+$chiffre2;
           $multi = $chiffre1*$chiffre2;
           echo "$chiffre1 + $chiffre2 = $add &lt;/br&gt;";
           echo "$chiffre1 * $chiffre2 = $multi";
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
