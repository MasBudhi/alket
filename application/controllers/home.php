<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller
{
	function index()
	{
		//Langsung ke fungsi view pada pertama kali login
		$this->view(); 
	}

	//Tampilan Pagination Halaman Utama
	function view($offset=0) {

		$this->load->library('pagination');
		$this->load->model('model_home');
  
   		$jml = $this->db->get('alket');

	   	$config['base_url'] = base_url().'index.php/home/view';
	   	$config['total_rows'] = $jml->num_rows();

	   	//Jumlah data yang dipanggil perhalaman*/ 
	   	$config['per_page'] = 5; 
	   	//data selanjutnya di parse diurisegmen 3*/
	   	$config['uri_segment'] = 3; 
	   
	   	// ===== Class bootstrap pagination yang digunakan ======== */
	   	$config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
	    $config['full_tag_close'] ="</ul>";
	   	$config['num_tag_open'] = '<li>';
	   	$config['num_tag_close'] = '</li>';
	   	$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	   	$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	   	$config['next_tag_open'] = "<li>";
	   	$config['next_tagl_close'] = "</li>";
	   	$config['prev_tag_open'] = "<li>";
	   	$config['prev_tagl_close'] = "</li>";
	   	$config['first_tag_open'] = "<li>";
	   	$config['first_tagl_close'] = "</li>";
	   	$config['last_tag_open'] = "<li>";
	   	$config['last_tagl_close'] = "</li>";
	  
	   	$this->pagination->initialize($config);
	   
	   	// membuat variable halaman untuk dipanggil di view nantinya */
	   	$data['halaman'] = $this->pagination->create_links();
	   	$data['offset'] = $offset;

	   	$data['data'] = $this->model_home->view($config['per_page'], $offset);
	   	$data['jumlah_record']=$jml->num_rows();
	   
	   	//memanggil view pagination*/
	   	$this->load->view('home_view',$data);
	   	//$this->load->view('view_bootgrid',$data);
	   	// $this->load->view('ubah_tabel',$data);

  	}

  	public function home_view()
  	{
  		$this->load->model('model_home');
  		$data['semua']=$this->model_home->m_home_view();
  		$this->load->view('v_home_view',$data);
  	}

  	//Mengatur Pagination
  	function manage($offset=0) {

		$this->load->library('pagination');
		$this->load->model('model_home');
  
   		$jml = $this->db->get('alket');
	   	$config['base_url'] = base_url().'index.php/home/manage';
	   	$config['total_rows'] = $jml->num_rows();

	   	//Jumlah data yang dipanggil perhalaman*/ 
	   	$config['per_page'] = 5; 
	   	//data selanjutnya di parse diurisegmen 3*/
	   	$config['uri_segment'] = 3; 
	   
	   	//===== Class bootstrap pagination yang digunakan ======== */
	   	$config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
	    $config['full_tag_close'] ="</ul>";
	   	$config['num_tag_open'] = '<li>';
	   	$config['num_tag_close'] = '</li>';
	   	$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	   	$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	   	$config['next_tag_open'] = "<li>";
	   	$config['next_tagl_close'] = "</li>";
	   	$config['prev_tag_open'] = "<li>";
	   	$config['prev_tagl_close'] = "</li>";
	   	$config['first_tag_open'] = "<li>";
	   	$config['first_tagl_close'] = "</li>";
	   	$config['last_tag_open'] = "<li>";
	   	$config['last_tagl_close'] = "</li>";
	  
	   	$this->pagination->initialize($config);
	   
	   	$data['halaman'] = $this->pagination->create_links();
	   	//membuat variable halaman untuk dipanggil di view nantinya*/
	   	$data['offset'] = $offset;

	   	$data['data'] = $this->model_home->view($config['per_page'], $offset);
	   
	   	//memanggil view pagination*/
	   	$this->load->view('view_manage',$data);
   	}

 
   	// ===== Tampilkan Form Tambah Data =====
   	function tambahdata() 
   	{
		$this->load->model('model_home');
		$data['jenis_dok']=$this->model_home->getJenisDokumen();
		$data['jenis_data']=$this->model_home->getJenisData();
		$data['idnya']=$this->model_home->cariidbaru();
		//$this->load->view('form_rekam',$data);
		$this->load->view('new_header');
		$this->load->view('new_nav');
		$this->load->view('new_form_rekam',$data);
	}

	function ubah($id)
    {

        $this->load->model('model_home');
        $data['jenis_dok']=$this->model_home->getJenisDokumen();
		$data['jenis_data']=$this->model_home->getJenisData();
        $data['id']=$id;
        $data['hasil']=$this->model_home->filter_data($id);
        $this->load->view('form_ubah',$data);
    }

    function simpan_ubahan($id)
    {
    	$this->load->model('model_home');
    	$this->model_home->updatedata($id);
    	header('location:'.base_url()."index.php/home/view");
    }

	// === Hapus Data === */
	function hapus_data($id)
	{
		$this->db->where('id',$id);
		$this->db->delete("alket");
		header('location:'.base_url()."index.php/home/view");
	}



	// === Simpan Data === */
	function simpan(){
		date_default_timezone_set("asia/Jakarta");

		$this->load->library('session');
		$this->load->library('form_validation');

		$this->form_validation->set_message('required', '%s Harus Diisi !.');
		$this->form_validation->set_rules('nama', 'Nama dalam Alat Keterangan','required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->model('model_home');
			$data['idnya']=$this->model_home->cariidbaru();
			$this->load->view('form_rekam',$data);
		}
		else
		{
			$nilai=str_replace('.','',substr($this->input->post("nilai_alket"),0,strlen($this->input->post("nilai_alket"))-3));
			$npwp9=str_replace('.','',substr($this->input->post("npwp_lengkap"),0,12));
			$tgl_ini=date('Y-m-d');

			$data=array("id"=>$this->input->post("id"),
			"no_sp"=>$this->input->post("no_sp"),
			"tgl_sp"=>$this->input->post("tgl_sp"),
			"kpp_asal"=>$this->input->post("kpp_asal"),
			"kpp_tujuan"=>$this->input->post("kpp_tujuan"),	
			"id_alket"=>$this->input->post("id_alket"),
			"npwp"=>$npwp9,
			"kpp"=>substr($this->input->post("npwp_lengkap"),13,3),
			"cab"=>substr($this->input->post("npwp_lengkap"),17,3),
			"nama"=>$this->input->post("nama"),
			"alamat"=>$this->input->post("alamat"),
			"kota"=>$this->input->post("kota"),
			"kode_dokumen"=>$this->input->post("kode_dokumen"),
			"kode_data"=>$this->input->post("kode_data"),
			"tgl_data"=>$this->input->post("tgl_data"),
			"kwantum"=>$this->input->post("kwantum"),
			"nilai_alket"=>$nilai,
			"uraian"=>$this->input->post("uraian"),
			"sumber_data"=>$this->input->post("sumber_data"),
			"tgl_rekam"=>$tgl_ini
				);
			$this->load->model('model_home');
			$this->model_home->simpandata($data);

			// $this->session->set_flashdata('message',
			// '<div class="alert alert-success text-center">Data berhasil disimpan!</div>');			
			header('location:'.base_url()."index.php/home/view");
		
		}
		
	}


   	//===================================autocomplete ============//
   	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('unit_djp')->like('nama_kantor',$keyword,'both')->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->nama_kantor
				// 'kode_kpp'	=>$row->kode_kpp,
				// 'alamat'	=>$row->alamat

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

	public function search_kota()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('dati2a')->like('nama_kabupaten',$keyword,'both')->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->nama_kabupaten
				// 'kode_kpp'	=>$row->kode_kpp,
				// 'alamat'	=>$row->alamat

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}

	function telusur()
    {
        $this->load->view("form_penelusuran");
    }

    public function ajax_cariData($nama){
    	$this->load->model("model_home");
    	$data['hasil']=$this->model_home->m_cariData($nama);
    	$this->load->view("v_ajax_cariData",$data);
    }

    public function tampilan_baru(){
    	$this->load->view("new_header");
    	$this->load->view("new_nav");
    }

    public function apiCariData(){
    	$this->load->helper('url');

    	$nama=urldecode($this->uri->segment(3));

    	$this->load->model("model_home");
    	$hasil[]=$this->model_home->m_cariData($nama);

    	echo json_encode($hasil);
    	//echo $this->uri->segment(3);
    	//print_r($hasil);
    }

    public function client(){
    	$file = fopen("http://10.29.254.48/alket/index.php/home/apiCariData/" .$this->uri->segment(3),"r");
		print_r(json_decode(fgets($file)));
		fclose($file);

    }

}
?>