<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walls extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('dashboard');
		// $this->output->enable_profiler();
	}

	public function userinfo($id)
	{
		$user = $this->dashboard->get_user_by_id($id);
		$messages = $this->fetchmessages($id);
		$comments = $this->fetchcomments($id);
		$this->load->view('userinfo', array('profile'=> $user,
											'messages'=> $messages,
											'comments'=> $comments));
	}

	public function createmessage($id)
	{
		$this->dashboard->create_message($id, $this->input->post());
		redirect('/userinfo/'.$id);
	}

	public function createcomment($id)
	{
		$this->dashboard->create_comment($id, $this->input->post());
		redirect('/userinfo/'.$id);
	}

	public function fetchmessages($id)
	{
		$allmessages = $this->dashboard->fetch_messages($id);
		return $allmessages;
	}

	public function fetchcomments($id)
	{
		$allcomments = $this->dashboard->fetch_comments($id);
		return $allcomments;
	}
}
