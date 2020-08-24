<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('model_employee');
	}
	
	public function index() 
	{
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[11|max_length[15]|numeric|is_unique');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[c_password]');
		$this->form_validation->set_rules('c_password', 'Confrim password', 'trim|required|min_length[8]');	
		$this->load->view('employee');
	}
	
	public function simpan_data() 
	{
			$this->model_employee->simpan_data();	
			$this->load->view('employee',$data);	

		
	}

	 public function aksitambah() {
//        load library form validation
        $this->load->library('form_validation');
//        jika anda mau, anda bisa mengatur tampilan pesan error dengan menambahkan element dan css nya
        $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');
//        rules validasi
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[c_password]');
		$this->form_validation->set_rules('c_password', 'Confrim password', 'trim|required|min_length[8]');	
        if ($this->form_validation->run() == FALSE) {
//            jika validasi gagal
            $this->load->view('employee');
        } else {
//            jika validasi berhasil
            $this->load->model('model_employee');
            $this->user_model->simpan_data($data);
            redirect(base_url() . 'index.php/employee');
        }
    }

	
	
	
	
}
?>