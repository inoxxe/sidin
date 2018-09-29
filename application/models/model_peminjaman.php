<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class MOdel_peminjaman extends CI_Model
{
  public function GetMahasiswa($table){
        $data=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $data->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }
 
    public function Insert($table,$data){
        $data = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $data; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function Update($table, $data, $where){
        $data = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $data;
    }
 
    public function Delete($table, $where){
        $data = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $data;
    }

    public function GetWhere($table, $where)
    {
      $res = $this->db->get_where($table, $where);
      return $res->result_array();
    }

    
}

	
?>