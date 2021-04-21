<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_pinjam
		$query = "SELECT * FROM tb_pinjam";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function ulang(){
		// Query mysql select data ke tb_pinjam
		$query = "SELECT * FROM tb_pinjam";

		// Mengeksekusi query
		return $this->execute($query);
	}

	
	//Menambah data
	function addData(){
		$a = $_POST["tname"]; //judul
		$b =  $_POST["tdetails"]; //peminjam
		$c = $_POST["tsubject"]; //genre
		$d = $_POST["tpriority"]; //lama
		$e = $_POST["tdate"]; //tgl_pinjam
		$f = "Belum";
		$query = "INSERT INTO tb_pinjam (judul, tgl_pinjam, peminjam, genre, lama, statusnya) VALUES ('$a', '$e', '$b', '$c', '$d', '$f')";

		//eksekusi
		return $this->execute($query);
	}

	function deleteData($id){
		$query = "DELETE FROM tb_pinjam WHERE id = $id";

		return $this->execute($query);
	}

	function selesai($id){
		$query = "UPDATE tb_pinjam SET statusnya = 'Sudah' WHERE id = $id";
		return $this->execute($query);
	}
}



?>
