<?php  

/**
 * AdminController
 */
class AdminController extends CI_Controller
{

	// public function __construct()
	// {
	// 	Parent::__construct();
	// }

	// Routing Methods

	public function index($value='')
	{

		$this->load->view('admin/index');
	}

	public function adminDashboard()
	{

		
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		// $data['countUsers'] = $this->User_model->getRecordCountWhere('users',array('userstatus'=>'active','userrole!='=>));
		// $data['countOrders'] = $this->User_model->getRecordCountWhere($table,$where);

		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('includes/adminfooter');
	}

	public function adminHomepagesettings(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/homepagesettings');
		$this->load->view('includes/adminfooter');
	}
	public function adminAboutpagesettings(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/aboutpagesettings');
		$this->load->view('includes/adminfooter');
	}
	public function adminProductspagesettings(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/productspagesettings');
		$this->load->view('includes/adminfooter');
	}
	public function adminContactpagesettings(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/contactpagesettings');
		$this->load->view('includes/adminfooter');
	}
	public function adminMessagesTable(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$data['vendors'] = $this->Main_model->getDataColumnWhereMore('users',array('userrole'=>'owner'),array('userid','userfname','userlname','useremail','userstatus'));
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/messages',$data);
		$this->load->view('includes/adminfooter',$data);
	}
	public function adminVendors(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$data['vendors'] = $this->Main_model->getDataColumnWhereMore('users',array('userrole'=>'owner'),array('userid','userfname','userlname','useremail','userstatus'));
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/vendors',$data);
		$this->load->view('includes/adminfooter',$data);
	}
	public function adminCustomers(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$data['customers'] = $this->Main_model->getDataColumnWhereMore('users',array('userrole'=>'customer'),array('userid','userfname','userlname','useremail','userstatus'));
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/customers',$data);
		$this->load->view('includes/adminfooter',$data);
	}
	public function adminOrders(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/orders');
		$this->load->view('includes/adminfooter');
	}
	public function adminProducts(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['messages'] = $this->Main_model->getAllDataWhereMore('messages',array('messagetoemail'=>$data['userDetails']->useremail));
		$data['notifications'] = $this->Main_model->getAllData('notifications');
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/products',$data);
		$this->load->view('includes/adminfooter',$data);
	}

	

