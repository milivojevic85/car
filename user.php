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
	
	public function setFirstName($name) {
		$this->firstName = $name;
	}
	public function getFirstName() {
		return $this->firstName;
	}
}

$user1 = new User();
$user1->setFirstName("Joe");
echo $user1->getFirstName(); // Joe

?>
</body>
</html>