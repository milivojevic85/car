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
	private $firstName;
	private $lastName;
	
	public function __construct($firstN, $lastN) {
		$this->firstName = $firstN;
		$this->lastName = $lastN;
	}
	public function getFullName() {
		return "The full name is: ".$this->firstName." ".$this->lastName."<br>";
	}
}

$user1 = new User("John", "Doe");
echo $user1->getFullName(); // The full name is: John Doe

?>
</body>
</html>