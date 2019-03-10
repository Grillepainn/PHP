<?php
  //Création de la classe personnage
  class Personnage {
    private $name;
    private $pointsdevie = 100;
    private $pointsattaque = 10;
    private $pointsdefense = 5;
    //$equipement joue le rôle d'inventaire
    private $equipement = array();
    private $race;

    public function __construct($name, $race) {
      $this->name = $name;
      $this->race = $race;
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

    public function get_race() {
      return $this->race;
    }
  }

  //création de la classe humain
  class Humains extends Personnage {
  }

  // Création de la classe orc
  class Orc extends Personnage {
      public function __construct($name, $race) {
      parent::__construct($name, $race);
      $totalpointsdevieorc = parent::get_pointsdevie() - 10;
      parent::set_pointsdevie($totalpointsdevieorc);
      $totalpointsattaqueorc = parent::get_pointsattaque() + 2;
      parent::set_pointsattaque($totalpointsattaqueorc);
      $totalpointsdefenseorc = parent::get_pointsdefense() + 2;
      parent::set_pointsdefense($totalpointsdefenseorc);

    }
  }

  // Création de la classe Elfe
  class Elfe extends Personnage {
    public function __construct($name, $race) {
      parent::__construct($name, $race);
      $totalpointsdefenseelfe = parent::get_pointsdefense() - 3;
      parent::set_pointsdefense($totalpointsdefenseelfe);
    }
    private $vitesse;

    public function set_vitesse($vitesse) {
    $this ->vitesse = $vitesse;
    }

    public function get_vitesse() {
      return $this->vitesse;
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
