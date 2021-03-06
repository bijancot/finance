<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Sparepart extends CI_Model
{
    public function getById($id)
    {
        return $this->db->get_where('master_sparepart', ['sparepart_id' => $id])->row();
    }
    public function getSparepart()
    {
        $this->db->select('*');
        $this->db->from('master_sparepart');
        $this->db->where('deleted_date IS NULL', NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($sparepart_nama, $sparepart_km, $sparepart_bulan)
    {
        $arr = [
            'sparepart_nama'    => $sparepart_nama,
            'sparepart_km'      => $sparepart_km,
            'sparepart_bulan'   => $sparepart_bulan
        ];
        $this->db->insert('master_sparepart', $arr);
        return "Berhasil insert";
    }

    public function editPart($data)
    {
        $this->db->where('sparepart_id', $data['sparepart_id']);
        $this->db->update('master_sparepart', $data);

        //$hasil = $this->db->query("Update master_sparepart SET sparepart_nama='$nama', sparepart_km='$km', sparepart_bulan='$bulan'  WHERE sparepart_id='$id'");
    }
}
