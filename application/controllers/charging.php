<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Charging extends CI_Controller
{

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
		$this->session->set_userdata('start_time', date('H:i:s'));

		//資料庫的資料
		$this->load->model('car_green_power_model', 'car_green_power');
		$watts = $this->input->post('watts');
		$dataTable = $this->input->post('dataTable');
		$table = 'tb_' . $dataTable . '_' . $watts;
		$jsonPath = 'json/' . $table . '.json';
		$jsonData = file_get_contents($jsonPath);
		$arrayData = json_decode($jsonData, true);

		if ($this->input->post('watts') != '') {
			if ($this->input->post('charging_time')) {
				$sec = $this->input->post('charging_time') * 60;
				$filteredData = array_map(function ($item) {
					return (object) $item;
				}, array_values(array_filter($arrayData, function ($item) use ($sec) {
					return $item['f_sec'] <= $sec;
				})));
			} else if ($this->input->post('charging_amount')) {
				$soc = $this->input->post('charging_amount');
				$filteredData = array_map(function ($item) {
					return (object) $item;
				}, array_values(array_filter($arrayData, function ($item) use ($soc) {
					return $item['f_soc'] <= $soc;
				})));
			} else {
				redirect(base_url());
			}
		} else {
			redirect(base_url());
		}

		$electricity_price = $this->session->userdata('electricity_price');
		$data['electricity_price'] = $electricity_price;
		$data['query_result_power'] = $filteredData;
		$data['start_time'] = $this->session->userdata('start_time');
		//echo 	$sql;
		$this->load->view('charging', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */