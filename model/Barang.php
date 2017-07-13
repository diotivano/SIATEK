<?php 

include_once 'Model.php';
class Barang extends Model
{

	public function aksesListBarang()
	{
		$query = $this->db->prepare("SELECT * FROM barang");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

}

 ?>