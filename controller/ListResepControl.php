<?php 
/**
* 
*/
include_once 'Controller.php';

class ListResepControl extends Controller
{
	
	public function getListResep()
	{
		include_once 'model/Resep.php';
		$resep  = new Resep();

		return true;
	}

	public function setListResep()
	{
		include_once 'model/Resep.php';

		return true;
	}