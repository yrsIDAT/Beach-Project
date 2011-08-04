<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {
	public function busy()
	{	
		$this->load->model('UserData', '', TRUE);
		if (isset($_POST['id']) && isset($_POST['rating'])) $this->UserData->busySubmit($_POST['id'],$_POST['rating']);
	}
}
?>