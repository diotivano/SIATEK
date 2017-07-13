<?php 

require_once 'View.php';
include 'model/User.php';
include 'model/Barang.php';
include 'model/Resep.php';

/**
* 
*/
class BerandaAdmin extends ViewAdmin
{
	
	public function tampilBerandaAdmin()
	{
		include_once 'model/User.php';

		$adm = new User();

		$user_admin = $adm->aksesUserAdmin();

		include_once 'pages/berandaadmin.php';
		$this->end();
	}

}

class ListBarang extends ViewAdmin
{
	
	public function tampilListBarang()
	{
		include_once 'model/Barang.php';

		$bar = new Barang();

		$list_barang = $bar->aksesListBarang();

		include_once 'pages/listbarang.php';
		$this->end();
	}
}


class ListResep extends ViewAdmin
{
	
	public function tampilListResep()
	{
		include_once 'model/Resep.php';

		$res = new Resep();

		$list_resep = $res->aksesListResep();

		include_once 'pages/listresep.php';
		$this->end();
	}

}

class ListUser extends ViewAdmin
{
	
	public function tampilListUser()
	{
		include_once 'model/User.php';

		$lu = new User();

		$list_user = $lu->aksesUser();

		include_once 'pages/user.php';
		$this->end();
	}

}

 ?>