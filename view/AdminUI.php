<?php 

require_once 'View.php';
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
		$barang = new Barang();

		$list_resep = $res->aksesListResep();
		$databarang = $barang->aksesListBarang();

		include_once 'pages/listresep.php';
		$this->end();
	}

}

 ?>