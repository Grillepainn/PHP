<?php

  require 'class.php';

$epee1 = new Equipements("epee", 3, 0);
$epee2 = new Equipements("epee", 3, 0);
$epee3 = new Equipements("epee", 3, 0);
$epee4 = new Equipements("epee", 3, 0);
$epee5 = new Equipements("epee", 3, 0);
$hache1 = new Equipements("hache", 8, 0);
$hachemaudite = new Equipements("hachemaudite", 10, -5);
$armure1 = new Equipements("armure", 0, 5);
$dague1 = new Equipements("Dague", 3, 0);
$dague2 = new Equipements("Dague", 3, 0);

$orc1 = new Orc("Orc1", "Orc");
$orc2 = new Orc("Orc2", "Orc");

$elfe1 = new Elfe ("Elfe1", "Elfe");
$elfe2 = new Elfe ("Elfe2", "Elfe");
$elfe1-> set_equipement($dague1);
$elfe1-> set_equipement($dague2);

$orc1->set_equipement($epee1);
$orc1->set_equipement($epee2);
$orc1->set_equipement($epee3);
$orc1->set_equipement($epee4);
$orc1->set_equipement($epee5);
?>
