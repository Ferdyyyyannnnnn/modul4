<?php

namespace Anime;

abstract class JujutsuUser
{
    protected $name;
    protected $age;

    abstract public function summonCursedSpirit();

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
