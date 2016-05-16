<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_home extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function m_tampil()
    {
        $qry="SELECT 
            A.ID_DATA,
            A.NPWP,
            A.KPP_ADMIN,
            B.JENIS_DATA,
            A.TAHUN_DATA,
            B.SP2DK_NIP_AR,
            B.SP2DK_NAMA_AR,
            B.KONSELING_NIP_AR,
            B.KONSELING_NAMA_AR,
            B.USUL_RIKSUS_NIP_AR,
            B.USUL_RIKSUS_NAMA_AR,
            B.POTENSI_NIP_AR,
            B.POTENSI_NAMA_AR,
            B.REALISASI_NIP_AR,
            B.REALISASI_NAMA_AR,
            B.KETERANGAN_NIP_AR,
            B.KETERANGAN_NAMA_AR,
            B.RESPON_NIP_AR,
            B.RESPON_NAMA_AR,
            B.CLOSED_NIP_AR,
            B.CLOSED_NAMA_AR 
            FROM DATA_ROYALTI A LEFT JOIN TINDAK_LANJUT B ON (A.ID_DATA=B.ID_DATA)";
        $query=$this->db->query($qry);
        $result = $query->result_array();
        return $result;
    }
    
}
?>

