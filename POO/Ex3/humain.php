<?php 

	class Elfe extends Aventurier {

		private $_pare;
		private $_usePower;

		public function __construct($nom) {
			parent::__construct($nom);
			$this->_pare = false;
			$this->_usePower = false;
		}

		public function attaquer($adversaire) {
			if($adversaire->getParer()) {
				echo "L'adversaire pare le coup";
				$adversaire->setParer(false);
			} else {
				// Calculer le bonus attaque à main nue
				$bonusMain = 3;

				for($i=0; $i<count($this->_inventaire); $i++) {
					if(($this->_inventaire[$i]->getType()===DAGUE) || ($this->_inventaire[$i]->getType()===EPEE)) {
						$bonusMain -= 3;
						break;
					}
				}

				//bonus equipement
				$bonusEquipement = $this->bonusAtkEquipement();

				// On attaque
				// Attaquer
				$newLife = (($adversaire->getDef() + $adversaire->bonusDefEquipement())
						-
					 ($this->_atk + $bonusEquipement + $bonusMain));

				// On enlève que si c'est supérieur
				if($newLife<0)
					$adversaire->setLife($adversaire->getLife() - $newLife);
				else
					echo "L'adversaire à trop de défense!";
			}
			$this->_pare = false;
		}

		public function parer($adversaire) {
			if(($adversaire->getNameOfClass() ==="Elfe")
				$this->_pare = true;
			else {
				if(rand(0, 1)==1)
					$this->_pare = true;
			}
			
			return $this->_pare;
		}

		public function utiliserPouvoir() {
			if(!$this->_usePower)
				$this->_vie += 20;
			
			$this->_usePower = true;
		}

		public function getParer() {
			return $this->_pare;
		}

		public function setParer($parer) {
			$this->_pare = $parer;
		}
	}

 ?>