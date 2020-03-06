<?php

require './vendor/autoload.php';

use App\Math;

use Tests\MathTest;

$testadd = new Math(4,5);

echo $testadd->add();

$testunit = new MathTest();


