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
    echo $car ->brand;
    echo $car ->type;

//Hozz létre a MathHelper osztály amibe legyen egy statikus változó PI és egy statikus metódus square néven.

class MathHelper {
    public static $PI = 3.14;

    public static function square($number) {
        return $number * $number;
    }
}

echo MathHelper ::$PI;
echo MathHelper ::square(5);



//készyts egy eletricar osztályt ami örökli a Car osztályt és pluszba van benne egy akkumulátor kapacitás tulajdonság

class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($brand, $type, $color, $batteryCapacity) {
        parent::__construct($brand, $type, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function info() {
        parent::info();
        echo ", Akkumulátor kapacitás: {$this->batteryCapacity} kWh";
    }
}

$eCar= new ElectricCar("Tesla", "Model 3", "Fehér", 75);
$eCar->info();




?>