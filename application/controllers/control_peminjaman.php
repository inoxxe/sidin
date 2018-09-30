<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_peminjaman extends CI_Controller {
	
	function kelas()
		{
			
			if($this->session->userdata('akses'))
			{
				$this->load->model('model_peminjaman');
				$username = $this->session->userdata('username');
				$where=array(
					'nim'=>$username				
				);
				$data = $this->model_peminjaman->GetWhere('register',$where);
				$data = array('data' => $data );	
				$this->load->view('welcome',$data);
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
				
			}
	

	function profil(){
		if($this->session->userdata('akses'))
			{
				$this->load->model('model_peminjaman');
				$username = $this->session->userdata('username');
				$where=array(
					'nim'=>$username				
				);
				$data = $this->model_peminjaman->GetWhere('register',$where);
				$data = array('data' => $data );	
				$this->load->view('profil',$data);

			}else{
					$this->load->view('helloworld/index');

			}
	}

	

	
}

?>