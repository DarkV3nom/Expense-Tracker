<?php include 'Person.php';
class PersonInfo extends Person
{
	private $personInfo = array();
	
	public function __construct($firstName,$lastName,$gender,$email,$no)
	{
		parent::__construct($firstName,$lastName);
		$this->personInfo['gender'] = $gender;
		$this->personInfo['email'] = $email;
		$this->personInfo['no'] = $no;
	}
	
	public function setGender($gender)
	{
		$this->personInfo['gender'] = $gender;
	}
	
	public function getGender()
	{
		return $this->personInfo['gender'];
	}
	
	public function setEmail($email)
	{
		$this->personInfo['email'] = $email;
	}
	
	public function getEmail()
	{
		return $this->personInfo['email'];
	}
	
	public function setNo($no)
	{
		$this->personInfo['no'] = $no;
	}
	
	public function getNo()
	{
		return $this->personInfo['no'];
	}
}
?>