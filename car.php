<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Car</title>
</head>
<body>
<?php 
class Car
{
	private $model = "";
	
	// The constructor
	public function __construct($model = null) {
		if($model) {
			$this->model = $model;
		}
	}
	public function getCarModel() {
		// We use the __class__ magic constant in order to get the class name
		return "The ".__CLASS__." model is: ".$this->model."<br>";
	}
}

// We create the new Car object with the value of the model
$car1 = new Car("Mercedes");
echo $car1->getCarModel(); // The Car model is: Mercedes

?>
</body>
</html>