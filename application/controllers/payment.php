<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
	
	public function index()
	{		
		$pay_date = date('Y').' 年 '. date('m').' 月 '. date('d').' 日' ;
		$pay_time = date('H').' : '.date('i').' : '. date('s') ;
		$this->session->set_userdata('inputTotalPrice', $this->input->post('inputTotalPrice'));
		$this->session->set_userdata('inputTotalConsumption', $this->input->post('inputTotalConsumption'));

		$this->session->set_userdata('pay_date', $pay_date);
		$this->session->set_userdata('pay_time', $pay_time);

		$this->load->view('payment');
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */