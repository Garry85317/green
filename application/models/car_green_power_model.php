<?php
class Car_green_power_model extends CI_Model {    
	//管理者帳號	
		
    function __construct()
    {
        // 呼叫模型(Model)的建構函數
        parent::__construct();		
    }
	
    
	
	public function query($table = '')
	{		
		if($table == '')
		{			
			$query = $this->db->get('tb_Hyundai_Ioniq_5');			
		}else{
			$query = $this->db->get($table );			
		}	
		if ($query->num_rows() > 0)
		{
			return $query->result(); 
		}else
		{
			return ' ';
		}
	}
	public function search($sql)
	{		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			return $query->result(); 
		}else
		{
			return ' ';
		}
	}
	public function getTotalMin($table){
		$query = $this->db->get($table);		
		if ($query->num_rows() > 0)
		{
			//
			$min = round($query->num_rows() / 60);
			return $min;
		}else
		{
			return ' ';
		}
	}
}
?>