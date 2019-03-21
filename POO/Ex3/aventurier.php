<?php 
	
	abstract class Aventurier {
		protected $_nom;
		protected $_vie;
		protected $_atk;
		protected $_def;
		protected $_vit;
		protected $_inventaire;

		private $_nbEpee;
		private $_nbArmure;
		private $_nbBijou;

		public function equiper($equipement) {

			if(count($this->_inventaire) < 4) {

				if(($equipement->getType() === EPEE || $equipement->getType() === DAGUE) && $this->_nbEpee <2)
					$this->_nbEpee++;
				else if($equipement->getType() === ARMURE && $this->_nbArmure <1)
					$this->_nbArmure++;
				else if($equipement->getType() === BIJOU && $this->_nbBijou <1)
					$this->_nbBijou++;
				else {
					echo $this->_nom . " a déjà le max d'équipement pour : " . $equipement->getType() . "\n";
					return;
				}

				$this->_inventaire[] = $equipement;

			} else {
				echo "L'inventaire de " . $this->_nom . " est plein !\n";
			}

		}

		public function afficherInventaire() {
			$monInventaire = "";

			for($i=0; $i<count($this->_inventaire); $i++){
				$monInventaire .= "\n\t" . $this->_inventaire[$i];
			} 

			return $monInventaire;
		}

		public function __construct($nom) {
			$this->_nom = $nom;
			$this->_vie = 100;
			$this->_atk = 10;
			$this->_def = 5;
			$this->_vit = 3;
			$this->_inventaire = array();
			$this->_nbEpee = 0;
			$this->_nbArmure = 0;
			$this->_nbBijou = 0;
		}

		public function __toString() {
			return "L'aventurier du nom de " . $this->_nom . " possède : \n"
			. $this->_vie . " points de vie.\n" 
			. $this->_atk . " points d'attaque.\n" 
			. $this->_def . " points de défense.\n" 
			. $this->_vit . " points de vitesse.\n"
			. " Son inventaire : \n" . $this->afficherInventaire() . "\n";
		}

		public function bonusAtkEquipement() {
			$bonusTotal = 0;

			for($i=0; $i<count($this->_inventaire); $i++){
				$bonusTotal += $this->_inventaire[$i]->getBonusAtk();
			} 

			return $bonusTotal;
		}

		public function bonusDefEquipement() {
			$bonusTotal = 0;

			for($i=0; $i<count($this->_inventaire); $i++){
				$bonusTotal += $this->_inventaire[$i]->getBonusDef();
			} 

			return $bonusTotal;
		}

		public function setLife($newLife) {
			$this->_vie = $newLife;
		}

		public function getLife() {
			return $this->_vie;
		}

		public function getAtk() {
			return $this->_atk;
		}

		public function getDef() {
			return $this->_def;
		}

		public function getInventaire() {
			return $this->_inventaire;
		}

		public function getNameOfClass()
	   {
	      return static::class;
	   }

		public abstract function attaquer($adversaire);
		public abstract function parer($adversaire);
		public abstract function utiliserPouvoir();

	}

 ?>