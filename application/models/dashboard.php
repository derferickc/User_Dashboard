<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Model {

	public function register($post)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|matches[confirm_password]|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');	
		
		if($this->form_validation->run() ===FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			return false;			
		}
		else
		{
		$query = "INSERT INTO users(email, first_name, last_name, password, created_at, updated_at, user_level) VALUES(?,?,?,?, NOW(), NOW(), 0)";
		$values = array($post['email'], $post['first_name'], $post['last_name'], $post['password']);
		$this->db->query($query, $values);
		$this->session->set_flashdata('success', 'Thanks for registering!');
		redirect('/register');
		}
	}

	public function login($post)
	{
		$query = "SELECT * FROM users WHERE email =? AND password =?"; 
		$values = array($post['email'], $post['password']);
		return $this->db->query($query, $values)->row_array();
	}

	public function new_user($post)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|matches[confirm_password]|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');	
		
		if($this->form_validation->run() ===FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			return false;			
		}
		else
		{
		$query = "INSERT INTO users(email, first_name, last_name, password, created_at, updated_at, user_level) VALUES(?,?,?,?, NOW(), NOW(), 0)";
		$values = array($post['email'], $post['first_name'], $post['last_name'], $post['password']);
		$this->db->query($query, $values);
		redirect('/admin');
		}
	}

	public function fetch_all()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}

	public function get_user_by_id($id)
	{
		$query = "SELECT * FROM users WHERE id = $id";
		return $this->db->query($query)->row_array();
	}

	public function update_user($id,$post)
	{
		$integer = 0;
		if($post['select'] == 'normal')
		{
			$integer = 0;
		}
		elseif($post['select'] == 'admin')
		{
			$integer = 1;
		}
		$query = "UPDATE users SET email=?, first_name=?, last_name=?, updated_at=NOW(), user_level=? WHERE id = $id";
		$values = array($post['email'], $post['first_name'], $post['last_name'], $integer);
		$this->db->query($query, $values);
	}

	public function update_profile($id,$post)
	{
		$query = "UPDATE users SET description=? WHERE id = $id";
		$values = array($post['description']);
		$this->db->query($query, $values);
	}

	public function update_user_pass($id,$post)
	{
		$query = "UPDATE users SET password=?, updated_at=NOW() WHERE id = $id";
		$values = array($post['password']);
		$this->db->query($query, $values);
	}

	public function remove($id)
	{
		$query = "DELETE FROM users WHERE id = $id";
		$this->db->query($query);
	}


// wall stuff

	public function create_message($id,$post)
	{
		$poster_id = '';
		$poster_id = $this->session->userdata['userinfo']['id'];

		$query = "INSERT INTO messages(content, poster_id, created_at, updated_at, users_id)
				VALUES(?,?, NOW(), NOW(),?)";
		$values = array($post['content'], $poster_id, $id);
		$this->db->query($query, $values);
	}

	public function create_comment($id,$post)
	{
		$pposter_id = '';
		$pposter_id = $this->session->userdata['userinfo']['id'];

		$query = "INSERT INTO comments(c_content, pposter_id, created_at, updated_at, users_id, messages_id)
				VALUES(?,?, NOW(), NOW(), ?,?)";
		$values = array($post['c_content'], $pposter_id, $id, $post['messages_id']);
		$this->db->query($query, $values);
	}

	public function fetch_messages($id)
	{
		$query = "SELECT users.first_name, users.last_name, messages.id, messages.content, messages.poster_id, messages.created_at, messages.updated_at, messages.users_id
		FROM users JOIN messages ON messages.poster_id = users.id WHERE messages.users_id = {$id} ORDER BY messages.created_at DESC";
		return $this->db->query($query)->result_array();
	}

	public function fetch_comments($id)
	{
		$query = "SELECT comments.c_content, comments.pposter_id, comments.created_at, comments.updated_at, comments.users_id, comments.messages_id, users.first_name, users.last_name, users.id 
		FROM comments
        JOIN users ON comments.pposter_id = users.id
		JOIN messages ON messages.id = comments.messages_id
		WHERE messages.users_id = {$id} ORDER BY comments.created_at DESC";
		return $this->db->query($query)->result_array();		
	}

}
