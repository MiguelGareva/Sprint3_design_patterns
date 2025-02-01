<?php 
declare(strict_types=1);
require_once "Cartera.php";
require_once "Llaves.php";
require_once "Smartphone.php";

class Persona{
    private string $nombre;
    private Cartera $cartera;
    private Llaves $llaves;
    private Smartphone $smartphone;

    public function __construct(string $nombre){
        $this->nombre = $nombre;
    }

    public function salir(){
        $this->cartera->llevar();
        $this->llaves->llevar();
        $this->smartphone->llevar();
    }

}
?>