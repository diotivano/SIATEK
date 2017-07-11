<?php 

require_once 'ViewAdmin.php';
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



 ?>