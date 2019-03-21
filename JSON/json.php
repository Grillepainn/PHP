<?php

  $file = file_get_contents("movie.json");

  //Récupère et transform en objet
  $jsonFile = json_decode($file);
  echo "<pre>";
  //var_dump($jsonFile);
  echo "<pre>";

  echo $jsonFile->{"nom"};
  echo '<br/>';
  //Attention aux majuscules
  echo $jsonFile->{"films"}[0]->{"titre"};
  echo '<br/>';

  //Instancier un nouvel objet vide
  $objet1 = new stdClass();

  $objet1->name = "Spielberg";
  $objet1->age = 72;

  echo "<pre>";
  var_dump($objet1);
  echo "<pre>";

  //Sauvegarde des données en json
  $myJson = json_encode($objet1);
  echo $myJson . '<br/>';

  // Création d'une classe réalisateur avec les attributs public
  // On doit mettre les attributs en public pour les récupérer en json
  class Director {
    public $name;
    public $age;

    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  }

  // Transform notre objet qui vient de notre propre class en format json
  $spielberg = new Director('Spielberg', 72);
  $myJson = json_encode($spielberg);
  echo $myJson. '<br/>';

  // Création d'une lass réalisateur avec les attributs private
  class DirectorII implements JsonSerializable {
    private $name;
    private $age;
    private $films;

    public function __construct($name, $age, $films) {
      $this->name = $name;
      $this->age = $age;
      $this->films = $films;
    }

    // Permet de retourner mes attributs en json, car elles ne sont pas accessibles en private
    public function jsonSerialize() {
      return [
        "nom"=> $this->name,
        "age"=> $this->age,
        "film"=> $this->films
      ];
    }

  }

  $moviesDirII = ['jurissic world', 'ready player one'];
  $newRealI = new DirectorII('Spielberg', 72, $moviesDirII);
  $newRealII = new DirectorII('toto', 14, $moviesDirII)
  $myJsonII = json_encode([$newRealI, $newRealII]);
  echo $myJsonII;




?>
