<?php 

require_once 'View.php';
/**
* 
*/
class BarangUI extends ViewKaryawan
{
	
	public function inputBarang()
	{
		include_once 'controller/BarangControl.php';

		$bac = new BarangControl();

		$list_barang = $bac->inputBarang();

		include_once 'pages/inputbarang.php';
		$this->end();
		
	}
}




 ?>