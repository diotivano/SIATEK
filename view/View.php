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

class ViewApoteker
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/apoteker/header.php';
		include_once 'template/apoteker/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/apoteker/footer.php';
	}
	
}

class ViewKasir
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/kasir/header.php';
		include_once 'template/kasir/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/kasir/footer.php';
	}
	
}

class ViewKaryawan
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template/karyawan/header.php';
		include_once 'template/karyawan/sidebar.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'template/karyawan/footer.php';
	}
	
}

 ?>