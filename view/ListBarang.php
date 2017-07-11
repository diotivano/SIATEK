<?php 

require_once 'ViewListBarang.php';
/**
* 
*/
class ListBarang extends ViewListBarang
{
	
	public function aksesListBarang()
	{
		include_once 'pages/listbarang.php';
		$this->end();
	}
}



 ?>