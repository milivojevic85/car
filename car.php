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
	public $comp;
	public $color = "beige";
	public $hasSunRoof = true;
	
	public function hello() {
		return "Beep I am a <i>".$this->comp."</i>, and I am <i>".$this->color."</i>.<br>";
	}
}

$bmw = new Car();
$mercedes = new Car();

$mercedes->comp = "Mercedes Benz";
$mercedes->color = "green";

echo $mercedes->hello(); // Beep I am a Mercedes Benz, and I am green.

?>
</body>
</html>