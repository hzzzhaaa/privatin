<?php

class Pembayaran_model extends CI_model
{
    public function upload()
    {

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('bukti_pembayaran')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload)
    {
        $this->db->query("SELECT * FROM booking WHERE `id`='$this->booking_list'")->result_array();
        $nama_file = $upload['file']['file_name'];
        $this->db->set('bukti_bayar', $nama_file);
    }
}
