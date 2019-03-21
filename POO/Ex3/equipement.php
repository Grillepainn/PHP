<?php 

	class Equipement {
		private $_nom;
		private $_type;
		private $_bonusAtk;
		private $_bonusDef;
		private $_bonusVit;

		public function __construct($nom, $type, $bonusatk, $bonusdef, $bonusvit) {
			$this->_nom = $nom;
			$this->_type = $type;
			$this->_bonusAtk = $bonusatk;
			$this->_bonusDef = $bonusdef;
			$this->_bonusVit = $bonusvit;
		}

		public function __toString() {
			return "L'equipement nommé " . $this->_nom . " du type " . $this->_type ." : \n"
			. $this->_bonusAtk . " points d'attaque.\n" 
			. $this->_bonusDef . " points de défense.\n" 
			. $this->_bonusVit . " points de vitesse.\n";
		}

		public function getType() {
			return $this->_type;
		}

		public function getBonusAtk() {
			return $this->_bonusAtk;
		}

		public function getBonusDef() {
			return $this->_bonusDef;
		}








 	}

 ?>