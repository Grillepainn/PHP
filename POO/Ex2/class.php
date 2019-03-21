<?php
    abstract class etreVivants {
    private $couleurpoils;
    private $sexe;
    private $name;

    public function __construct($name, $sexe, $couleurpoils){
      $this->name = $name;
      $this->sexe = $sexe;
      $this->couleurpoils = $couleurpoils;
    }

    public function get_name() {
      return $this->name;
    }

    public function get_couleurpoils() {
      return $this->couleurpoils;
    }

    public function get_sexe() {
      return $this->sexe;
    }

    abstract function communication();
  }

/* ------------------------------------------- */
  abstract class Animals extends etreVivants {
  private $nbrpattes;

  public function __construct($name, $sexe, $couleurpoils,$nbrpattes) {
    $this->nbrpattes= $nbrpattes;
    parent::__construct($name, $sexe, $couleurpoils, $nbrpattes);
  }

  public function get_nbrpattes() {
    return $this->nbrpattes;
  }
}

/* ------------------------------------------- */
class Chat extends Animals  {
  public function __construct($name, $nbrpattes, $couleurpoils, $sexe) {
    parent::__construct($name, $nbrpattes, $couleurpoils, $sexe);
  }

  function communication() {
    return 'Miaou';
  }
}

/* ------------------------------------------- */
class Chien extends Animals {
  public function __construct($name, $nbrpattes, $couleurpoils, $sexe) {
    parent::__construct($name, $nbrpattes, $couleurpoils, $sexe);
  }

  function communication() {
    return 'Ouaf';
  }
}

/* ---------------- Objets ------------------- */
$chat1 = new Chat ('Charlie', 4, 'blanc(s)', 'transexuelle');
$chien1 = new Chien ('Noodle', 4, 'gris', 'mâle');

echo 'Nous venons de créer un chat, il s\'appelle ' . $chat1->get_name() . ',
à ' . $chat1->get_nbrpattes() . ' pattes, ses poils sont ' . $chat1->get_couleurpoils() .
' et il est ' . $chat1->get_sexe() . ', quand il communique, il fait : ' . $chat1->communication() . '<br/>';

echo 'Cette fois on à créé un chien, il s\'appelle ' . $chien1->get_name() . ',
à ' . $chien1->get_nbrpattes() . ' pattes, ses poils sont ' . $chien1->get_couleurpoils() .
' et c\'est un(e) ' . $chien1->get_sexe() . ', quand il communique, il fait : ' . $chien1->communication() . '<br/>';

/* ------------------------------------------- */
interface ITravailler {
  function travailler();
}

/* ------------------------------------------- */
class Humain extends etreVivants implements ITravailler {
  public function __construct($name, $couleurpoils, $sexe) {
    $this->name = $name;
    $this->couleurpoils = $couleurpoils;
    $this->sexe = $sexe;
  }

  function travailler() {
    return ' Un humain est capable de travailler';
  }

  function communication() {
    return 'Je suis un humain qui sait parler et ça se voit';
  }
}

/* ---------------- Objets ------------------- */
$humain1 = new Humain ('Benoit', 'violet, rouge et orange', 'femme');
echo 'J\'ai créé un humain, il s\'appelle ' . $humain1->get_name() . ', ses cheveux sont ' .
$humain1->get_couleurpoils() . ', pour finir c\'est un(e) ' . $humain1->get_sexe() . '.'.
$humain1->travailler() . $humain1->communication() .'.<br/>';

/* ------------------------------------------- */
class Robot implements ITravailler {
  private $identifiant;
  private $couleur;

  public function __construct($identifiant, $couleur) {
    $this->identifiant = $identifiant;
    $this->couleur = $couleur;
  }

  public function get_identifiant() {
    return $this->identifiant;
  }

  public function get_couleur() {
    return $this->couleur;
  }

  function travailler() {
    return 'Je boss moi, et je suis un robot donc je le fais mieux !';
  }

}

/* ---------------- Objets ------------------- */
$robot1 = new Robot (1, 'vert');
echo 'J\'ai créé un robot, son identifiant est ' . $robot1->get_identifiant() . ' et il
est ' . $robot1->get_couleur(). '<br>';
echo '------------------------------------------------------------------------<br/>';

/* ---------------- Partie 3 ----------------- */

$humain = new Humain ('Gilles', 'noir', 'homme');
$robot = new Robot ('2', 'rouge');
$chat = new Chat ('Ballon', 4, 'blanc', 'mâle');
$chien = new Chien ('Choupette', 3, 'noir', 'femelle');

$tableau1 = array($humain, $robot);
$tableau2 = array($humain, $chat, $chien);

for ($i = 0; $i <= 10; $i++) {
  $random = rand(0, 1);
  $randomtab2 = rand(0, 2);
  $randomtab1 = rand(0, 1);
  if($random == 1) {
    echo $tableau2[$randomtab2]->communication(). '<br/>';
  } else {
    echo $tableau1[$randomtab1]->travailler(). '<br/>';
  }

}

?>
