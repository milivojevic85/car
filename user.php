<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User</title>
</head>
<body>
<?php 
class User
{
	public $firstName;
	public $lastName;
	
	public function sayHello() {
		return "Hello, ".$this->firstName." ".$this->lastName."<br>";
	}
	
	public function register() {
		echo $this->firstName." ".$this->lastName." registered.";
		return $this;
	}
	public function email() {
		echo " emailed.<br>";
	}
}

$user1 = new User();
$user2 = new User();

$user1->firstName = "John";
$user1->lastName = "Doe";

$user2->firstName = "Jane";
$user2->lastName = "Roe";

$user2->register()->email(); // Jane Roe registered. emailed.
?>
</body>
</html>