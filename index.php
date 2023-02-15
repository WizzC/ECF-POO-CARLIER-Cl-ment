<?php
// require 
require "Player.class.php";
require "Monster.class.php";
require "BanditManchot.class.php";

// intencier les class
$joueur = new Player();
$monstre = new Monster();
$banditManchot = new BanditManchot();

// indique que le perso est cree
echo "Le joueur " . $joueur->getPseudo() . " à été créé! \n";
// le compteur sert a savoir si le monstre vaut 1 ou 2 point
$compteur = $monstre->compteur() ;


// la boucle sert a faire sortir le joueur 
while ($joueur->getLifePoint() > 0 && $joueur->move() != 0) {

    // premet de definir si c'est le monstre ou le bandit que le joueur va rencontrer
    $rand = rand(1, 6);
    if ($rand < 3) {
        
        // demande au joueur si il veut jouer
        if ($joueur->play() == "oui" || $joueur->play() == "OUI") {
            $banditManchot->howManyWeWinOrLose($joueur);
        } else {
            echo "Dommage\n";
        };

    } else {
        // permet de faire affronter le monstre et le joueur jusqua la mort de l'un d'entre eux
        while ($joueur->getLifePoint() > 0 && $monstre->getLifePoint() > 0) {

            // attaque le monstre 
            echo " \n";
            echo "Le monstre : \n";
            echo "Point de vie actuel : " . $monstre->getLifePoint() . "\n";
            echo $joueur->getPseudo() . "attaque le monstre de " . $joueur->getStrenghPoint() . "\n";
            $joueur->attack($monstre) . "\n";
            echo "Point de vie actuel : " . $monstre->getLifePoint() . "\n";

            if ($monstre->getLifePoint() > 0) {
                // attaque le perso
                echo " \n";
                echo $joueur->getPseudo() . " : \n";
                echo "Point de vie actuel : " . $joueur->getLifePoint() . "\n";
                echo "Le monstre attaque le monstre de " . $monstre->getStrenghPoint() . "\n";
                $monstre->attack($joueur) . "\n";
                echo "Point de vie actuel : " . $joueur->getLifePoint() . "\n";
            }
        }
        // cree un nouveau monstre si le monstre meurt

        if ($monstre->getLifePoint() < 0) {
            $monstre = new Monster();
            echo "Vous avec tuer un monstre !\n";
            $joueur->setScore($joueur->getScore() + $compteur);
            echo "votre score est de : " . $joueur->getScore() . "\n";
            $compteur = $monstre->compteur() ;
            
        }
    }
};
// affiche le score a la fin de la partie
echo "Vous avez finit la parti votre score est de : " . $joueur->getScore() . "\n";
