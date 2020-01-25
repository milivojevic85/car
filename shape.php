<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shape</title>
</head>
<body>
<?php 
interface Shape 
{
	public function calcArea();
}

class Circle implements Shape
{
	private $radius;
	public function __construct($radius) {
		$this->radius = $radius;
	}
	
	// The method calcArea calculates the area of circles
	public function calcArea() {
		return $this->radius * $this->radius * pi();
	}
}

class Rectangle implements Shape
{
	private $width;
	private $height;
	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}
	
	// The method calcArea calculates the area of rectangles
	public function calcArea() {
		return $this->width * $this->height;
	}
}

$circ = new Circle(3);
$rect = new Rectangle(3, 4);

echo $circ->calcArea()."<br>"; // 28.274333882308
echo $rect->calcArea()."<br>"; // 12
?>
</body>
</html>