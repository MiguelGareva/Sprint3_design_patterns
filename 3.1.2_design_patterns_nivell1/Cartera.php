<?php 
declare(strict_types=1);
require_once "ObjetosInterface.php";
class Cartera implements Objetos{
    public function llevar(){
        echo "Llevo la cartera." . PHP_EOL;
    }
}

?>