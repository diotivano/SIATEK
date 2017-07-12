<?php 

require_once 'View.php';
include 'model/Barang.php';
/**
* 
*/
class BerandaAdmin extends ViewAdmin
{
	
	public function aksesBerandaAdmin()
	{
		include_once 'pages/berandaadmin.php';
		$this->end();
	}
}

class ListBarang extends ViewAdmin
{
	
	public function tampilListBarang()
	{
		include_once 'model/Barang.php';

		$bar = new Barang();

		$list_barang = $bar->aksesListBarang();

		include_once 'pages/listbarang.php';
		$this->end();
	}
}


class ListResep extends ViewAdmin
{
	
	public function aksesListResep()
	{
		include 'pages/listresep.php';
		$this->end();
	}
}

 ?>