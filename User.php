<?php include 'PersonInfo.php';
class User extends PersonInfo
{
	private $user = array();
	
	public function __construct($firstName,$lastName,$gender,$email,$no,$ipAddress,$firstLogin,$lastActive,$status)
	{
		parent::__construct($firstName,$lastName,$gender,$email,$no);
		$this->user['ipAddress'] = $ipAddress;
		$this->user['firstLogin'] = $firstLogin;
		$this->user['lastActive'] = $lastActive;
		$this->user['status'] = $status;
	}
	
	public function setIpAddress($ipAddress)
	{
		$this->user['ipAddress'] = $ipAddress;
	}
	
	public function getIpAddress()
	{
		return $this->user['ipAddress'];
	}
	
	public function setFirstLogin($firstLogin)
	{
		$this->user['firstLogin'] = $firstLogin;
	}
	
	public function getFirstLogin()
	{
		return $this->user['firstLogin'];
	}
	
	public function setLastActive($lastActive)
	{
		$this->user['lastActive'] = $lastActive;
	}
	
	public function getLastActive()
	{
		return $this->user['LastActive'];
	}
	
	public function setStatus($status)
	{
		$this->user['status'] = $status;
	}
	
	public function isOnline()
	{
		return $this->user['status'];
	}
}
?>