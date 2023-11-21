<?php

include "Classes/Sorcerer.php";
include "Classes/Teacher.php";

use Anime\Sorcerer;
use Anime\Teacher;

$sorcerer = new Sorcerer("Toji Fushiguro", 17, "Superhuman Strength");
echo $sorcerer->summonCursedSpirit() . PHP_EOL;

$teacher = new Teacher("Satoru Gojo", 28, "Jujutsu Sorcery");
echo $teacher->summonCursedSpirit() . PHP_EOL;
