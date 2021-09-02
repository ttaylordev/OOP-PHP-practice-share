<?php 

//  there are a lot of ways to do things, and almost as many bad ways.
//  below are some bad examples followed by a good one.

class Car {

// public string $make;
// public string $model;

public function createCar($make, string $prop1, $model, string $prop2){

    return 
    $this->{$make} = $prop1 . " " . 
    $this->{$model} = $prop2;

}
}


$car_a = new Car();
$car_a->createCar('make', 'ford', 'model','fiesta');
// $car_b = new Car([$Car_b->createCar(), 'Hyundai', 'fit']);

echo "<br>";
var_dump($car_a);
echo "<br>";
echo $car_a->createCar('make', 'ford', 'model','fiesta');


// this seems like a very naive example, it's not DRY at all
// the objects made form these classes ought to be extendable, maybe a factory would be better, taking in parameters
class Truck {

public $name_truck1 = 'Chevy Silverado';
public $name_truck2 = 'Chevy Colorado';

public function truck_silverado(){
    $truck_silverado = $this->name_truck1;
    return $truck_silverado;
}

public function truck_colorado(){
    $truck_colorado = $this->name_truck2;
    return $truck_colorado;
}
}

$my_truck = new Truck;

echo "<br>";
echo $my_truck->truck_silverado();
echo "<br>";
echo $my_truck->truck_colorado();


// factory pattern, way better in my opinion, more reusable, etc.
class Automobile {

private $vehicleMake;
private $vehicleModel;

public function __construct($make, $model)
{
    $this->vehicleMake = $make;
    $this->vehicleModel = $model;
}

public function getMakeModel()
{
    return $this->vehicleMake . ' ' . $this->vehicleModel;
}
}

class AutomobileFactory {

public static function create($make, $model)

{
    return new Automobile($make, $model);
}
}

// have the factory create the Automobile object
$Porsche911 = AutomobileFactory::create('Porsche', '911');

print_r($Porsche911->getMakeModel()); // outputs "Porsche 911"