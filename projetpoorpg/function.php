<?php

/*Fonction qui vérifie l'inventaire du perso, supprime le dernier ajouté si le
nombre d'item est supérieur à 4*/
function verifInventaire ($perso) {
  foreach ($perso->get_equipement() as $key => $value) {
    if (count($perso->get_equipement()) > 4) {
      echo 'Votre inventaire est plein, supprésion du dernier élément ajouté.';
      $delete = $perso->set_equipement($perdo);
      array_splice($delete, -1);
      break;
    } else {
      echo $perso->get_name() . ' à moins de 4 items. <br/>';
      break;
    }
  }
}

// Fonction qui créer un duel en deux personnages
function duel ($attaquant, $defenseur) {
  if ($attaquant->get_pointsdevie() >= 20 && $defenseur->get_pointsdevie() >= 20) {
    attaqueOrc($attaquant, $defenseur);
    attaqueElfe($defenseur, $attaquant);
    duel($attaquant, $defenseur);
  } else {
    echo 'le combat est terminé !';
  }
}

function verifOrc ($orc, $elfe) {
  if ($orc->get_race() == "Orc" && $elfe->get_race() == "Elfe" && $elfe->get_equipement(["Bouclier"])) {
    $elfe->set_pointsdevie( ($elfe->get_pointsdevie() - 50));
    echo $elfe->get_name() . ' perd 50 points de vie face au pouvoir spécial de '
    . $orc->get_name() . ', il lui en reste ' . $elfe->get_pointsdevie(). '<br/>';
  }
}


/*Fonction qui créer l'attaque d'un orc et la defense du personnage en face
de lui*/
function attaqueOrc ($attaquant, $defenseur) {
    $random = rand(1, 10);
    echo 'Le jet de dés pour la parade de ' . $defenseur->get_name() . ' est de ' . $random . '<br/>';
   if ($random <= 7) {
    echo 'Le coup n\'a pas pu être paré, ' . $defenseur->get_name() . ' se prend une quiche
    et perd ' . $attaquant->get_pointsattaque() . ' points de vie ! <br/>';
    $defenseur->set_pointsdevie( ($defenseur->get_pointsdevie() - $attaquant->get_pointsattaque()) );
    echo 'Il reste ' . $defenseur->get_pointsdevie() . ' point de vie  à ' . $defenseur->get_name()
    . '<br/>';
  } else {
    echo $defenseur->get_name() . ' à réussi à parer le coup ! <br/>';
  } if ($defenseur->get_race() == "Orc") {
    $random = rand(1, 10);
      echo 'Le jet de dés pour le mode berserk est de ' . $random . '<br/>';
      if ($random == 10) {
        echo $defenseur->get_name() . ' entre en mode berserk, ses points de défense augmente de 20
        mais il perd 10 points de vie, ';
      $defenseur->set_pointsdefense( ($defenseur->get_pointsdefense() + 20) );
      $defenseur->set_pointsdevie( ($defenseur->get_pointsdevie() - 10) );
      echo 'ses points de défense passe à ' . $defenseur->get_pointsdefense() . ' et les points de vie à ' .
      $defenseur->get_pointsdevie(). '<br/>';
    } else {
      echo 'Il ne se passe rien.<br/>';
      }
  }
}

//Fonction qui vérifie si un elfe porte une dague pour lui attribuer un bones +2
function verifElfe($nom1) {
  if ($nom1->get_equipement(["Dague"])) {
    $nom1->set_pointsattaque( ($nom1->get_pointsattaque() + 2) );
    echo $nom1->get_name() . ' porte au moins une dague, ses points d\'attaque passe à : ' . $nom1->get_pointsattaque() . '<br/>';
  }
}

/*Fonction qui créer l'attaque d'un elfe et la defense du personnage en face
de lui */
function attaqueElfe($attaquant, $defenseur) {
  $random = rand(1, 10);
  echo 'Le jet de dés pour la parade de ' . $defenseur->get_name() . ' est de ' . $random . '<br/>';
  if ($random <= 7 ) {
    echo 'Le coup n\'a pas pu être paré ' . $defenseur->get_name() . ' se prend une quiche et perd ' .
    $attaquant->get_pointsattaque() . ' points de vie ! <br/>';
    $defenseur->set_pointsdevie( ($defenseur->get_pointsdevie() - $attaquant->get_pointsattaque()) );
    echo 'Il reste ' . $defenseur->get_pointsdevie() . ' point de vie  à ' . $defenseur->get_name()
    . '<br/>';
  } else {
    echo 'Par chance le coupe de ' . $attaquant->get_name() . ' à été paré !<br/>';
  } $random = rand(1, 10);
    echo 'Le jet de dés pour le pouvoir de race Elfe est de ' . $random . '<br/>';
    if ($random == 10) {
      echo $defenseur->get_name() . ' active son bonus de race, il gagne +3 en vitesse !';
      $defenseur->set_vitesse( ($defenseur->get_vitesse() + 3) );
      echo ' Ses points de vitesse passent à ' . $defenseur->get_vitesse() . '<br/>';
  } else {
    echo 'Il ne se passe rien.<br/>';
    }
}



?>
