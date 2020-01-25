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
		$this->model = $model;
	}
	public function getModel() {
		return $this->model;
	}
}

$mercedes = new Car();
$mercedes->setModel("Mercedes");
echo "The car model is ".$mercedes->getModel()."<br>"; // The car model is Mercedes


?>
</body>
</html>