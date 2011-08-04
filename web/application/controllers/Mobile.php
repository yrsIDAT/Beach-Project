<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {
	public function index()
	{
		$this->load->model('BeachModel', '', TRUE);
		$meta['title'] = "Beachwall";
		$meta['mobile'] = true;
		$data['db'] = $this->BeachModel->getAll('name,asc');
		$this->load->view('header',$meta);
		$this->load->view('mobile',$data);
		$this->load->view('footer');
	}
}
?>