<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><a href="exercice1PHP.php" class="left">&lt;</a> PHP - Exercice 2  <a href="exercice3PHP.php">&gt;</a></h1>
  </div>
  <div id="Instruction">
    <p>Soit une variable contenant la chaîne :</p>

    <p>"La Vie aquatique (The Life Aquatic with Steve Zissou), film américain sorti en 2004,
    est le quatrième long-métrage réalisé par Wes Anderson. Il est dédié à l'océanographe
    français Jacques-Yves Cousteau et s'inspire librement de sa vie sur un ton parodique.
    Le film est une comédie dramatique qui, sous un aspect fantaisiste, aborde des thèmes
    forts comme la famille, le deuil, la vengeance, l'angoisse de vieillir ou l'échec."</p>

<p>Afficher la même chaîne mais sans les "e".</p>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
      <code class="language-php">
      &lt;?php
      $texte1="La Vie aquatique (The Life Aquatic with Steve Zissou),film américain sorti en 2004,
      est le quatrième long-métrage réalisé par Wes Anderson.
      Il est dédié à l'océanographefrançais Jacques-Yves Cousteau et s'inspire
      librement de sa vie sur un ton parodique.Le film est une comedie dramatique qui,sous un aspect fantaisiste,aborde des thèmesforts comme la famille,le deuil, la vengeance, langoisse de vieillir ou léchec.";
      $texte2= str_replace("e","", $texte1);
      echo $texte2;
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
