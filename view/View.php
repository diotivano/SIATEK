	<?php 

/**
* 
*/
class ViewLogin
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/headerlogin.php';
		// include_once 'template/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/footerlogin.php';
	}
	
}

class ViewAdmin
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/admin/header.php';
		include_once 'template/admin/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/admin/footer.php';
	}
	
}


 ?>
 
 