<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Car</title>
</head>
<body>
<?php 
interface Car
{
	public function setModel($name);
	public function getModel();
}

interface Vehicle
{
	public function setHasWheels($bool);
	public function getHasWheels();
}

// The class implements two interfaces
class MiniCar implements Car, Vehicle
{
	private $model;
	private $hasWheels;
	
	public function setModel($name) {
		$this->model = $name;
	}
	public function getModel() {
		return $this->model;
	}
	public function setHasWheels($bool) {
		$this->hasWheels = $bool;
	}
	public function getHasWheels() {
		return ($this->hasWheels)? "has wheels" : "has no wheels";
	}
}

$miniCar1 = new MiniCar();
$miniCar1->setModel("Mini Cooper");
$miniCar1->setHasWheels(true);
echo $miniCar1->getModel()." ".$miniCar1->getHasWheels(); // Mini Cooper has wheels
?>
</body>
</html>