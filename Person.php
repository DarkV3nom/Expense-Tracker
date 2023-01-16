<?php
class Person
{
	private $personName = array();
	
	public function __construct($firstName,$lastName)
	{
		$this->personName['firstName'] = $firstName;
		$this->personName['lastName'] = $lastName;
	}
	
	public function setFirstName($firstName)
	{
		$this->personName['firstName'] = $firstName;
	}
	
	public function getFirstName()
	{
		return $this->personName['firstName'];
	}
	
	public function setLastName($lastName)
	{
		$this->personName['lastName'] = $lastName;
	}
	
	public function getLastName()
	{
		return $this->personName['lastName'];
	}
}
?>