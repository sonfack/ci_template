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
		$this->load->library('Template');
		$this->template->set_theme('admin');
		$this->template->views('vue_post_2', 'post_6');
		$this->template->view('vue_post_6', 'output');
		//$this->template->views('vue_output', 'post_6');
		//$this->template->view('vue_post_2', 'post_4');
		//$this->load->view('welcome_message');
	}
}
