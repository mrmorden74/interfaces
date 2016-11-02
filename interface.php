<?php

/* 
* Ein Interface beschreibt die öffentlich zugänglichen Methoden, die eine implementieret Klasse auf jeden fall zur Verfügung stellen muss 
*/

interface iCharacter {
    public function move();
    public function getHealth();
    public function fight();
    public function getName();
    
}

/*
 * Wir verplichten uns bei de Implementierung die publich zur Verfügung zu stellen
 */
class Orc implements iCHaracter {
    private $stepSize = 10;
    private $health = 80;
    private $name = 'Ignaz';

    public function move() {
        echo "$this->name ging gerade {$this->stepSize} Schritte!<br>";
    }
    public function getHealth() {
        return $this->health;
    }
    public function fight() {
        echo "$this->name kämpft! Du stirbst!<br>";
    }
    public function getName() {
        return $this->name;
    }
}
class Dwarf implements iCHaracter {
    private $stepSize = 5;
    private $health = 80;
    const MAX_HEALTH = 100;
    private $name = 'Gimli';
    
    public function move() {
        $step = round($this->stepSize * slef::MAX_HEALTH /$this->maxHealth);
        echo "$this->name ging gerade $step Schritte!<br>";
    }
    public function getHealth() {
        return $this->health;
    }
    public function fight() {
        echo "$this->name kämpft! Du stirbst!<br>";
    }
    public function getName() {
        return $this->name;
    }
}