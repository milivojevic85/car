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
	public $tank;
	
	// Add gallons of fuel to the tank when we fill it
	public function fill($gallons) {
		$this->tank += $gallons;
		return $this;
	}
	
	// Subtract gallons of fuel from the tank as we ride the car
	public function ride($miles) {
		$gallons = $miles / 50;
		$this->tank -= $gallons;
		return $this;
	}
}

// Create an object from the Car class
$bmw = new Car();

// Add 10 gallons of fuel, then ride 40 miles, and get the number of gallons in the tank
$tank = $bmw->fill(10)->ride(40)->tank;

// Print the results to the screen
echo "The number of gallons left in the tank: ".$tank."<br>"; // The number of gallons left in the tank: 9.2

?>
</body>
</html>