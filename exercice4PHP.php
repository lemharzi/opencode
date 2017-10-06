<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><a href="exercice3PHP.php" class="left">&lt;</a>  PHP - Exercice 4  <a href="exercice5PHP.php">&gt;</a></h1>
  </div>
  <div id="Instruction">
    <p>Afficher les nombres de 1 à 100. En remplaçant le nombre par un mot selon certaines conditions :</p>
      <ul>
        <li>Le mot Fizz s'il est multiple de 3</li>
        <li>Le mot Buzz s'il est multiple de 5</li>
        <li>Le mot FizzBuzz s'il est multiple de 3 et de 5</li>
      </ul>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
        <code class="language-php">
          &lt;?php
          for($i = 1; $i &lt;= 100; $i++) {
            if ($i%3==0 && $i%5==0) {
             echo 'fizzbuzz ';
            } elseif($i%3==0) {
             echo 'Fizz ';
            } elseif ($i%5==0) {
             echo 'buzz ';
            } else {
             echo $i . ' ' ;
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
