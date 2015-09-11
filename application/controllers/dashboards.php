<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard');
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function admin()
	{
		if($this->session->userdata['userinfo']['user_level'] == 1)
		{
			$users = $this->dashboard->fetch_all();
			$this->load->view('admin', array('all_users' => $users));
		}
		else
		{
			redirect('/user');
		}
	}

	public function user()
	{
		$users = $this->dashboard->fetch_all();
		$this->load->view('user', array('all_users' => $users));
	}
	
	public function register()
	{
		$this->dashboard->register($this->input->post());
		$this->load->view('register');
	}

	public function login()
	{
		$result = $this->dashboard->login($this->input->post());

		if(count($result) > 0 )
		{
			$this->session->set_userdata('userinfo', $result);
			redirect('/admin'); 
		}
		else
		{
			redirect('signin');
		}
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}

	public function newuser()
	{
		$this->dashboard->new_user($this->input->post());
		$this->load->view('/newuser');
	}

	public function edituser($id)
	{
		//this user is where you call the edituser ID from
		$user = $this->dashboard->get_user_by_id($id);
		$this->load->view('edituser', array('edit'=>$user));
	}

	public function editprofile($id)
	{
		//this user is where you call the edituser ID from
		$user = $this->dashboard->get_user_by_id($id);
		$this->load->view('editprofile', array('edit'=>$user));
	}

	public function updateprofile($id)
	{	
		$this->dashboard->update_profile($id, $this->input->post());
		redirect('/admin');
	}

	public function update($id)
	{
		// var_dump($this->input->post());
		// die();	
		$this->dashboard->update_user($id, $this->input->post());
		redirect('/admin');
	}

	public function updatepass($id)
	{	
		$this->dashboard->update_user_pass($id, $this->input->post());
		redirect('/admin');
	}

	public function remove($id)
	{
		$this->dashboard->remove($id);
		redirect('/admin');
	}
}
