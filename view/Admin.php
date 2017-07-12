<?php 

require_once 'View.php';
include 'model/Barang.php';
/**
* 
*/
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



 ?>