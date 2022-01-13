<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_role'))) {
            redirect('/');
        }

        $this->load->library('form_validation');
        $this->load->model('M_Sparepart');
    }

    public function aksiTambahPart()
    {
        $data = [

            "sparepart_nama"     => $_POST['jenis'],
            "sparepart_km"       => $_POST['km-txt'],
            "sparepart_bulan"    => $_POST['bulan-txt'],
            "sparepart_ukuran"    => $_POST['ukuran'],
            "sparepart_detail"    => $_POST['detail']
        ];

        $this->db->insert('master_sparepart', $data);
        $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");

        //$this->M_Sparepart->insert($sparepart_nama, $sparepart_km, $sparepart_bulan);
        redirect('admin/master_sparepart');
    }

    function aksiEditPart()
    {
        $data = [
            "sparepart_id"       => $this->input->post('sparepart_id'),
            "sparepart_nama"     => $this->input->post('jenis2'),
            "sparepart_km"       => $this->input->post('km-txt2'),
            "sparepart_bulan"    => $this->input->post('bulan-txt2'),
            "sparepart_ukuran"    => $this->input->post('ukuran2'),
            "sparepart_detail"    => $this->input->post('detail2')
        ];

        $this->M_Sparepart->editPart($data);

        redirect('admin/master_sparepart');
    }

    public function aksiHapus()
    {
        $data = [
            "sparepart_id"       => $this->input->post('sparepart_id'),
            "deleted_date"  => date('Y-m-d H:i:s')
        ];

        $this->M_Sparepart->editPart($data);

        redirect('admin/master_sparepart');
    }
}
