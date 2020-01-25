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
}

$user1 = new User();
$user2 = new User();

$user1->firstName = "John";
$user1->lastName = "Doe";

$user2->firstName = "Jane";
$user2->lastName = "Doe";

echo $user1->sayHello(); // Hello, John Doe
echo $user2->sayHello(); // Hello, Jane Doe
?>
</body>
</html>