//Exercice 1
<form method="POST" action="exercise_forms.php">
  <label>Votre nom</label> : <input type="text" name="Nom"><br>
  <label>Votre prénom</label> : <input type="text" name="Prenom"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
  if(isset($_POST['Nom'])){
    $prenom = $_POST['Prenom'];
    $nom = $_POST['Nom'];
    print "Salut ".$prenom." ".$nom;
  }
 ?>

//Exercice 1.3

 <?php
   $nom = "";
   if(isset($_POST['Nom'])) {
     $prenom = $_POST['Prenom'];
     $nom = $_POST['Nom'];
     if ($prenom == 'Luca') {
       echo "Salut mec !";
     } else {
       echo "On se connait ?";
     }
   }
  ?>

   <form method="POST" action="exercise_forms.php">
     <label>Votre nom</label> : <input type="text" name="Nom" value="<?php echo $nom; ?>"><br>
     <label>Votre prénom</label> : <input type="text" name="Prenom"><br>
     <input type="submit" value="Envoyer">
   </form>

//Exercice 1.3
   <?php
     $array = array('Luca', 'Arthur', 'Rob', 'Big');
     $nom = "";
     if(isset($_POST['Nom'])) {
       $nom = $_POST['Nom'];}
     function testconnexion ($array, $saisie) {
       foreach ($array as $value) {
           if ($value == $saisie) {
             $accepted = 1;
             return $accepted;
           } else {
             $refused = 0;
             return $refused;
           }
         }
     }
    ?>
   <form method="POST" action="exercise_forms.php">
     <label>Site sécurisé, veuillez saisir votre blaze pour l'identification </label>:
     <input type="text" name="Nom" value="<?php echo $nom; ?>">
     <input type="submit" value="Envoyer">
   </form>

   <?php
       if (testconnexion($array, $nom) == 1) {
         echo "Bievenue !";
       } else {
         echo "Heu ... On se connait ?";
       }
   ?>

//Exercice 2.1
<?php
  $str = "lucasguera2@outlook.fr";
  $pos = strpos($str, '@');
  if($pos == true) {
    echo "Adresse mail :".$str." valide";
  } else {
    echo "Votre adresse mail est invalide";
  }
 ?>

//Exercice 2.2
<?php
  function searchinstr($str) {
    $pos = strpos($str, '@');
    if ($pos == true) {
      $value1 = 1;
      return $value1;
    } else {
      $value0 = 0;
      return $value0;
    }
  }

  $strtest = "lucasguera2@outlook.fr";
  if (searchinstr($strtest) == 1) {
    echo 1; //Voir avec Simon, n'arrive pas à accéder à la variable $value1
  } else {
    echo 0; //Voir avec Simon, n'arrive pas à accéder à la variable $value2
  }
 ?>
