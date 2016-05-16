<?php

class Form extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_message('required', '%s Harus Diisi.');

		$this->form_validation->set_rules('username', 'UserName', 'required');

		$this->load->library('session');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->session->set_flashdata('message', 'anda berhasil menginput data');
			$this->load->view('formsuccess');
		}
	}

	function tampil_view()
	{
		$this->load->view("formsuccess");
	}
}
?>