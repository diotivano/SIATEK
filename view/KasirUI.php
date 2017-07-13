<?php

require_once 'View.php';
include 'model/User.php';


class BerandaKasir extends ViewKasir
{
	
	public function tampilBerandaKasir()
	{
		include_once 'model/User.php';

		$kas = new User();

		$user_kasir = $kas->aksesUserKasir();

		include_once 'pages/berandakasir.php';
		$this->end();
	}

}








 ?>