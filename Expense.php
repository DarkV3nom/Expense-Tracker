<?php include 'database.php';
class Expense
{
	private $expense = array();
	
	public function __construct($title,$money)
	{
		$this->expense['title'] = $title;
		$this->expense['money'] = $money;
	}
	
	public function setTitle($title)
	{
		$this->expense['title'] = $title;
	}
	
	public function getTitle()
	{
		return $this->expense['title'];
	}
	
	public function setMoney($money)
	{
		$this->expense['money'] = $money;
	}
	
	public function getMoney()
	{
		return $this->expense['money'];
	}
}
?>