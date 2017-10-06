<?php
include('header.php');
 ?>
 <div id="content">
  <div id="titreExercice">
    <h1><a href="exercice5PHP.php" class="left">&lt;</a> PHP - Exercice 6  <span>&gt;</span></h1>
  </div>
  <div id="Instruction">
    <p>Soit le tableau langage = array("HTML","CSS","Javascript","PHP")
Faire une fonction qui prend un tableau en paramètre et qui retourne un tableau trié par ordre alphabétique.
Faire une fonction qui prend en paramètre un tableau et qui retourne une chaîne avec la fusion de toutes les lignes du tableau.</p>
  </div>
  <div id="result">
    <span class="button" id="buttonResult" onclick="javascript:showHidden('text');">Réponse</span>
    <div id="text" class="text">
      <pre>
        <code class="language-php">
          &lt;?php
            //déclaration du tableau $language
            $language = array("HTML","CSS","Javascript","PHP");
            //déclaration de la fonction alphabetic() qui permet de trier $language par ordre alphabétique
            function alphabetic($code){
              //vérification que le paramètre est bien un tableau
              if(is_array($code)==true){
                //tri du tableau
                sort($code);
              }
              return $code;
            }
            echo '&lt;br/&gt;Le tableau langage trié :&lt;br/&gt;';
            //on appelle la fonction alphabetic() et on stocke le résultat dans le tableau $sortedArray
            $sortedArray = alphabetic($language);
            //on parcours le tableau avec la boucle foreach pour afficher son contenu
            foreach($sortedArray as $value){
            echo $value . '&lt;br/&gt;';
            }

            //déclaration de la fonction concat() qui permet de renvoyer le contenu d'un tableau concaténé
            function concat($code){
              //vérification que le paramètre est bien un tableau
              if(is_array($code)==true){
                //Rassemble les éléments du tableau dans la chaîne $string
                $string = implode(' ', $code);
            }
              return $string;
            }
            echo '&lt;br/&gt;Le tableau langage concaténé :&lt;br/&gt;';
            echo concat($language);
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
