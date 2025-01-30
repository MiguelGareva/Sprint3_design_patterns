<?php 
declare(strict_types=1);
class Tigger{

    private static $instance;
    private int $rugidos = 0;

    private function __construct(){
        echo "Building character..." . PHP_EOL;
    }
    public function roar():void{
        echo "Grrrr!" . PHP_EOL;
        $this->rugidos++;
    }
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Tigger;
        }
        return self::$instance;
    }
    public function getCounter():int{
        return $this->rugidos;
    }
}

?>