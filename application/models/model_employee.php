<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_employee extends CI_Model {
		
		function __construct() 
		{
			parent :: __construct();
		}
			
		public function simpan_data()
		{							
			$data = array(
				'id'          => "",
				'f_name'        => $this->input->post('F_name'),
				'l_name'         => $this->input->post('L_name'),
				'password'     => $this->input->post('password'),
				'email	'        => $this->input->post('email'),
				'phone'         => $this->input->post('phone'),
				'gender'         => $this->input->post('gender'),
				'answer'     => $this->input->post('answer'),
			);
			
			$this->db->insert('tbl_employee',$data);
			redirect('employee/index');
		}

			
		
	}
?>	