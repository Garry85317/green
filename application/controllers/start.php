<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

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
		$electricity_price = $this->Get_electricity_price();
		$this->session->set_userdata('electricity_price', $electricity_price[0]);
		$this->session->set_userdata('watts',$this->input->post('watts'));
		$data['electricity_price'] = $electricity_price[0];
		$data['watts'] = $this->input->post('watts');
		
		$arraAll = $this->get_chart_data($electricity_price[1],1,0);
		$data['selectOtion'] = 0;
		$data['labels'] = $arraAll[0];
		$data['datas'] = $arraAll[1];
		$data['pointRadius'] = $arraAll[2];
		$this->load->view('start',$data);		
	}
	public function changePriceData($electricity_select,$add){
		$electricity_price = $this->Get_electricity_price();
		$this->session->set_userdata('electricity_price', $electricity_price[0]);
		$data['electricity_price'] = $electricity_price[0];
		$data['watts'] = $this->session->userdata('watts');
		
		$arraAll = $this->get_chart_data($electricity_select,$add,0);
		
		$data['selectOtion'] = $this->uri->segment(3);
		$data['labels'] = $arraAll[0];
		$data['datas'] = $arraAll[1];
		$data['pointRadius'] = $arraAll[2];
		$this->load->view('start',$data);	
	}
	public function getTotalMin($table){
		header('Content-Type: application/x-json; charset=utf-8');
		$this->load->model('car_green_power_model','car_green_power');	
		$min = $this->car_green_power->getTotalMin($table);	
	
		echo json_encode($min);
	}
	public function get_chart_data($electricity_type,$add,$echo){  		
        if($echo == 1){header('Content-Type: application/x-json; charset=utf-8');}
		//$Array = array("Apple", "iPhone", "Google", "Android");
		//echo json_encode($Array); //Ans: ["Apple","iPhone","Google","Android"]
        //echo(json_encode());		
		//當前時間 
		if($electricity_type == 0){
			$electricity_price = $this->Get_electricity_price();
			$electricity_type = $electricity_price[1];
		}
		switch ($electricity_type) {			
			case 1://夏月周末 				
				$arr1 = array('00:00','16:00','22:00','24:00');
				$arr2 = array(2.29,2.29,2.29,2.29);
				$arr3 = array(15,0,0,0);
				if($add == 1){
					$now =	date('H:i');	
					if(!in_array($now,$arr1)){
						array_push($arr1,$now );
						sort($arr1);
						$index = array_search($now,$arr1);
						array_push($arr2,2.29);
						array_push($arr3,0);
						$arr3 = $this->moveArrayElement($arr3, 0, $index);
					}
				}
				if($echo == 1){
					echo (json_encode(array(
						$arr1,$arr2,$arr3
					)));
				}else{
					return array($arr1,$arr2,$arr3);
				}
				
			  break;
			case 2://非夏月周末
				$arr1 = array('00:00','15:00','21:00','24:00');
				$arr2 = array(2.18,2.18,2.18,2.18);
				$arr3 = array(15,0,0,0);
				if($add == 1){
					$now =	date('H:i');	
					if(!in_array($now,$arr1)){
						array_push($arr1,$now );
						sort($arr1);
						$index = array_search($now,$arr1);
						array_push($arr2,2.18);
						array_push($arr3,0);
						$arr3 = $this->moveArrayElement($arr3, 0, $index);
					}
				}
				if($echo == 1){
					echo (json_encode(array(
						$arr1,$arr2,$arr3
					)));
				}else{
					return array($arr1,$arr2,$arr3);
				}
			  break;
			case 3://夏月巔峰
				$arr1 = array('00:00','16:00','22:00','24:00');
				$arr2 = array(2.29,9.34,2.29,2.29);
				$arr3 = array(0,15,0,0);
				if($add == 1){
					$now =	date('H:i');
					$hour =	date('G');
					if(!in_array($now,$arr1)){						
						array_push($arr1,$now );						
						array_push($arr3,0);
						if($hour<16){	
							array_push($arr2,2.29);		
							$arr1 = $this->moveArrayElement($arr1, 4, 1);					
							$arr2 = $this->moveArrayElement($arr2, 4, 1);
							$arr3 = $this->moveArrayElement($arr3, 1, 1);
						}else if($hour<22){
							array_push($arr2,9.34);
							$arr1 = $this->moveArrayElement($arr1, 4, 2);	
							$arr2 = $this->moveArrayElement($arr2, 4, 2);
							$arr3 = $this->moveArrayElement($arr3, 1, 2);
						}else if($hour<24){
							array_push($arr2,2.29);
							$arr1 = $this->moveArrayElement($arr1, 4, 3);	
							$arr2 = $this->moveArrayElement($arr2, 4, 3);
							$arr3 = $this->moveArrayElement($arr3, 1, 3);
						}
						//加兩次
						array_unshift($arr1,'');
						array_unshift($arr2,2.29);
						array_unshift($arr3,0);						
						$arr1 = $this->moveArrayElement($arr1, 1, 0);
						$arr2 = $this->moveArrayElement($arr2, 1, 0);
						$arr3 = $this->moveArrayElement($arr3, 1, 0);

						array_unshift($arr1,'');
						array_unshift($arr2,2.29);
						array_unshift($arr3,0);						
						$arr1 = $this->moveArrayElement($arr1, 1, 0);
						$arr2 = $this->moveArrayElement($arr2, 1, 0);
						$arr3 = $this->moveArrayElement($arr3, 1, 0);		
											
					}
				}
				if($echo == 1){
					echo (json_encode(array(
						$arr1,$arr2,$arr3
					)));
				}else{
					return array($arr1,$arr2,$arr3);
				}
			break;
			case 4://夏月非巔峰
				$arr1 = array('00:00','16:00','22:00','24:00');
				$arr2 = array(2.29,9.34,2.29,2.29);
				$arr3 = array(15,0,0,0);				
				if($add == 1){
					$now =	date('H:i');
					$hour =	date('G');
					if(!in_array($now,$arr1)){						
						array_push($arr1,$now );						
						array_push($arr3,0);
						if($hour<16){	
							array_push($arr2,2.29);			
							$arr1 = $this->moveArrayElement($arr1, 4, 1);			
							$arr2 = $this->moveArrayElement($arr2, 4, 1);
							$arr3 = $this->moveArrayElement($arr3, 0, 1);
						}else if($hour<22){
							array_push($arr2,9.34);
							$arr1 = $this->moveArrayElement($arr1, 4, 2);
							$arr2 = $this->moveArrayElement($arr2, 4, 2);
							$arr3 = $this->moveArrayElement($arr3, 0, 2);
						}else if($hour<24){
							array_push($arr2,2.29);
							$arr1 = $this->moveArrayElement($arr1, 4, 3);
							$arr2 = $this->moveArrayElement($arr2, 4, 3);
							$arr3 = $this->moveArrayElement($arr3,0, 3);
						}						
					}
					//加兩次
					array_unshift($arr1,'');
					array_unshift($arr2,2.29);
					array_unshift($arr3,0);						
					$arr1 = $this->moveArrayElement($arr1, 1, 0);
					$arr2 = $this->moveArrayElement($arr2, 1, 0);
					$arr3 = $this->moveArrayElement($arr3, 1, 0);

					array_unshift($arr1,'');
					array_unshift($arr2,2.29);
					array_unshift($arr3,0);						
					$arr1 = $this->moveArrayElement($arr1, 1, 0);
					$arr2 = $this->moveArrayElement($arr2, 1, 0);
					$arr3 = $this->moveArrayElement($arr3, 1, 0);		
				}
				if($echo == 1){
					echo (json_encode(array(
						$arr1,$arr2,$arr3
					)));
				}else{
					return array($arr1,$arr2,$arr3);
				}
			break;
			case 5://非夏月巔峰
				$arr1 = array('00:00','15:00','21:00','24:00');
				$arr2 = array(2.18,9.1,2.18,2.18);
				$arr3 = array(0,15,0,0);	
				//echo '非夏月巔峰, 現在小時:'.date('G');			
				if($add == 1){
					$now =	date('H:i');
					$hour =	date('G');
					if(!in_array($now,$arr1)){						
						array_push($arr1,$now );						
						array_push($arr3,0);
						if($hour<15){	
							array_push($arr2,2.18);			
							$arr1 = $this->moveArrayElement($arr1, 4, 1);				
							$arr2 = $this->moveArrayElement($arr2, 4, 1);
							$arr3 = $this->moveArrayElement($arr3, 1, 1);
						}else if($hour<21){
							array_push($arr2,9.1);
							$arr1 = $this->moveArrayElement($arr1, 4, 2);	
							$arr2 = $this->moveArrayElement($arr2, 4, 2);
							$arr3 = $this->moveArrayElement($arr3, 1, 2);
						}else if($hour<24){
							array_push($arr2,2.18);
							$arr1 = $this->moveArrayElement($arr1, 4, 3);	
							$arr2 = $this->moveArrayElement($arr2, 4, 3);
							$arr3 = $this->moveArrayElement($arr3, 1, 3);
						}	
						/*
						//加兩次
						array_unshift($arr1,'');
						array_unshift($arr2,2.18);
						array_unshift($arr3,0);						
						$arr1 = $this->moveArrayElement($arr1, 1, 0);
						$arr2 = $this->moveArrayElement($arr2, 1, 0);
						$arr3 = $this->moveArrayElement($arr3, 1, 0);

						array_unshift($arr1,'');
						array_unshift($arr2,2.18);
						array_unshift($arr3,0);						
						$arr1 = $this->moveArrayElement($arr1, 1, 0);
						$arr2 = $this->moveArrayElement($arr2, 1, 0);
						$arr3 = $this->moveArrayElement($arr3, 1, 0);	
						*/					
					}
				}
				if($echo == 1){
					echo (json_encode(array(
						$arr1,$arr2,$arr3
					)));
				}else{
					return array($arr1,$arr2,$arr3);
				}
			break;
			case 6://非夏月非巔峰
				$arr1 = array('00:00','15:00','21:00','24:00');
				$arr2 = array(2.18,9.1,2.18,2.18);
				$arr3 = array(0,0,15,0);
				//echo '非夏月非巔峰.現在小時:'.date('G');
				if($add == 1){
					$now =	date('H:i');
					$hour =	date('G');
					if(!in_array($now,$arr1)){						
						array_push($arr1,$now );						
						array_push($arr3,0);						
						if($hour<15){	
							array_push($arr2,2.18);	
							$arr1 = $this->moveArrayElement($arr1, 4, 1);					
							$arr2 = $this->moveArrayElement($arr2, 4, 1);
							$arr3 = $this->moveArrayElement($arr3, 2, 1);
							
						}else if($hour<21){
							array_push($arr2,9.1);
							$arr1 = $this->moveArrayElement($arr1, 4, 2);	
							$arr2 = $this->moveArrayElement($arr2, 4, 2);
							$arr3 = $this->moveArrayElement($arr3, 2, 2);
							
						}else if($hour<24){
							array_push($arr2,2.18);
							$arr1 = $this->moveArrayElement($arr1, 4, 3);	
							$arr2 = $this->moveArrayElement($arr2, 4, 3);
							$arr3 = $this->moveArrayElement($arr3, 2, 3);	
												
						}	
						/*
						//加兩次
						array_unshift($arr1,'');
						array_unshift($arr2,2.18);
						array_unshift($arr3,0);						
						$arr1 = $this->moveArrayElement($arr1, 1, 0);
						$arr2 = $this->moveArrayElement($arr2, 1, 0);
						$arr3 = $this->moveArrayElement($arr3, 1, 0);

						array_unshift($arr1,'');
						array_unshift($arr2,2.18);
						array_unshift($arr3,0);						
						$arr1 = $this->moveArrayElement($arr1, 1, 0);
						$arr2 = $this->moveArrayElement($arr2, 1, 0);
						$arr3 = $this->moveArrayElement($arr3, 1, 0);
						*/		
					}
				}
				if($echo == 1){
					echo (json_encode(array(
						$arr1,$arr2,$arr3
					)));
				}else{
					return array($arr1,$arr2,$arr3);
				}
			break;  
			
		  }
    } 


	function Get_electricity_price()
	{
		/*
		夏月周末 1
		非夏月周末 2
		夏月巔峰 3
		夏月非巔峰 4
		非夏月巔峰 5		
		非夏月非巔峰 6
		*/
		$returnArr = array();
		$year = date('Y');		
		$week = date('w');//0 for Sunday, 6 for Saturday
		$priceDate = date('Y-m-d');
		$priceDate=date('Y-m-d', strtotime($priceDate));
		//echo $priceDate; // echos today! 
		$contractDateBegin = date('Y-m-d', strtotime("01/06/".$year));
		$contractDateEnd = date('Y-m-d', strtotime("30/09/".$year));
			
		if (($priceDate >= $contractDateBegin) && ($priceDate <= $contractDateEnd)){
			//夏季
			if($week>0 && $week<6){
				//周一至周五				
				$rushHour01 = date('Y-m-d 16:00:00'); // 尖峰時間
				$rushHour02 = date('Y-m-d 22:00:00'); // 尖峰時間
				$submissonTime = date('Y-m-d H:i:s');
				$submissonTime = date('Y-m-d H:i:s', strtotime($submissonTime));
				if( strtotime($rushHour01)>= strtotime($submissonTime) &&  strtotime($submissonTime)<= strtotime($rushHour02)){
					$price = 9.34;
					array_push($returnArr,$price,3);
				}else{
					
					//非巔峰
					$price = 2.29;
					array_push($returnArr,$price,4);
					
				}
							
			}else{
				//周末
				$price = 2.29;
				array_push($returnArr,$price,1);
				
			}
			
			return $returnArr;
			//return $price;
		}else{
			//非夏季
			if($week>0 && $week<6){				
				//周一至周五
				$rushHour01 = date('Y-m-d 15:00:00'); // 尖峰時間
				$rushHour02 = date('Y-m-d 21:00:00'); // 尖峰時間
				$submissonTime = date('Y-m-d H:i:s');
				$submissonTime = date('Y-m-d H:i:s', strtotime($submissonTime));
				
				if(strtotime($submissonTime)<strtotime($rushHour01)){
					//非巔峰
					$price =  2.18;
					array_push($returnArr,$price,6);
				}else if( strtotime($rushHour01)>= strtotime($submissonTime) && strtotime($submissonTime) <= strtotime($rushHour02)){
					$price =  9.1;
					array_push($returnArr,$price,5);
				}else{				
					//非巔峰
					$price =  2.18;
					array_push($returnArr,$price,6);
					
				}
				
			}else{
				//周末
				$price =  2.18;
				array_push($returnArr,$price,2);
			}
			
			return $returnArr;
			//return $price;
		}


	}
	
	function moveArrayElement ($a , $i , $j)
	{
		$tmp =  $a[$i];
		if ($i > $j)
		{
			for ($k = $i; $k > $j; $k--) {
					$a[$k] = $a[$k-1]; 
			}        
		}
		else
		{ 
			for ($k = $i; $k < $j; $k++) {
					$a[$k] = $a[$k+1];
			}
		}
		$a[$j] = $tmp;
		return $a;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */