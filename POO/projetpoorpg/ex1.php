<?php
  //Création de la classe personnage
  class Personnage {
    private $name;
    private $pointsdevie = 100;
    private $pointsattaque = 10;
    private $pointsdefense = 5;
    private $crideguerre = "A l'attaaaaaaque !";
    //$equipement joue le rôle d'inventaire
    private $equipement = array();

    public function __construct($name) {
      $this->name = $name;
    }

    public function get_name() {
      return $this->name;
    }

    public function set_pointsdevie($pointsdevie) {
    $this->pointsdevie = $pointsdevie;
    }

    public function get_pointsdevie() {
      return $this->pointsdevie;
    }

    public function set_pointsattaque($pointsattaque) {
      $this->pointsattaque = $pointsattaque;
    }

    public function get_pointsattaque() {
      return $this->pointsattaque;
    }

    public function set_pointsdefense($pointsdefense) {
      $this->pointsdenfense = $pointsdefense;
    }

    public function get_pointsdefense() {
      return $this->pointsdefense;
    }

    public function set_crideguerre($crideguerre) {
      $this->crideguerre = $crideguerre;
    }

    public function get_crideguerre() {
      return $this->crideguerre;
    }

    public function set_equipement($equipement) {
    $this ->equipement[] = $equipement;
    }

    public function get_equipement() {
      return $this->equipement;
    }
  }

  //création de la classe humain
  class Humains extends Personnage {
  }

  // Création de la classe orc
  class Orc extends Personnage {
      public function __construct($name) {
      parent::__construct($name);
      $totalpointsdevieorc = parent::get_pointsdevie() - 10;
      parent::set_pointsdevie($totalpointsdevieorc);
      $totalpointsattaqueorc = parent::get_pointsattaque() + 2;
      parent::set_pointsattaque($totalpointsattaqueorc);
      $totalpointsdefenseorc = parent::get_pointsdefense() + 2;
      parent::set_pointsdefense($totalpointsdefenseorc);
      //Troisième étape
      parent::set_crideguerre("hhfgf fhfhfgff");
    }
  }

  // Création de la classe Elfe
  class Elfe extends Personnage {
    public function __construct($name) {
      parent::__construct($name, $crideguerre);
      $totalpointsdefenseelfe = parent::get_pointdefense() - 3;
      parent::set_pointsdefense($totalpointsdefenseelfe);
    }
  }

//Création de la classe équipement commune à tous les équipements

class Equipements {
  private $type;
  private $bonusatq;
  private $bonusdef;

  public function __construct($type, $bonusatq, $bonusdef) {
    $this->type = $type;
    $this->bonusatq = $bonusatq;
    $this->bonusdef = $bonusdef ;
  }

  public function set_type($type) {
  $this->type = $type;
  }

  public function get_type() {
    return $this->type;
  }

  public function set_bonusatq($bonusatq) {
  $this->bonusatq = $bonusatq;
  }

  public function get_bonusatq() {
    return $this->bonusatq;
  }

  public function set_bonusdef($bonusdef) {
  $this->bonusdef = $bonusdef;
  }

  public function get_bonusdef() {
    return $this->bonusdef;
  }
}

$epee1 = new Equipements("epee", 3, 0);
$epee2 = new Equipements("epee", 3, 0);
$epee3 = new Equipements("epee", 3, 0);
$epee4 = new Equipements("epee", 3, 0);
$epee5 = new Equipements("epee", 3, 0);
$hache1 = new Equipements("hache", 8, 0);
$hachemaudite = new Equipements("hachemaudite", 10, -5);
$armure1 = new Equipements("armure", 0, 5);


class Monstres {
  private $pointsdevie;
  private $pointsattaque;
  private $experience;

  public function __construct($pointsdevie, $pointsattaque, $experience) {
    $this->pointsdevie = $pointsdevie;
    $this->point = $pointsattaque;
    $this->$experience = $experience ;
  }

  public function set_pointsdevie($pointsdevie) {
  $this->pointsdevie = $pointsdevie;
  }

  public function get_pointsdevie() {
    return $this->pointsdevie;
  }

  public function set_pointsattaque($pointsattaque) {
  $this->pointsattaque = $pointsattaque;
  }

  public function get_pointsattaque() {
    return $this->pointsattaque;
  }

  public function set_experience($experience) {
  $this->experience = $experience;
  }

  public function get_experience() {
    return $this->$experience;
  }
}

function verifInventaire ($perso) {
  foreach ($perso->get_equipement() as $key => $value) {
    if (count($perso->get_equipement()) > 4) {
      echo 'Votre inventaire est plein';
      break;
    } else {
      echo $perso->get_name() . ' à moins de 4 items.';
      break;
    }
  }
}
verifInventaire($orc1);


?>
