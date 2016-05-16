<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller
{
	function index()
	{
		$this->load->view('model_drop');
		$this->model_drop->get_dokumen();
	}
}
?>