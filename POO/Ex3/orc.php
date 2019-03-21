<?php 

	class Orc extends Aventurier {

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
				if($adversaire->getNameOfClass() === "Elfe") {
					$bouclier = false;
					for($i=0; $i<count($adversaire->getInventaire()); $i++){
						if($adversaire->getInventaire()[$i]->getType()===ARMURE) {
							$bouclier = true;
							break;
						}
					} 

					if(!$bouclier) {
						echo "L'adversaire est un elfe et n'a pas de bouclier, - 50!\n";
						$adversaire->setLife($adversaire->getLife() - 50);
					}
					else {
						// On attaque
						// Attaquer
						$newLife = (($adversaire->getDef() + $adversaire->bonusDefEquipement())
								-
							 ($this->_atk + $bonusEquipement));

						// On enlève que si c'est supérieur
						if($newLife<0)
							$adversaire->setLife($adversaire->getLife() - $newLife);
						else
							echo "L'adversaire à trop de défense!";
					}
				} else {
					// On attaque
					// Attaquer
					$newLife = (($adversaire->getDef() + $adversaire->bonusDefEquipement())
							-
						 ($this->_atk + $bonusEquipement));

					// On enlève que si c'est supérieur
					if($newLife<0)
						$adversaire->setLife($adversaire->getLife() - $newLife);
					else
						echo "L'adversaire à trop de défense!";
				}
			}

			$this->_pare = false;
		}

		public function parer($adversaire) {
			$this->_pare = true;
			$this->_def-=2;

			return true;
		}

		public function utiliserPouvoir() {
			if(!$this->_usePower) {
				$this->_def += 20;
				$this->_atk -= 10;
			}
			
			$this->_usePower = true;
		}

		public function getParer($adversaire) {
			return $this->_pare;
		}

		public function setParer($parer) {
			$this->_pare = $parer;
		}
	}

 ?>