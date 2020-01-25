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
	private $model;
	
	// The constructor
	public function __construct($model) {
		$this->model = $model;
	}
	public function getCarModel() {
		return $this->model;
	}
}

// We pass the value of the variable once we create the object
$car1 = new Car("Mercedes");
echo "The car model is: ".$car1->getCarModel()."<br>"; // The car model is: Mercedes

?>
</body>
</html>