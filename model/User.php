<?php 

include_once 'Model.php';
class User extends Model
{

	public function aksesUserAdmin()
	{
		$query = $this->db->prepare("SELECT * FROM admin");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}


	public function aksesUser()
	{
		$query = $this->db->prepare("SELECT * FROM user");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

}

 ?>