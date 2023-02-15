<?php
require_once "AbstractCharacter.class.php";
// creation class Player enfant de la class Character
class Player extends Character{
    private $score;
    private $pseudo;
// construt
    public function __construct()
    {
        $this->score=0;
        $this->pseudo = readline("Entrez un pseudo : ");
        $this->strenghPoint = 20;
        $this->lifePoint = 100;
    }
// getter
    public function getScore(){return $this->score;}
    public function getPseudo(){return $this->pseudo;}
// setter
    public function setScore($score){$this->score = $score;}
    public function setPseudo($pseudo){$this->pseudo = $pseudo;}

// fonction attack pour diminuer les pv
    public function attack($adv)
    {
        return $adv->setLifePoint($adv->getLifePoint() - $this->strenghPoint);
    }
    // demande ou il veut aller 
    public function move(){
        echo " Saisir 0 pour quitter \n Saisir 1 pour aller au Nord \n Saisir 2 pour aller au Sud \n Saisir 3 pour aller a l'Est \n Saisir 4 pour aller a l'Ouest \n";
        $dep=readline();
        echo "Votre choix est : " . $dep . "\n";
        return $dep ;
        
    }
    // demande si il veut jouer avec le bandit
    public function play(){
         $rep = readline("Voulez vous jouer avec le bandit manchot pour gagner des pv ?");
         return $rep;
    }
}

?>