	public function adminUserprofile(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','userstatus','usercontact','useraddress','userrole','userprofilepic','userfname','userlname','useremail','usercountry','userstate','usercity','userpincode'));
		$data['countries'] = $this->Main_model->getAllData('countries');
		$this->load->view('admin/userprofile',$data);
		
	}
	public function adminSitesettings(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','userstatus','usercontact','useraddress','userrole','userprofilepic','userfname','userlname','useremail','usercountry','userstate','usercity','userpincode'));
		$data['siteDetails'] = $this->Main_model->getAllData('sitesettings',array('sitename','sitelogo','siteurl','siteicon','siteaddress','sitecontact','siteemail' ));
		$data['countries'] = $this->Main_model->getAllData('countries');
		$this->load->view('admin/sitesettings',$data);
		
	}
	public function adminDatabaseTables(){
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		$tables = $this->db->list_tables();

		foreach ($tables as $table)
		{
		    $fields[$table] = $this->db->field_data($table);
		}

		// echo "<pre>";
		// print_r($fields);
		// exit;

		$data['userDetails'] = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->
			userdata('usersid')),array('useruname','useremail'));
		$data['siteDetails'] = $this->Main_model->getAllData('sitesettings',array('sitename','sitelogo','siteurl','siteicon','siteaddress','sitecontact','siteemail' ));

		$data['tables'] = $fields;
		
		$this->load->view('includes/adminheader',$data);
		$this->load->view('admin/dbtables',$data);
		$this->load->view('includes/adminfooter',$data);
		
	}






	// functionality methods

	public function adminLogin()
	{
		# code...
		$where = array(
			'useruname' => $this->input->post('admin_login_uname'),
			'userpassword' => $this->input->post('admin_login_pwd'),
			// 'userrole'=>'owner'
		);
		$getLoginDetails = $this->Main_model->userLogin($where);
		// print_r($getLoginDetails);exit;

		if($getLoginDetails){

			if($getLoginDetails->userstatus == 'active'){
				$this->session->set_userdata(array('usersid'=>$getLoginDetails->userid,'usersuserrole'=>$getLoginDetails->userrole));
				$this->session->set_flashdata('success','Logged In Successfully');
				redirect('admin-dashboard');
			}else{
				$this->session->set_flashdata('failure','Your Account is not active');
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('failure','Please Check your login details');
			redirect('admin');
		}
		
	}

	public function adminUserBasicInfoUpdate()
	{
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		// print_r($this->input->post());
		// print_r($_FILES);
		// exit;
		
		$image = $_FILES['userprofilepic']['name'];
		// echo $image;exit;
		if($image){
			$newImage = time().'_'.$image;
			// echo $newImage;
			$imageUpload=$this->uploadImage($newImage,'userprofilepic','userprofiles');
			if($imageUpload){
				// echo "succcess";exit;
				$imageUpload=$newImage;
				echo $imageUpload;
				// echo exit;
			}else{
				// echo "Fail";exit;
				$this->session->set_flashdata('error', 'Image is not Upload');
				redirect('admin-userprofile');
			}
		}else{
			$imageUpload=$this->input->post('hiddenProfilepic');
		}

	
		// echo $imageUpload;exit;
		
		$where = array('userid'=>$this->session->userdata('usersid'));
		$data = array(
			'userprofilepic'=>$imageUpload,
			'userfname'=>$this->input->post('userfname'),
			'userlname'=>$this->input->post('userlname'),
			'useremail'=>$this->input->post('useremail')
		);
		// print_r($data);exit;
		$result=$this->Main_model->updateData('users',$where,$data);
		if($result){
			$this->session->set_flashdata('success', 'Basic Info updated successfully');
			redirect('admin-userprofile');
		}else{
			$this->session->set_flashdata('failure', 'Basic Info updation failed');
			redirect('admin-userprofile');
		}
	}



	public function adminUpdateuserpassword()
	{
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		// print_r($this->input->post());
		// print_r($_FILES);
		// exit;
		
		$where = array('userid'=>$this->session->userdata('usersid'));
		$data = array(
			'userpassword'=>$this->input->post('usernpassword'),
		);
		// print_r($data);exit;
		$result=$this->Main_model->updateData('users',$where,$data);
		if($result){
			$this->session->set_flashdata('success', 'Password updated successfully');
			redirect('admin-userprofile');
		}else{
			$this->session->set_flashdata('failure', 'Password updation failed');
			redirect('admin-userprofile');
		}
	}

	public function adminUpdateuseraddress()
	{
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		// print_r($this->input->post());
		// print_r($_FILES);
		// exit;
		
		$where = array('userid'=>$this->session->userdata('usersid'));
		$data = array(
			'useraddress'=>$this->input->post('useraddress'),
			'usercountry'=>$this->input->post('usercountry'),
			'userstate'=>$this->input->post('userstate'),
			'usercity'=>$this->input->post('usercity'),
			'userpincode'=>$this->input->post('userpincode'),
		);
		// print_r($data);exit;
		$result=$this->Main_model->updateData('users',$where,$data);
		if($result){
			$this->session->set_flashdata('success', 'Address updated successfully');
			redirect('admin-userprofile');
		}else{
			$this->session->set_flashdata('failure', 'Address updation failed');
			redirect('admin-userprofile');
		}
	}


	public function adminWebsiteBasicInfoUpdate()
	{
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}
		// echo "<pre>";
		// print_r($this->input->post());
		// print_r($_FILES);
		// exit;
		
		$image = $_FILES['sitelogo']['name'];
		$image1 = $_FILES['siteicon']['name'];
		$ext = pathinfo($image, PATHINFO_EXTENSION);
		$ext1 = pathinfo($image1, PATHINFO_EXTENSION);
		
		// echo $image;
		// echo $image1;
		// echo $ext;
		// exit;
		
		if($image){
			$newImage = 'site_logo.'.$ext;
			$imageUpload=$this->uploadImage($newImage,'sitelogo','sitesettingsimages');
			if($imageUpload){
				// echo "succcess";exit;
				$imageUpload = $newImage;
			}else{
				// echo "Fail";exit;
				$this->session->set_flashdata('error', 'Image is not Upload');
				redirect('admin-sitesettings');
			}
		}else{
			$imageUpload=$this->input->post('hiddenSitelogo');
		}

		if($image1){
			$newImage1 = 'site_icon.'.$ext;
			$imageUpload1=$this->uploadImage($newImage1,'siteicon','sitesettingsimages');
			if($imageUpload1){
				// echo "succcess";exit;
				$imageUpload1=$newImage1;
			}else{
				// echo "Fail";exit;
				$this->session->set_flashdata('error', 'Image is not Upload');
				redirect('admin-sitesettings');
			}
		}else{
			$imageUpload1=$this->input->post('hiddenSiteicon');
		}

	
		// echo $imageUpload;exit;
		
		// $where = array('userid'=>$this->session->userdata('usersid'));
		$data = array(
			'sitelogo'=>$imageUpload,
			'siteicon'=>$imageUpload1,
			'sitename'=>$this->input->post('sitename'),
			'siteurl'=>$this->input->post('siteurl'),
			'siteemail'=>$this->input->post('siteemail'),
			'sitecontact'=>$this->input->post('sitecontact')
		);
		// print_r($data);exit;
		$result=$this->Main_model->updateAllData('sitesettings',$data);
		if($result){
			$this->session->set_flashdata('success', 'Basic Info updated successfully');
			redirect('admin-sitesettings');
		}else{
			$this->session->set_flashdata('failure', 'Basic Info updation failed');
			redirect('admin-sitesettings');
		}
	}


	public function adminUpdatewebsiteaddress()
	{
		if($this->session->userdata('usersid')==""){
			$this->session->set_flashdata('failure','Please Login');
			redirect('admin');
		}

		$data = array(
			'siteaddress'=>$this->input->post('siteaddress'),
			'sitemaplocation'=>$this->input->post('sitemaplocation')
		);
		// print_r($data);exit;
		$result=$this->Main_model->updateAllData('sitesettings',$data);
		if($result){
			$this->session->set_flashdata('success', 'Address updated successfully');
			redirect('admin-sitesettings');
		}else{
			$this->session->set_flashdata('failure', 'Address updation failed');
			redirect('admin-sitesettings');
		}
	}




	public function adminGetajaxdata($table)
	{
		$data = $this->Main_model->getAllData($table);
		echo json_encode($data);
	}
	public function adminGetajaxdatawhere($table,$column,$value)
	{
		$where = array($column=>$value);
		$data = $this->Main_model->getAllDataWhere($table,$where);
		echo json_encode($data);
	}
	public function adminGetallajaxdatawhere($table,$column,$value)
	{
		$where = array($column=>$value);
		$data = $this->Main_model->getAllDataWhereMore($table,$where);
		echo json_encode($data);
	}

	public function adminCheckuserpwd($value)
	{
		// $where = array('userpassword'=>$value);
		$userPwd = $this->Main_model->getDataColumnWhere('users',array('userid'=>$this->session->userdata('usersid')),'userpassword');

		if($userPwd->userpassword == $value){
			echo 'M';
		}else{
			echo 'N';
		}

	}

	public function adminGetUserAjax($userId)
	{
		// echo $userId;
		$userDetails = $this->Main_model->getDataColumnWhere('users',array('userid'=>$userId),array('userid','useruname','usercontact','useraddress','userprofilepic','userfname','userlname','useremail','usercountry','userstate','usercity','userpincode','userprofilepic'));
		echo json_encode($userDetails);
	}
	public function adminUserAction($action,$userId)
	{
		$redirectBack = $_SERVER['HTTP_REFERER'];
		if($action == '0'){
			$userDetails = $this->Main_model->updateData('users',array('userid'=>$userId),array('userstatus'=>'inactive'));
			redirect($redirectBack);
		}else if($action == '1'){
			$userDetails = $this->Main_model->updateData('users',array('userid'=>$userId),array('userstatus'=>'active'));
			redirect($redirectBack);
		}else{
			$userDetails = $this->Main_model->deleteDataWhere('users',array('userid'=>$userId));
			redirect($redirectBack);

		}
	}

	public function adminLogout(){

		$this->session->set_userdata(array('usersid'=>''));
		$this->session->set_flashdata('success','Logged Out Successfully');
		redirect('admin');
	
	}


	// General Functions

	
	

	public function uploadImage($image,$fieldname,$folder)
	{
		$config = array(
			'file_name'=>$image,
			'upload_path' => "uploads/".$folder."/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf|mp4|wmv|3gp",
			'overwrite' => TRUE,
		);
		// print_r($config);exit;
		$this->load->library('upload',$config);
		// $this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload($fieldname))
		{
			// echo "Success";exit;
			$result=$this->upload->data();
			return true;
		}else{
			// echo "Success1";exit;
			$data=$this->upload->display_errors();
			print_r($data);
			die();
			return false;
		}
	}




}

?>