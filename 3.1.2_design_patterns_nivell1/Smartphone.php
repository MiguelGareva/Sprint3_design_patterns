<?php 
declare(strict_types=1);
require_once "ObjetosInterface.php";

class SmartPhone implements Objetos{
    public function llevar(){
        echo "Llevo el móvil." . PHP_EOL;
    }
}

?>