<?php

  $serveur = "localhost";
  $user = "root";
  $password = "";
  mysqli_connect('$serveur', '$user', '$password');
  echo "Connexion au serveur ok !";


  // Cette technique est risqué car les infos sont visibles, on va donc créer un second
  //fichier et include

  // On se retrouve avec le même code mais sans variables
  mysqli_connect('$serveur', '$user', '$password');
  echo "Connexion au serveur ok !";

  //On inclue ensuite notre fichier avec les variables

  require_once 'codbdd.php' ;
  mysqli_connect('$serveur', '$user', '$password');
  echo "Connexion au serveur ok !";

  //Maintenant, on peut faire appel à nos constantes

  require_once 'cobdd.php';
  mysqli_connect('DB_SERVER', 'DB_USER', 'DB_PASS');
  echo "Connexion au serveur ok !";

  // On va choisir la BDD sur laquelle bosser
  // On enferme notre connexion dans une variables
  $db_handle = "mysqli_connect('DB_SERVER', 'DB_USER', 'DB_PASS');";
  //On enferme la BDD sur laquelle on veut travailler dans une variable
  $db_name = "ifa";
  //On se connect
  $db = mysqli_select_db($db_handle, $db_name);

  if ($db) {
    echo $db_name . " database found";
  } else {
    echo $db_name . "database not found";
  }

  ?>
  // Pour récupérer des informations, on va donc avoir

  <?php

  require_once 'cobdd.php';
  $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
  echo "Connecion to server ok !";
  $db_name = "ifa";
  $db = mysqli_select_db($db_handle, $db_name);

  if ($db) {
    //echo $db_name . " database found";
    $rqt = "SELECT * FROM movies";
    $result_query = mysqli_query($db_handle, $rqt);
    //On créait une boucle pour explorer tous les champs de notre tableau
    while($db_field = mysqli_fetch_assoc($result_query)) {
      echo "<hr>";
      print_r($db_field);
    }
  } else {
    echo $db_name . "database not found";
  }

  mysqli_close($db_handle);
  ?>

<?php
  //Insérer une donnée

  $rqt = "INSERT INTO actors(name, date_of_birth, nationality)
          VALUES ('Tom Cruise1', '1962-08-03', 'USA')";
  $result_query = mysqli_query($db_handle, $rqt);
  if($result_query) {
    echo "Reccords added to the database !";
  }

  // Pour supprimer etc, c'est le même principe !

  //Créer un cookie

  setcookie("pseudo", "luca", time()+120);

//Pour retrouver la valeur des cookies

$_COOKIE["pseudo"];

//Créer une session, créer aussi un cookie pour auvegarder à l'id de la session

//je démarre ma session
session_start();
//Je met à jour ou je crée une entrée session
if(isset($_SESSION['page_vierge'])) {
  $_SESSION['page_vierge'] +=1;
} else {
  $_SESSION['page_vierge'] =1;
}

print_r($_SESSION);




?>
