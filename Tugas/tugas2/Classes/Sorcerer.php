<?php

namespace Anime;

include "Classes/JujutsuUser.php";
include "Traits/Greet.php";

class Sorcerer extends JujutsuUser
{
    use Greet;

    private $cursedTechnique;

    public function __construct($name, $age, $cursedTechnique)
    {
        parent::__construct($name, $age);
        $this->cursedTechnique = $cursedTechnique;
    }

    public function summonCursedSpirit()
    {
        return $this->greet() . "I am a sorcerer named $this->name, $this->age years old, and my cursed technique is $this->cursedTechnique.";
    }
}
