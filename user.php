<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User</title>
</head>
<body>
<?php 
abstract class User
{
	protected $username;
	
	public function setUsername($name) {
		$this->username = $name;
	}
	
	public function getUsername() {
		return $this->username;
	}
	
	abstract public function stateYourRole();
}

class Admin extends User
{
	public function stateYourRole() {
		return strtolower(__CLASS__);
	}
}

class Viewer extends User
{
	public function stateYourRole() {
		return "something different";
	}
}

$admin1 = new Admin();
$admin1->setUsername("Balthazar");
echo $admin1->stateYourRole(); // admin


?>
</body>
</html>