<?php

namespace Anime;

class Teacher extends JujutsuUser
{
    use Greet;

    private $subject;

    public function __construct($name, $age, $subject)
    {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function summonCursedSpirit()
    {
        return $this->greet() . "I am a teacher named $this->name, $this->age years old, and I teach the subject of $this->subject.";
    }
}
