<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Tinjut extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model("model_tinjut");
	}
	
	public function index()
	{
		$data['semua']=$this->m_tinjut->m_tampil();
		$this->load->view('v_semua',$data);
	}

	public function rekam_sp2dk()
	{

	}

	public function rekam_usul_riksus()
	{

	}

	public function rekam_potensi()
	{

	}

	public function rekam_realisasi()
	{

	}

	public function rekam_keterangan()
	{

	}

	public function rekam_closed()
	{

	}

}
?>
