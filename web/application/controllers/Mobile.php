<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {
	public function index()
	{
		$this->load->model('BeachModel', '', TRUE);
		
		$meta['title'] = "Beachwall";
		$meta['mobile'] = true;
		$meta['script'] = "var s = 0;
		
		function star(id) {
			for (i=1;i<=id;i++) $('#star' + i).css('background-image','url(\'/images/star.png\')');
			for (i=id+1;i<=5;i++) $('#star' + i).css('background-image','url(\'/images/star.empty.png\')');
			
			s = id;
			out = '';
			
			switch (s) {
				case 1:
					out = 'Packed';
					break;
				
				case 2:
					out = 'Quite busy';
					break;
				
				case 3:
					out = 'Normal';
					break;
				
				case 4:
					out = 'Quite quiet';
					break;
				
				case 5:
					out = 'Empty';
					break;
			}
			
			$('#quietLabel').text(out);
		}
		
		function button() {
			if (s != 0 && $('#beachSelect').val() != '') {
				$.ajax({
					url: '/submit/busy',
					type: 'post',
					data: {
						id: $('#beachSelect').val(),
						rating: s
					},
					complete: function() {
						alert('Rating submitted!');
					}
				});
			} else {
				if ($('#beachSelect').val() == '')alert('Please select a beach')
				else alert('Please rate this beach');
			}
		}";
		$data['db'] = $this->BeachModel->getAll('name,asc');
		
		$this->load->view('header',$meta);
		$this->load->view('mobile',$data);
		$this->load->view('footer');
	}
}
?>