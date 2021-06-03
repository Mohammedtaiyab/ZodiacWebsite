<?php
class Home
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

	public function webitepage($page)
	{
		$result = $this->db->con->query("SELECT * FROM webitepage Where Page='".$page."'");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}
	public function aboutus()
	{
		$result = $this->db->con->query("SELECT * FROM webitepage Where Page like '%About%'");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}

	public function updateheader($topic, $description, $paragraph, $buttontitle, $buttonlink, $image, $page)
	{
		$result = $this->db->con->query("UPDATE webitepage SET Topic='" . $topic . "',Description='" . $description . "',Paragraph='" . $paragraph . "',Button_Title='" . $buttontitle . "',Buttonlink='" . $buttonlink ."',Image='" . $image . "' WHERE ID='" . $page . "'");
		return $result;
	}
	public function getdatabyid($id)
	{
		$result = $this->db->con->query("SELECT * FROM webitepage Where ID='" . $id . "'");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}

	public function contactsend($name, $subject, $email, $phone,  $message)
	{
		$result = $this->db->con->query("INSERT INTO contact (Name,Subject,Email,Phone,Message) VALUES('" . $name . "','" . $subject . "','" . $email ."','" . $phone . "','" . $message . "')");

		return $result;
	}

	public function getcontact()
	{
		$result = $this->db->con->query("SELECT * FROM contact");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}
	public function getcontactbyid($id)
	{
		$result = $this->db->con->query("SELECT * FROM contact WHERE ID=".$id);
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}
	public function login($username, $password)
	{
		$result = $this->db->con->query("SELECT * FROM admin WHERE Username='" . $username . "'AND Password='". $password."'");
		if (mysqli_num_rows($result) == 0) {
			return false;
		} else {
			return true;
		}
	}

}


?>