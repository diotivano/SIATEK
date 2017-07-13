<?php

require_once 'View.php';
include 'model/User.php';


class BerandaApoteker extends ViewApoteker
{
	
	public function tampilBerandaApoteker()
	{
		include_once 'model/User.php';

		$apt = new User();

		$user_apoteker = $apt->aksesUserApoteker();

		include_once 'pages/berandaapoteker.php';
		$this->end();
	}

}








 ?>