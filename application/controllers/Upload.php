<?php

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $data['title'] = 'Data Pesanan';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();

        $data['booking_list'] = $_GET['booking_list'];
        $this->load->model('booking_model');
        $this->booking_model->setBookinglist($data);
        $data['infoBooking'] = $this->booking_model->getInfo();

        $this->load->view('student/payment', $data);
    }

    public function upload_payment()
    {
        $data['booking_list'] = $_GET['booking_list'];
        $this->load->model('booking_model');
        $this->booking_model->setBookinglist($data);
        $data['infoBooking'] = $this->booking_model->getInfo();
        $booking_id = $data['infoBooking']['id'];
        var_dump($booking_id);
        die;

        if ($this->input->post('submit')) {
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
            if ($return['result'] == "success") {
                $nama_file = $return['file']['file_name'];
                $this->db->set('bukti_bayar', $nama_file);
                $this->db->where('id', $booking_id);
                $this->db->update('booking');

                redirect('student/accepted');
            } else { // Jika proses upload gagal
                $data['message'] = $return['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
        $this->load->view('student/upload', $data);
    }
}
