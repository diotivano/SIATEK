<?php 

require_once 'ViewLogin.php';
/**
* 
*/
class LoginUI extends ViewLogin
{
	
	public function aksesFormLogin()
	{
		include_once 'pages/login.php';
		$this->end();
	}
}



 ?>