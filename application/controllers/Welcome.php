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
	public function index($pageSlug = 'welcome_message')
	{
		if ( ! file_exists(APPPATH.'views/'.$pageSlug.'.php'))
       	{
            // Whoops, we don't have a page for that!
            show_404();
       	}
       	$pageTitle = '';		
		$page_title = explode('_',$pageSlug);
		for($i = 0;$i < sizeof($page_title);$i++){
			$pageTitle .= ucfirst($page_title[$i]).' ';
		}
		$data['title'] = rtrim($pageTitle); // Capitalize the first letter
		$this->load->view('templates/header', $data);
		$this->load->view($pageSlug, $data);
		$this->load->view('templates/footer', $data);
	}
}
