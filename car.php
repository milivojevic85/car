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
	// The private access modifier denies access to the method from outside the class’s scope
	private $model;
	
	// The public access modifier allows the access to the method from outside the class
	public function setModel($model) {
		// Validate that only certain car models are assigned to the $model property
		$allowedModels = array("Mercedes", "BMW", "Audi", "Nissan", "Toyota");
		if(in_array($model, $allowedModels)) {
			$this->model = $model;
		} else {
			$this->model = "not selected";
		}
	}
	public function getModel() {
		return $this->model;
	}
}

$mercedes = new Car();
$mercedes->setModel("Audi");
echo "The car model is ".$mercedes->getModel()."<br>"; // The car model is Audi

?>
</body>
</html>