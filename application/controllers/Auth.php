<?php

class Auth extends CI_Controller
{	
	
	public Function login()
	{
		$this->form_validation->set_rules('username','Username','required',['required' => 'Username harus diisi']);
		$this->form_validation->set_rules('password','Password','required',['required' => 'Password harus diisi']);
		
		if($this->form_validation->run()== FALSE)
		{
			
			$this->load->view('auth/login');
			

			$this->load->helper('url');

		}else{
			$auth =$this->model_akun->cek_login();

			if($auth == FALSE){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				 Username atau Password salah!
			  </div>');
				redirect(base_url("auth/login"));
			}else{
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch ($auth->role_id) {
					case 1: redirect(base_url("index.php/admin/dashboard_admin"));
						break;
					case 2: redirect(base_url("index.php/dashboard"));
						break;
					default:break;
				}
				
		}
	}
}
}
