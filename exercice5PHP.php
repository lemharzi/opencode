<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><a href="exercice4PHP.php" class="left">&lt;</a>  PHP - Exercice 5  <a href="exercice6PHP.php">&gt;</a></h1>
  </div>
  <div id="Instruction">
    <p>Faire une fonction qui prend en paramètre deux chaînes de caractère et qui retourne la fusion de ces deux chaînes.</p>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
        <code class="language-php">
          &lt;?php
          function mergeString($string1, $string2){
            $result = $string1 . $string2;
            return $result;
          }
          echo mergeString('Bonjour', ' tout le monde');
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
