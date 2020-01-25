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
	protected $scores = 0;
	protected $numberOfArticles = 0;
	
	// The abstract and concrete methods
	public function setNumberOfArticles($int) {
		$this->numberOfArticles = $int;
	}
	public function getNumberOfArticles() {
		return $this->numberOfArticles;
	}
	abstract public function calcScores();
}

class Author extends User
{
	public function calcScores(){
		return $this->scores = $this->numberOfArticles * 10 + 20;
	}
}

class Editor extends User
{
	public function calcScores(){
		return $this->scores = $this->numberOfArticles * 6 + 15;
	}
}

$author1 = new Author();
$author1->setNumberOfArticles(8);
echo $author1->calcScores()."<br>"; // 100

$editor1 = new Editor();
$editor1->setNumberOfArticles(15);
echo $editor1->calcScores()."<br>"; // 170
?>
</body>
</html>