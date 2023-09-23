<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');;
        // if ($this->session->userdata('logged_in')!=true) {
        //     redirect(base_url().'admin');
        // }
	}
	public function register()
	{
		$this->load->view('admin/register');
	}

	public function login()
	{
		$this->load->view('admin/login');
	} 

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function home()
	{
		$this->load->view('admin/home');
	}

	public function siswa()
	{
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$this->load->view('admin/siswa', $data);
	}

	public function hapus_siswa($id)
	{
		$this->m_model->delete('siswa', 'id_siswa', $id);
		redirect(base_url('admin/siswa'));
	}

	public function ubah_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa','id_siswa',$id)->result();
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/ubah_siswa',$data);
	}

	public function aksi_ubah_siswa()
	{
		$data = array (
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' =>$this->input->post('kelas'),
		);
		$eksekusi=$this->m_model->ubah_data('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
		if($eksekusi)
		{
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('admin/siswa'));
		} 
		else
		{
			$this->session->set_flashdata('error', 'gagal..');
			redirect(base_url('admin/aksi_ubah_siswa/'.$this->input->post('id_siswa')));
		}
	}

	public function tambah_siswa()
	{
		$data['kelas'] = $this->m_model->get_data('kelas')->result();
		$this->load->view('admin/tambah_siswa', $data);
	}

	public function aksi_tambah_siswa()
	{
		$data = [
			'nama_siswa' => $this->input->post('nama'),
			'nisn' => $this->input->post('nisn'),
			'gender' => $this->input->post('gender'),
			'id_kelas' =>$this->input->post('kelas'),
		];

		$this->m_model->tambah_data('siswa', $data);
		redirect(base_url('admin/siswa'));
	}
/////////////////////////////////////////////////////////////

public function guru()
{
	$data['guru'] = $this->m_model->get_data('guru')->result();
	$data['mapel'] = $this->m_model->get_data('mapel')->result();
	$this->load->view('admin/guru', $data);
}

public function hapus_guru($id)
{
	$this->m_model->delete('guru', 'id_guru', $id);
	redirect(base_url('admin/guru'));
}

public function ubah_guru($id)
{
	$data['guru'] = $this->m_model->get_by_id('guru','id_guru',$id)->result();
	$this->load->view('admin/ubah_guru',$data);
}

public function aksi_ubah_guru()
{
	$data = array (
		'nama_guru' => $this->input->post('nama'),
		'nik' => $this->input->post('nik'),
		'gender' => $this->input->post('gender'),
		'id_mapel' =>$this->input->post('id_mapel'),
	);
	$eksekusi=$this->m_model->ubah_data
	('guru', $data, array('id_guru'=>$this->input->post('id_guru')));
	if($eksekusi)
	{
		$this->session->set_flashdata('sukses', 'berhasil');
		redirect(base_url('admin/guru'));
	} 
	else
	{
		$this->session->set_flashdata('error', 'gagal..');
		redirect(base_url('admin/aksi_ubah_guru/'.$this->input->post('id_guru')));
	}
}

public function tambah_guru()
{
	$data['kelas'] = $this->m_model->get_data('kelas')->result();
	$this->load->view('admin/tambah_guru', $data);
}

public function aksi_tambah_guru()
{
	$data = [
		'nama_guru' => $this->input->post('nama'),
		'nik' => $this->input->post('nik'),
		'gender' => $this->input->post('gender'),
		'id_mapel' =>$this->input->post('mapel'),
	];

	$this->m_model->tambah_data('guru', $data);
	redirect(base_url('admin/guru'));
}

public function aksi_login()
{
  $email = $this->input->post('email', true);
  $password = $this->input->post('password', true);
  $data = ['email' => $email,];
  $query = $this->m_model->getwhere('admin', $data);
  $result = $query->row_array();

  if (!empty($result) && md5($password) === $result['password']) {
	$data = [
	  'logged_in' => true,
	  'email' => $result['email'],
	  'username' => $result['username'],
	  'role' => $result['role'],
	  'id' => $result['id'],
	];
	$this->session->set_userdata($data);
	redirect(base_url('admin'));
  } else {
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	Password anda salah
	
  
	</div>');
	redirect(base_url('admin/login'));
  }
}
	

public function aksi_register()
	{
		$data = [
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		$this->m_model->tambah_data('admin', $data);
		redirect(base_url('admin/login'));
	}

	public function dashboard()
	{
		$data['siswa']=$this->m_model->get_data('siswa')->num_rows();
		$data['guru']=$this->m_model->get_data('guru')->num_rows();
		
		$this->load->view('admin/dashboard',$data);
	}
}
?>	.