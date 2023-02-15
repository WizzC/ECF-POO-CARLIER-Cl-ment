<?php
require_once "AbstractCharacter.class.php";
class Monster extends Character{
    // construc
    public function __construct()
    {
        $this->lifePoint = rand(20,100);
        $this->strenghPoint = rand(5,10);
    }
// fonction attack pour diminuer les pv
    public function attack($adv)
    {
        return $adv->setLifePoint($adv->getLifePoint() - $this->strenghPoint);
    }
    public function compteur(){
        if ($this->getlifePoint()< 61){
            $compteur = 1;
            return $compteur;
        }
        else{
            $compteur = 2;
            return $compteur;
        }
    }
}
?>
