<?php
class User_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('m_login');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->m_login->login($username, $password);
		if ($cek) {
			$nama_user = $cek->nama_user;
			$username = $cek->username;

			$this->ci->session->set_userdata( 'nama_user', $nama_user );
			$this->ci->session->set_userdata( 'username', $username );
			redirect('home');
		}else{
			$this->ci->session->set_flashdata('pesan', 'Username atau Password salah');
			redirect('login');
		}
	}

	public function cek_login()
	{
		if ($this->ci->session->userdata('username') =="") {
			$this->ci->session->set_flashdata('pesan', 'Anda belum login, Silahkan login dulu!!!');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->ci->session->set_userdata( 'nama_user');
		$this->ci->session->set_userdata( 'username');
		$this->ci->session->set_flashdata('pesan', 'Anda berhasil logout');
			redirect('login');
	}
}

/* End of file LibraryName.php */
