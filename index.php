<?php
use SOLID\srp\Bus;
use SOLID\srp\Driver;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$bus= new Bus(23,'yellow',null);
$driver= new Driver('ahmed',26);
$bus->setBusNumber(1000);
$bus->setBusColor('red');
$bus->setDiver($driver);
var_dump($bus);