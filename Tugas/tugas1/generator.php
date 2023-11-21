<?php

function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        echo ($i % 3 == 0 && $i % 5 == 0 ? "HelloWorld" : ($i % 3 == 0 ? "Hello" : ($i % 5 == 0 ? "World" : $i))) . "\n";
    }
}

generator(15);
