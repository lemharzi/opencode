<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><span class="left">&lt;</span> HTML - Exercice 1 <a href="exercice2.php">&gt;</a></h1>
  </div>
  <div id="Instruction">
    <p>Ecrire une page HTML qui affiche :</p>
    <p>
      <ul>
        <li>un titre au niveau du bandeau de la fenêtre du navigateur</li>
        <li>le même titre dans le document</li>
        <li>un paragraphe</li>
        <li>Le document devra être écrit en UTF-8</li>
        <li>Le document devra contenir des caractères accentués</li>
    </ul>
    </p>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
        <code class="language-markup">
          &lt;!DOCTYPE html&gt;
            &lt;html&gt;
              &lt;head&gt;
                &lt;meta charset="utf-8"&gt;
                &lt;title&gt;Ceci est un titre&lt;/title&gt;
              &lt;/head&gt;
              &lt;body&gt;
                &lt;h1&gt;Ceci est un titre&lt;/h1&gt;
                &lt;p&gt;Ceci est un paragraphe que j'ai crée pour mettre au moins un accent&lt;/p&gt;
              &lt;/body&gt;
            &lt;/html&gt;
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
