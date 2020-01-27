<?php 

require './../../vendor/autoload.php';
include './../../tests/MakeMePassTest.php';

use wbs\tests\MakeMePassTest;

$objTest = new MakeMePassTest();

$objTest->test_Rules_hasBeenRead();
