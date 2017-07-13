<?php 

require_once 'View.php';
/**
* 
*/
class BarangUI extends ViewKaryawan
{
	
	public function inputBarang()
	{
		include_once 'controller/BarangControl.php';

		$bac = new BarangControl();

		$list_barang = $bac->inputBarang();

		include_once 'pages/inputbarang.php';
		$this->end();
		
	}
}

class ListBarang extends ViewKaryawan
{
	
	public function tampilListBarang()
	{
		include_once 'model/Barang.php';

		$bar = new Barang();

		$list_barang = $bar->aksesListBarang();

		include_once 'pages/listbarangkaryawan.php';
		$this->end();
	}

}

class EditBarangUI extends ViewKaryawan
{
	
	public function editBarang()
	{
	include_once 'controller/BarangControl.php';
	$bac = new BarangControl();
	$list_barang = $bac->editBarang();
	/*$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : "" ;
	$kode_barang = isset($_POST['kode_barang']) ? $_POST['kode_barang'] : "" ;
	$stok= isset($_POST['stok']) ? $_POST['stok'] : null ;
	$harga = isset($_POST['harga']) ? $_POST['harga'] : 0 ;
	$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "" ;*/
	include_once 'pages/editbarang.php';
	$this->end();
	}
}


 ?>