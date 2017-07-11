<?php 

require_once 'ViewBerandaAdmin.php';
/**
* 
*/
class BerandaAdmin extends ViewBerandaAdmin
{
	
	public function aksesBerandaAdmin()
	{
		include_once 'pages/berandaadmin.php';
		$this->end();
	}
}



 ?>