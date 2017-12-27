<?php

use App\Components\Math;

require __DIR__ . '/autoload.php';

//echo \App\Components\Math::sum(2,3);

assert( 0 === Math::sum(0,0));
assert( 1 === Math::sum(1,0));
assert( 1 === Math::sum(0,1));
assert( 2 === Math::sum(1,1));