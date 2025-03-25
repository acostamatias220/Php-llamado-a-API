<?php
class superHero{
    

    public function __construct(
        public $name,
        public $powers,
        public $planet){

    }

    public function attack(){
        return "$this->name esta atacando";
    }

    public function description(){
        return "$this->name es de $this->planet y tiene los siguientes poderes: $this->powers";
    }
}

$hero = new superHero("Pepe", "Explotar, hacer asados", "Argentina"); 
echo $hero->description();
?>