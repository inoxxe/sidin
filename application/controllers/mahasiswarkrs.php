<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Mahasiswakrs extends CI_Controller{

	public function inputkrs()
	{
		$this->load->view('danang/viewkrs');
	}
	public function GetMahasiswa($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }
 
    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }
}