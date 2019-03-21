<?php

 class Maillon {
   private $valeur;
   private $maillonSuivant;

   public function __construct($valeur, $maillonSuivant = null) {
     $this->valeur = $valeur;
     $this->maillonSuivant = $maillonSuivant;
   }

   public function getValeur() {
     return $this->valeur;
   }

   public function setValeur($valeur) {
   $this->valeur = $valeur;
   }

   public function getMaillonSuivant() {
     return $this->maillonSuivant;
   }

   public function setMaillonSuivant($maillonSuivant) {
   $this->maillonSuivant = $maillonSuivant;
   }
 }

 class Liste {
   private $premierMaillon;

   public function __construct($premierMaillon = null) {
     $this->premierMaillon = $premierMaillon;
   }

   public function getpremierMaillon() {
     return $this->premierMaillon;
   }

   // Correction Simon
   public function getDernier() {
     $current = $this->premierMaillon;
     while($current->getMaillonSuivant() != null) {
       $current = $current->getMaillonSuivant();
     }
     return $current;
   }

   //Savoir si la liste est vide
   public function estVide() {
     return ($this->premierMaillon == null);
   }

   public function getLongueur() {
     $nbMaillon = 0;
     $current = $this->premierMaillon;

     while($current != null) {
       $nbMaillon++;
       $current = $current->getMaillonSuivant();
     }
     return $nbMaillon;
   }

   //Insérer un maillon en début de liste
   public function insertDebut($valeur) {
     $ancienPremier = $this->premierMaillon;
     $vraiPremier = new Maillon($valeur, $ancienPremier));
     $this->premierMaillon = $vraiPremier;
   }

   //Insérer un maillon en fin de liste
   public function insererFin($valeur) {
     $ancienDernier = $this->getDernier();

     if($ancienDernier == null)
      $this->premierMaillon = new Maillon($valeur);
    else
      $ancienDernier->setMaillonSuivant(new Maillon($valeur));
   }

   //Supprimer la première occurence
   public function supprimePremier($valeur) {
     $current = $this->premierMaillon;

     while($current->getMaillonSuivant() != null) {
       if($current->getMaillonSuivant()->getValeur()==$valeur) {
         $current->setMaillonSuivant($current->getMaillonSuivant()->getMaillonSuivant());
         break;
       }
       $current = $current->getMaillonSuivant();
     }
   }

   //Supprimer la liste sous forme de String
   public function __toString() {
     $maString = "";
     $current = $this->premierMaillon;

     while ($current != null) {
       $maString.= "/". $current->getValeur() ." /.";
     }
     return $maString;
   }
   // Ma synthaxe
   public function setPremierMaillon($premierMaillon) {
   $this->premierMaillon = $premierMaillon;
   }

   public function nbrMaillon() {
     if (!$premierMaillon == null) {
       if (!maillonSuivant->getMaillonSuivant() == null) {
         $nbrMaillon = $nbrMaillon + 1;
       } else {
         echo 'Le maillon qui suit à une valeur null';
         return $nbrMaillon;
       }
     } else {
       echo 'Le premier maillon ne contient aucune valeur';
     } nbrMaillon();
   }

   public function addElementListeDebut($element) {
     if ($premierMaillon == null) {
       setPremierMaillon($element);
     } else if (!$premierMaillon == null) {
       $element->setMaillonSuivant($this->premierMaillon);
       setPremierMaillon($element);
     }
   }

   public function addElementListeFin($element) {
     $lastElement = $this->premierMaillon;
     while (!$lastElement == null) {
       $lastElement = $lastElement->getMaillonSuivant();
     } $lastElement = // modifier l'élément suivant, vérifier s'il est null
   }
 }
?>
