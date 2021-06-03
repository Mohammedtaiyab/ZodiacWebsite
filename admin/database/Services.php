<?php
class Services
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
	public function services($type)
	{
		$result = $this->db->con->query("SELECT * FROM services Where Type='" . $type . "'");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}

	public function services1($type)
	{
		$result = $this->db->con->query("SELECT * FROM services Where Type='" . $type . "' AND Status=1");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}

	public function getdatabyid($id)
	{
		$result = $this->db->con->query("SELECT * FROM services Where ID='" . $id . "'");
		$resultArray = array();
		while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
			# code...
		}
		return $resultArray;
	}
	public function changestatus($id, $status)
	{
		$result = $this->db->con->query("UPDATE services SET Status='" . $status . "' WHERE ID='" . $id . "'");
		return $result;
	}
	public function updateservice($title, $description, $paragraph, $buttontitle, $buttonlink, $image, $page)
	{
		$result = $this->db->con->query("UPDATE services SET Title='" . $title . "',Description='" . $description . "',Paragraph='" . $paragraph . "',Button_Title='" . $buttontitle . "',buttonlink='" . $buttonlink . "',Image='" . $image . "' WHERE ID='" . $page . "'");
	
	}
	public function addservice($title, $description, $paragraph, $buttontitle, $buttonlink, $image, $page)
	{
		$result = $this->db->con->query("INSERT INTO services(Type, Title, Description, Paragraph, Button_Title, buttonlink, Image) VALUES  ('". $page."','" . $title . "','" . $description . "','" . $paragraph . "','" . $buttontitle . "','" . $buttonlink . "','" . $image . "')");
	}
	public function delete($id)
	{
		$result = $this->db->con->query("DELETE FROM services WHERE ID=".$id);
	}
}
