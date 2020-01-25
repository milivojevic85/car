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
		return $this->model;
	}
}

// We create the new Car object with the value of the model
$car1 = new Car("Mercedes");
echo "The car model is: ".$car1->getCarModel()."<br>"; // The car model is:

?>
</body>
</html>