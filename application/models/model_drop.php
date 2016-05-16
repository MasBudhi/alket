<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_drop extends CI_Model
{
	function __construct()
	{
		parent::construct();
	}
	
	function get_dokumen()
	{
		$q="select nama_dokumen from jns_dokumen";
		$qry=$this->db->query($q);
		if($qry->num_rows() > 0)
		{
			foreach($qry->result() as $baris)
			{
				$data[]=$baris;
			}
		return $data;
		}
	}
}
?>