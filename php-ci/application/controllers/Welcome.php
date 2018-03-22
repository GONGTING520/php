<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function index2()
	{
		$this->load->view('hello');
	}

	// 注册
	public function regist()
	{
		$this->load->view('regist');
	}

	public function registUser()
	{
		$username = $this->input->post('username');
		$pwd = $this->input->post('pwd');
		$realname = $this->input->post('realname');
		$tel = $this->input->post('tel');
		
		$this -> load -> model('user_model');
		$row = $this -> user_model -> save($username, $pwd, $realname, $tel);
		
		if($row > 0) {
			redirect('welcome/login');
		}else {
			echo "失败";
		}
	}

	// 登陆
	public function login()
	{
		$this->load->view('login');
	}
	// 检查登陆
	public function check_login()
	{
		$username = $this->input->post('username');
		$pwd = $this->input->post('pwd');

		$this->load->model('user_model');
		$result = $this->user_model->query_by_name($username, $pwd);

		if($result){
			$this->session->set_userdata('name', $username);
			redirect('welcome/success');
		}else{
			echo "不存在此用户或密码错误";
		}
	}
	// 登陆成功
	public function success() 
	{
		$this -> load -> view('success');
	}

	// 显示所有用户	
	public function user_list()
	{
		$this -> load -> model('user_model');
		$result = $this->user_model->query_all();
		$this -> load -> view('user_list', array("users"=>$result));		
	}

	// 删除用户
	public function delete_user($user_id)
	{
		$this -> load -> model('user_model');
		$row = $this->user_model->delete_by_id($user_id);
		if($row > 0) {
			redirect('welcome/user_list');
		}else {
			echo "删除失败";
		}
	}

	// 修改用户
	public function update($user_id)
	{
		$this->load->model('user_model');
		$result = $this->user_model->query_by_id($user_id);

		$this->load->view('update', array("user"=>$result));
	}

	public function update_user($user_id)
	{
		$username = $this->input->post('username');
		$pwd = $this->input->post('pwd');
		$realname = $this->input->post('realname');
		$tel = $this->input->post('tel');
		$this->load->model('user_model');
		$row = $this->user_model->update($user_id, $username, $pwd, $realname, $tel);
		if($row > 0){
			redirect('welcome/user_list');
		}else{
			echo "修改失败";
		}
	}
}
