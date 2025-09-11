<?php
/*osztály: objektum
konstruktor/desturktor
-Tulajdonságok (public private,protected)
-öröklődés(extends)
-Traits( fgv-ek, amiket különböző osztályból szeretnék elérni)
*/


//Készits Car oszályt , márka , típus , szyn tulajdonsággal és Konstruktor is legyen benne

class Car {
    public $brand;
    public $type;
    public $color;

    public function __construct($brand, $type, $color) {
        $this->brand = $brand;
        $this->type = $type;
        $this->color = $color;
    }

    public function info(){
        echo "Márka: {$this->brand}, Típus: {$this->type}, Szín: {$this->color}";
    }
}
    $car = new Car("Toyota", "Corolla", "Piros");
    $car->info();


?>