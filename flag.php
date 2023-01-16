<?php
if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class flag {
	private $flags = array();
	
	public function __construct($name,$value)
	{
		$this->flags['name'] = $name;
		$this->flags['value'] = $value;
	}
	
	// Create A New Flag
	public function setFlag($name,$value)
	{
		$this->flags['$name'] = $value;
	}
	
	// Ckeck Flag Value
	public function checkFlag($name)
	{
		return $this->flags['$name'];
	}
}

$f1 = new flag();

echo "Flag - db : " . f1.checkFlag("db") . "<br/>";
echo "Flag - table : " . f1.checkFlag("table");
?>