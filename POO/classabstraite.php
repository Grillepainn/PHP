<?php

/*
Les classes abstraites
------------------------
Ces classes ne sont jamais déclarés en tant qu'objet.

Imaginons qu'on ai une class rectangle, triangle et carré hérité d'une class
mère forme :
Forme();
->
Rectangle();
Triangle();
Carré();

Imaginons qu'on ai une méthode pour calculer l'air d'une forme, l'opération va être différente
selon la forme, mais ils possédent tousses cette propriété. C'est la qu'intervient la
class abstraite.
Dans la class mère, on veut pouvoir définir une méthode calculerAir qui est abstraite,
on utilisera alors une class abstraite. A partir du moment ou on a une méthode abstraite,
la class devient aussi abstraite.
Tous les enfants ont la même méthodes, ils l'executents simplement différament.

public class abstract Shape { <- la class est devenu abstraite
private $nbrcotés;
private $nbrsommets;

abstract function calculerAir();
}

public class rectangle extends Shape {
function calculerAir() {
 code à éxecuter
}
}

public class triangle extends Shape {
function calculerAir() {
 code à éxecuter
}
}

...


Les interfaces
---------------
On peut les voir comme des class abstraites qui contiennent que des méthodes abstraites
Permet de définir des rôles que tous le monde partage mais utilises de manière différentes
sans parler d'héritage. Dans le cas de figure suivant ou on a des animaux et des humains,
il n'y a pas que les animaux qui font du bruit, il y a aussi les humains. Les 2 class n'ont
rien en commun à part cela. L'interface permet de définir des rôles et de les attribuer à
qui ont veut.

public interface IExample {
  function faireBruit {};
}

Création de class humain
public class Humain implements IExemple {
function faireBruit(){
echo "Salut !";
}
}
 */

?>
