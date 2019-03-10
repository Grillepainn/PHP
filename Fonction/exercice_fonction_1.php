<?php
//Exercice 1.1
function affichetext() {
  echo "This is a ransom sentence";
}
affichetext();

//Exercice 1.3
function textaff($msg1, $msg2) {
  return $msg1.' '.$msg2;
}

$message1 = "Ceci est un message,";
$message2 = " et il est plutôt sympa !";
echo textaff($message1, $message2);

//Exercice 2
function nombre($nbr1, $nbr2) {
  if ($nbr1 < $nbr2) {
    echo "Le premier chiffre est supérieur au second";
  } elseif ($nbr1 > $nbr2) {
    echo "Le second chiffre est supérieur au premier";
  } else echo "Les chiffres sont identiques";
}

$nombre1 = 2;
$nombre2 = 2;
nombre($nombre2, $nombre1);


//Exercice 3
function isPrime($nb) {
  for ($i=2; $i < $nb; $i++) {
    if($nb%$i == 0) {
      return false;
    }
  } return true;
}

if(isPrime(37)) {
  echo "Mon nombre est premier";
} else {
  echo "Mon nombre n'est pas premier";
}

//Exercice 4.1
 $depensejohn = array(3,5,9,12,10);
 $total = 0;
 for ($i=0; $i < count($depensejohn) ; $i++) {
   $total = $total + $depensejohn[$i];
 }

echo "La somme des dépenses est de ".$total." euros.";

//Exercice 4.2
$array = array(2,8,15,47,23);
function depenses($somme) {
  $total = 0;
  for ($i=0; $i < count($somme) ; $i++) {
    $total = $total + $somme[$i];
  }
  return $total;
}
echo "Les dépenses sont de ".depenses($array)." euros.";

//Exercice 5
$mot = "kayak";
$ind = 0;

function verifimot($exe) {
  $nb = strlen($exe);

  for ($i=0; $i < $nb/2 ; $i++) {
    $ind = $exe[$i];
    if ($exe[$i] != $exe[($nb-1)-$i]) {
      $result1 = "il y a un problème";
      return $result1;
    }
  }
$result2 = "tout est ok"; return $result2;}
 echo 'Je test le mot Kayak, et '.verifimot($mot);

 //Exercice6
 function htmlImages($src) {
   echo "<img src='".$src."'>";
 }

 htmlImages('skate.png');

 //Exercice 7
$l = 10;
$L = 5;
$aire = $l*$L;
 function aire($l, $L) {
   echo "Aire du rectangle :".($l*$L);
 }

 //Exercice 8
 function multi($x = 1,$y = 2) {
   return $x*$y;
 }
  multi(10,2);

  //Exercice 9
  $str = "this is a random sentence";
  function countWords($text)  {
    $tab = explode(" ", $text);
    return count($tab);
  }

  //Exercice 10
  $str = "this is a random sentence totally is random";

  function countEachWords($text) {
    $newArray = array();
    $tab = explode(" ",$text);

    foreach ($tab as $value) {
      if(isset($newArray[$value])) {
        $newArray[$value] += 1;
      } else {
      $newArray[$value] = 1;
    }
  }
  return $tab;
}
 ?>
