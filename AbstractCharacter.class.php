<?php
// class Mere abstraite 
abstract class Character{
// propriete commun au class fille
    protected $lifePoint;
    protected $strenghPoint;
// construct 
    public function __construct($lifePoint,$strenghPoint)
    {
        $this->lifePoint = $lifePoint;
        $this->strenghPoint = $strenghPoint;
    }
// getter 
    public function getLifePoint(){return $this->lifePoint;}
    public function getStrenghPoint(){return $this->strenghPoint;}

// setter
    public function setLifePoint($lifePoint){$this->lifePoint=$lifePoint;}
    public function setStrenghPoint($strenghPoint){$this->strenghPoint = $strenghPoint;}

// function attack
    public function attack($adv){}
    
}
?>