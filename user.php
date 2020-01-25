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
	protected $username;
	
	public function setUsername($username) {
		$this->username = $username;
	}
}

class Admin extends User
{
	public function expressYourRole() {
		return __CLASS__."<br>";
	}
	public function sayHello() {
		return "Hello admin, ".$this->username."<br>";
	}
}

$admin1 = new Admin();
$admin1->setUsername("Balthazar");
echo $admin1->expressYourRole(); // Admin
echo $admin1->sayHello(); // Hello admin, Balthazar

?>
</body>
</html>