<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('vThisWeeks');
	}

	public function allproject()
	{
		$data = array(
			'title_head' => "SIMP",
			'title_content' => "All Project",
		);
		$this->load->view('vAllProject',$data);
	}

	public function picproject()
	{
		$data = array(
			'title_head' => "SIMP",
			'title_content' => "PIC Project",
		);
		$this->load->view('vPicProject',$data);
	}

	public function detail_project()
	{
		$data = array(
			'title_head' => "SIMP",
			'title_content' => "Detail Project",
		);
		$this->load->view('vDetailProject',$data);
	}

	public function create_project()
	{
		$data = array(
			'title_head' => "SIMP",
			'title_content' => "Create Project",
		);
		$this->load->view('vCreateProject', $data);
	}
}
