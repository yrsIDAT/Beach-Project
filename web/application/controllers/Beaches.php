<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beaches extends CI_Controller {
	public function index()
	{
		$this->load->model('BeachModel', '', TRUE);
		$this->load->model('UserData', '', TRUE);
		
		$meta['title'] = "Home";
		$data['db'] = $this->BeachModel->getAll(false);
		$userData = $this->UserData->getToday();
		
		$data['user'] = array();
		
		foreach ($userData->result_array() as $item)
		{
			array_push($data['user'][$item['beach']],$item['rating']);
		}
		
		$i = 0;
		
		foreach ($data['user'] as $beach)
		{
			
			$ratingTotal = 0;
			
			foreach ($beach as $rating)
			{
				$ratingTotal += $rating;
			}
			
			$data['user'][$i] = $ratingTotal / count($data['user'][$i]);
			
			$i++;
		}
		
		$this->load->view('header', $meta);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	
	public function all()
	{
		$this->load->model('BeachModel', '', TRUE);
		
		$sort = $this->uri->segment(3);
		$meta['title'] = "All beaches";
		$data['db'] = $this->BeachModel->getAll($sort);
		$this->load->view('header', $meta);
		
		$this->load->view('all', $data);
		$this->load->view('footer');
	}
	
	public function near()
	{
		
	}
}
?>