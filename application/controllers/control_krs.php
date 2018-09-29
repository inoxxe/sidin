<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_krs extends CI_Controller {
	
	public function tambahkrs()
	{
		$this->load->view('danang/tambahkrs');
	}

	public function ambil($kelas)
	{
		$this->load->model('Model_krs');
		$where = array('kelas' => $kelas );
		$data = $this->Model_krs->GetWhere('matakuliah', $where);
		$data = array('data' => $data);
		$this->load->view('danang/ambil', $data);
	}
	public function prosestambahkrs()
	{
		$this->load->model('Model_krs');
    	$data = array(
        'matkul' => $this->input->post('matkul'),
        'kelas' => $this->input->post('kelas'),
        'jammulai' => $this->input->post('jammulai'),
        'jamselesai' => $this->input->post('jamselesai'),
        'nama_mahasiswa' => $this->input->post('nama_mahasiswa')
        );
    $data = $this->Model_krs->Insert('mahasiswa', $data);
    redirect(base_url('index.php/control_krs/tambahkrs'),'refresh');
    } 


    public function lihatkrs()
	{
		$this->load->model('Model_krs');
		$where = array('nama_mahasiswa' => $this->session->userdata('username')  );
		$data = $this->Model_krs->GetWhere('mahasiswa', $where);
		$data = array('data' => $data );
		$this->load->view('danang/lihatkrs', $data);
	}

	public function delete_krs($id)
	{
	    $id = array('id' => $id);
	    $this->load->model('model_krs');
	    $this->model_krs->Delete('mahasiswa', $id);
	    redirect('control_krs/lihatkrs','refresh');
	}
}

?>