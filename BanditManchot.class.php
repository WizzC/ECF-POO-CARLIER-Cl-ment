<?php
// creation class Bandit Manchot
class BanditManchot{
// function pour savoir si c'est un bonus ou un malus
public function winOrLose(){
    return rand(1,2);
}
// applique les effets du bandit
public function howManyWeWinOrLose($joueur){
    $pdv=rand(1,10);
    if($this->winOrLose()==1){
         $joueur->setLifePoint($joueur->getLifePoint()+$pdv);
        echo "Vos pv son augmenter à : " . $joueur->getLifePoint() . "\n";
        return;
    }
    else {
        $joueur->setLifePoint($joueur->getLifePoint()-$pdv);
        echo "Vos pv son diminuer à : " . $joueur->getLifePoint() . "\n";
        return ;
    }
}    
}
?>