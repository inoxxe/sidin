<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');
class Helloword extends CI_Controller{

	function construct(){
		parent::__construct();
		$this->load->model('model_operator');
	}

	public function index(){
		$this->load->view('depan');
	}

	public function formlogin(){
		$this->load->view('formlogin');
	}
	public function loginadmin(){
		$this->load->view('loginadmin');
	}
	public function formregister(){
		$this->load->view('formregister');
	}
	
	public function daftar_mahasiswa(){
	$data=$this->load->model('model_operator');
	$data=$this->model_operator->GetMahasiswa('register');
	$data=array('data'=>$data);
	$this->load->view('daftar_mahasiswa',$data);
	}
	
	function prosespesan(){
		$this->load->model('model_operator');
		$data = array(
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'isi' => $this->input->post('isi')
        );
        $data = $this->model_operator->Insert('pesan',$data);
        redirect('helloword/index','refresh');        

	}

	public function login_adm()
	{
		$this->load->model('model_operator');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'nim'=>$username,
			'password'=>md5($password)
		);
		$cek=$this->model_operator->login('register',$where);
		if( $cek->num_rows() > 0 )
		{
			$data = $cek->row_array();	
			$this->session->set_userdata('login', TRUE);
			if($data['level'] === 'Mahasiswa' )
			{

				$this->session->set_userdata('akses', 'Mahasiswa');
				$this->session->set_userdata('username', $data['nim']);
				$this->session->set_userdata('nama', $data['nama']);
				$this->session->set_userdata('status', $data['status']);
				redirect(base_url('index.php/control_peminjaman/kelas'));
			}
			
			if($data['level'] === 'Admin' )
			{
				$this->session->set_userdata('akses', 'Admin');
				$this->session->set_userdata('username', $data['nim']);
				$this->session->set_userdata('nama', $data['nama']);
				redirect(base_url('index.php/admin/index'));
			}
			
		}else{
			
			redirect(base_url('index.php/helloword/loginadmin'));
			echo '<Script>alert ("Gagal Login");</Script>';
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/helloword/index'));
	}
	
	public function prosesregister()
	{
		$this->load->model('model_operator');
		$data = array(
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'password' => md5($this->input->post('password')),
        'jns_klmn' => $this->input->post('jns_klmn'),
        'lahir' => $this->input->post('lahir'),
        'alamat' => $this->input->post('alamat'),
        'jurusan' => $this->input->post('jurusan'),
        'orangtua' => $this->input->post('orangtua'),
        'level' => $this->input->post('level')
         );

		$data = $this->model_operator->Insert('register', $data);
		
    	redirect(base_url('index.php/helloword/formregister'));
	}

	public function mahasiswa()
	{
		$this->load->view('mahasiswa');
	}
	public function delete($id)
	{
	    $id = array('id' => $id);
	    $this->load->model('model_operator');
	    $this->model_operator->Delete('register', $id);
	    redirect('helloword/daftar_mahasiswa');
	}

	public function editmhs($id)
	{
		$this->load->model('model_operator');
	    $mhs = $this->model_operator->GetWhere('register', array('id' => $id));
	    $data = array(
	    'id' => $mhs[0]['id'],
        'nim' => $mhs[0]['nim'],
        'nama' => $mhs[0]['nama'],
        'jns_klmn' => $mhs[0]['jns_klmn'],
        'lahir' => $mhs[0]['lahir'],
        'alamat' => $mhs[0]['alamat'],
        'jurusan' => $mhs[0]['jurusan'],
        'orangtua' => $mhs[0]['orangtua'],
        );
    	$this->load->view('edit', $data);  
	}
	
	public function prosesedit()
	{
		$id = $_POST['id'];
	    $nim = $_POST['nim'];
	    $nama = $_POST['nama'];
	    $jns_klmn = $_POST['jns_klmn'];
	    $lahir = $_POST['lahir'];
	    $alamat = $_POST['alamat'];
	    $jurusan = $_POST['jurusan'];
	    $orangtua = $_POST['orangtua'];

	    $data = array(
	    'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'jns_klmn' => $this->input->post('jns_klmn'),
        'lahir' => $this->input->post('lahir'),
        'alamat' => $this->input->post('alamat'),
        'jurusan' => $this->input->post('jurusan'),
        'orangtua' => $this->input->post('orangtua'),
      
	     );
	    $where = array(
	        'id' => $id,
	    );
	    $this->load->model('model_operator');
	    $res = $this->model_operator->Update('register', $data, $where);
	    if ($res>0) {
	        redirect('helloword/daftar_mahasiswa','refresh');
	    }
	}

}