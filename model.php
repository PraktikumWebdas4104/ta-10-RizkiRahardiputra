<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
		 $this ->conn = mysqli_connect('localhost','root','','jurnal9');	
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from 
			$query="SELECT * FROM mahasiswa";
return $this->execute($query);
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			$query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $travelling ){
			//query update nim, nama, angkatan, fakultas, prodi
			
			$query=	"UPDATE mahasiswa SET nama= '$nama', angkatan= '$angkatan', fakultas = '$fakultas', prodi = '$prodi', film = '$film', travelling = '$travelling' WHERE nim = '$nim'";
return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query= "DELETE  FROM mahasiswa WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $travelling ){
			//query insert nim,nama, angkatan, fakultas, prodi
			
			$query="INSERT INTO mahasiswa (nim, nama, angkatan, fakultas, prodi, film, travelling) VALUES ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi', '$film', '$travelling' )";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>