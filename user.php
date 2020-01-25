<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User</title>
</head>
<body>
<?php 
interface Author
{
	public function setAuthorPrivileges($array);
	public function getAuthorPrivileges();
}

interface Editor
{
	public function setEditorPrivileges($array);
	public function getEditorPrivileges();
}

class User
{
	protected $username;
	
	public function setUsername($name) {
		$this->username = $name;
	}
	
	public function getUsername() {
		return $this->username;
	}
}

class AuthorEditor extends User implements Author, Editor
{
	private $authorPrivilegesArray = array();
	private $editorPrivilegesArray = array();
	public function setAuthorPrivileges($array) {
		$this->authorPrivilegesArray = $array;
	}
	public function getAuthorPrivileges() {
		return $this->authorPrivilegesArray;
	}
	public function setEditorPrivileges($array) {
		$this->editorPrivilegesArray = $array;
	}
	public function getEditorPrivileges() {
		return $this->editorPrivilegesArray;
	}
}

$user1 = new AuthorEditor();

$user1->setUsername("Balthazar");
$userName = $user1->getUsername();

$user1->setAuthorPrivileges(array("write text", "add punctuation"));
$user1->setEditorPrivileges(array("edit text", "edit punctuation"));
$userPrivileges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());
echo $userName." has the following privileges: ";
foreach ($userPrivileges as $privilege) {
	echo " {$privilege}, ";
}
echo ".";
// Balthazar has the following privileges: write text, add punctuation, edit text, edit punctuation,.
?>
</body>
</html>