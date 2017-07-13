<?php 

require_once 'View.php';
/**
* 
*/
class Penjualan extends ViewKasir
{
	
	public function tampilPenjualan()
	{

		include_once 'pages/penjualan.php';
		$this->end();
	}
}



 ?>