<?php 
declare(strict_types=1);

require_once "Tigger.php";

$tigger1 = Tigger::getInstance();
$tigger1->roar();
$tigger1->roar();
$tigger1->roar();
echo "Tigger ha rugido {$tigger1->getCounter()} veces <br>";

$tigger2 = Tigger::getInstance();
$tigger2->roar();
$tigger2->roar();
echo "Ahora Tigger ha rugido {$tigger1->getCounter()} veces";
?>