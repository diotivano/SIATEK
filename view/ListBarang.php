<?php 

require_once 'ViewAdmin.php';
/**
* 
*/
class ListBarang extends ViewAdmin
{
	
	public function aksesListBarang()
	{
		include_once 'pages/listbarang.php';
		$this->end();
	}
}



 ?>