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

	public function createNewTable()
	{
		// echo "<pre>";
		// print_r($this->input->post());
		// exit;

		$postVar = $this->input->post();
		if($this->input->post('field1')[0] != ''){
			// echo "dbfo,rge";exit;
			if($postVar['field1'][3] == 'on'){
				$auto_increment = TRUE;
			}else{
				$auto_increment = FALSE;
			}
			
			$fields = array(

		        	array(
		                'type' => $postVar['field1'][1],
		                'constraint' => $postVar['field1'][2],
		                'auto_increment' => $auto_increment

		}else{
			// echo "without dbforge";exit;
			$fields = array(
		        'temp_field' => array(
		                'type' => 'INT'
		        )
		    );            
			$this->load->dbforge();
			$this->dbforge->add_field($fields);
			$this->dbforge->create_table($postVar['table_name'],TRUE);

		}

	}
}
