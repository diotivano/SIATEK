<?php 
/**
* 
*/
include_once 'Controller.php';
class BarangControl extends Controller
{
	public function inputBarang()
	{
		include_once 'model/Barang.php';
		$mbarang = new Barang();
		$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : "" ;
		$kode_barang = isset($_POST['kode_barang']) ? $_POST['kode_barang'] : "" ;
		$stok= isset($_POST['stok']) ? $_POST['stok'] : null ;
		$harga = isset($_POST['harga']) ? $_POST['harga'] : 0 ;
		$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "" ;
		$pesan = $mbarang->inputBarang($nama_barang,$kode_barang,$stok,$harga,$jenis);
		return $pesan;

	}

	public function editBarang()
	{
		include_once 'model/Barang.php';

		/*$mbarang = new Barang();
		$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : "" ;
		$kode_barang = isset($_POST['kode_barang']) ? $_POST['kode_barang'] : "" ;
		$stok= isset($_POST['stok']) ? $_POST['stok'] : null ;
		$harga = isset($_POST['harga']) ? $_POST['harga'] : 0 ;
		$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : "" ;
		$mbarang->editBerita($nama_barang,$kode_barang,$stok,$harga,$jenis);
		return $true;*/

	}


}
 ?>