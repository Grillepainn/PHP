<?php 

	require_once 'aventurier.php';
	require_once 'typeEquipement.php';
	require_once 'equipement.php';
	require_once 'elfe.php';
	require_once 'orc.php';

	// Mes aventuriers
	$Simon = new Elfe("Simon");
	$Pierre = new Orc("Pierre");

	
	// Je crée mes equipements
	$epee = new Equipement("Epee de batard", EPEE, 4, 0, -1);
	$epee2 = new Equipement("Epee 2", EPEE, 3, 0, 0);
	$armure = new Equipement("Armure de ouf", ARMURE, 0, 5, 0);
	$bijou = new Equipement("Bague", BIJOU, 0, 0, 3);

	echo "--------------------\n";

	// J'équipe mes aventuriers
	$Simon->equiper($epee);
	$Simon->equiper($bijou);
	$Pierre->equiper($epee2);
	$Pierre->equiper($armure);

	// J'affiche mes aventuriers
	echo $Simon;

	echo "--------------------\n\n";

	echo $Pierre;

	echo "--------------------\n\n";

	echo "-------- COMBAT ------------\n";

	// Mon personnage attaque
	$Simon->parer($Pierre);

	// Mon personnage attaque
	$Pierre->attaquer($Simon);
	// Mon personnage attaque
	$Pierre->attaquer($Simon);

?>