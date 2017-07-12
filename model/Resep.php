<?php 

include_once 'Model.php';
class Resep extends Model
{
	public function aksesListResep()
	{
		$query = $this->db->prepare("SELECT * FROM resep");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}


}

 ?>