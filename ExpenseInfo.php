<?php include 'Expense.php';
class ExpenseInfo extends Expense
{
	private $expenseInfo = array();
	
	public function __construct($title,$money,$category,$time,$location,$comment)
	{
		parent::__construct($title,$money);
		$this->expenseInfo['category'] = $category;
		$this->expenseInfo['time'] = $time;
		$this->expenseInfo['location'] = $location;
		$this->expenseInfo['comment'] = $comment;
	}
	
	public function setCategory($category)
	{
		$this->expenseInfo['category'] = $category;
	}
	
	public function getCategory()
	{
		return $this->expenseInfo['category'];
	}
	
	public function setTime($time)
	{
		$this->expenseInfo['time'] = $time;
	}
	
	public function getTime()
	{
		return $this->expenseInfo['time'];
	}
	
	public function setLocation($location)
	{
		$this->expenseInfo['location'] = $location;
	}
	
	public function getLocation()
	{
		return $this->expenseInfo['location'];
	}
	
	public function setComment($comment)
	{
		$this->expenseInfo['comment'] = $comment;
	}
	
	public function getComment()
	{
		return $this->expenseInfo['comment'];
	}
	
	public function addExpense()
	{
		$con = $this->connect();
		$table = "et_expense";
		$query = "insert into $table values('".$expenseInfo['title']."', '$expenseInfo['money']', '".$expenseInfo['location']."'), '".$expenseInfo['time']."', '$expenseInfo['category']', '".$expenseInfo['comment']."');";
		mysqli_query($con,$query);
	}
}
?>