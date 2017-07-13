<?php 

include_once 'Model.php';
class Barang extends Model
{
	public $nama_barang;
	public $kode_barang;
	public $stok;
	public $harga;
	public $jenis;

	public function aksesListBarang()
	{
		$query = $this->db->prepare("SELECT * FROM barang");
    		$query->execute();
    		$data = $query->fetchAll();

    		return $data;
	}

	public function inputBarang($nama_barang,$kode_barang,$stok,$harga,$jenis)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO barang(nama_barang,kode_barang,stok,harga,jenis) VALUES(:nama_barang, :kode_barang, :stok, :harga, :jenis)");
		   $stmt->bindparam(":nama_barang",$nama_barang);
		   $stmt->bindparam(":kode_barang",$kode_barang);
		   $stmt->bindparam(":stok",$stok);
		   $stmt->bindparam(":harga",$harga);
		   $stmt->bindparam(":jenis",$jenis);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

	public function editBarang($nama_barang,$kode_barang,$stok,$harga,$jenis)
	{
			/*try {
			$stmt = $this->db->prepare("UPDATE barang SET nama_barang=:nama_barang, kode_barang=:kode_barang, stok=:stok, harga=:harga, jenis=:jenis");
		   $stmt->bindparam(":nama_barang",$nama_barang);
		   $stmt->bindparam(":kode_barang",$kode_barang);
		   $stmt->bindparam(":stok",$stok);
		   $stmt->bindparam(":harga",$harga);
		   $stmt->bindparam(":jenis",$jenis);
		   $stmt->execute();
			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); */
		}
	}
}

 ?>