<?php

include 'src/TypeHint.php';
use Gem\Components\Security\TypeHint;
TypeHint::setErrorHandler();

function test(string $a)
{
    echo $a;
}

test('Hello World');