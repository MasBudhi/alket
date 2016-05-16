<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_home extends CI_Model
{
    public function m_home_view()
    {
        $q=$this->db->query('select * from alket');
        return $q->result();
    }
	
	function view($num, $offset)  
	{
		// Untuk menentukan $num dan $offset, harus berdasar jumlah seluruh baris pada table
        $this->db->order_by('id','DESC');
	   	$query = $this->db->get("alket",$num, $offset);
	  	return $query->result();
    }

    function getJenisDokumen()
    {
    	$q=$this->db->query('select kode_dokumen,nama_dokumen from jns_dokumen');
        return $q->result();
    }

    function getJenisData()
    {
    	$q1=$this->db->query('select kode_data,nama_data from jns_data');
    	return $q1->result();
    }

	function simpandata($data){
		$this->db->insert('alket', $data); 
	}

  	function cariidbaru()
	{
		$q=$this->db->query("select max(id) as aidi from alket");
		if($q->num_rows()>0){
			foreach ($q->result() as $r) {
				$tmp=((int)$r->aidi)+1;
				$idbaru=sprintf("%05d",$tmp);
			}
		}else{
			$idbaru="00001";
		}

		return $idbaru;
		
	}

    function filter_data($id)
    {
        $this->db->where('id',$id);
        $this->db->from('alket');
        $query=$this->db->get();
        return $query->result();
    }

	function updatedata($id)
    {
        $no_sp = $this->input->post('no_sp');
        $tgl_sp = $this->input->post('tgl_sp');
        $kpp_asal = $this->input->post('kpp_asal');
        $kpp_tujuan = $this->input->post('kpp_tujuan');
        $id_alket = $this->input->post('id_alket');

        $npwp =str_replace('.','',substr($this->input->post("npwp_lengkap"),0,12));
        $kpp =str_replace('.','',substr($this->input->post("npwp_lengkap"),13,3));
        $cab =str_replace('.','',substr($this->input->post("npwp_lengkap"),17,3));

        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $kode_dokumen = $this->input->post('kode_dokumen');
        $kode_data = $this->input->post('kode_data');
        $tgl_data = $this->input->post('tgl_data');
        $kwantum = $this->input->post('kwantum');
        $nilai=str_replace('.','',substr($this->input->post("nilai_alket"),0,strlen($this->input->post("nilai_alket"))-3));
        $uraian = $this->input->post('uraian');
        $sumber_data = $this->input->post('sumber_data');

        $data = array(
                'no_sp'=>$no_sp,
                'tgl_sp'=>$tgl_sp,
                'kpp_asal'=>$kpp_asal,
                'kpp_tujuan'=>$kpp_tujuan,
                'id_alket'=>$id_alket,
                'npwp'=>$npwp,
                'kpp'=>$kpp,
                'cab'=>$cab,
                'nama'=>$nama,
                'alamat'=>$alamat,
                'kota'=>$kota,
                'kode_dokumen'=>$kode_dokumen,
                'kode_data'=>$kode_data,
                'tgl_data'=>$tgl_data,
                'kwantum'=>$kwantum,
                'nilai_alket'=>$nilai,
                'uraian'=>$uraian,
                'sumber_data'=>$sumber_data);
        $this->db->where('id',$id);
        $this->db->update('alket',$data);
    }

    public function m_cariData($nama){
        $q="SELECT * FROM alket where nama LIKE '%$nama%'";
        $hasil_query=$this->db->query($q);
        if($hasil_query->num_rows() > 0){
            $hasil=$hasil_query->result_array();
        }else{
            return array();
        }

        return $hasil;
    }
    
}
?>