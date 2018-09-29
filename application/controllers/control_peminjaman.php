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
	function pinjam()
		{

			
			if($this->session->userdata('akses'))
			{
				$this->load->model('model_peminjaman');
				$where = $this->session->userdata('nim');
				$data = $this->model_peminjaman->GetWhere('kelas',$where);
				$data = array('data' => $data );	
				$this->load->view('pilihruang',$data);
					
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

	function gedung()
		{
			
			if($this->session->userdata('akses'))
			{
				$this->load->model('model_operator');
				$username=$this->session->userdata('username');
				$where=array(
					'nim'=>$username				
				);
				$cek=$this->model_operator->login('kelas',$where);
				if( $cek->num_rows() > 0 )
				{
					$data = $cek->row_array();	
					
					$this->session->set_userdata('kelas', $data['kelas']);
					$this->session->set_userdata('hari', $data['hari']);
					$this->session->set_userdata('jam', $data['jam']);
					$this->load->view('gedung');
					
				}
			}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}
	function h3()
		{
			
			if($this->session->userdata('akses'))
			{
					$this->load->model('model_peminjaman');
					$data = $this->model_peminjaman->GetMahasiswa('jadwal');
					$data = array('data' => $data );	
					$this->load->view('ruang/h3',$data);
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

	function h4()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->model('model_peminjaman');
					$data = $this->model_peminjaman->GetMahasiswa('jadwal');
					$data = array('data' => $data );	
					$this->load->view('ruang/h4',$data);
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

	function h5()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->model('model_peminjaman');
					$data = $this->model_peminjaman->GetMahasiswa('jadwal');
					$data = array('data' => $data );	
					$this->load->view('ruang/h5',$data);
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
		}

	function h6()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->model('model_peminjaman');
					$data = $this->model_peminjaman->GetMahasiswa('jadwal');
					$data = array('data' => $data );	
					$this->load->view('ruang/h6',$data);
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}	

	function h7()
		{
			
			if($this->session->userdata('akses'))
			{
			
					$this->load->model('model_peminjaman');
					$data = $this->model_peminjaman->GetMahasiswa('jadwal');
					$data = array('data' => $data );	
					$this->load->view('ruang/h7',$data);
					
				}
				else{
					
					$this->load->view('helloworld/index');
				}
				
			}

		function proses_kelas(){
		$this->load->library('form_validation');
		$this->load->model('model_peminjaman');
    	$data = array(
        'nim' => $this->input->post('nim'),
        'hari' => $this->input->post('hari'),
        'jam' => $this->input->post('jam'),
        'keperluan' => $this->input->post('keperluan')
        );
    	$data = $this->model_peminjaman->Insert('kelas', $data);
    		redirect(base_url('index.php/control_peminjaman/gedung'));
    	
		}

	function pilih($ruang)
	{
	    $nim = $this->session->userdata('username');
	    $data = array(
	        'kelas' => $ruang
	     );
	    $where = array(
	        'nim' => $nim,
	    );
	    $this->load->model('model_peminjaman');
	    $res = $this->model_peminjaman->Update('kelas', $data, $where);
	    if ($res>0) {
	        redirect(base_url('index.php/control_peminjaman/pinjam'));
	    }
	}

	
}

?>