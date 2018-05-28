<?php
class My_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('logged_in'))
		{
			redirect('admin/auth/login');
		}
	}
}
?>
