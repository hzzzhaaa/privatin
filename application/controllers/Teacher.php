<?php

class Teacher extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Profil Teacher';
        $data['user'] = $this->db->get_where('teacher_acc', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('teacher/index', $data);
    }

    public function form_teacher()
    {
        $this->form_validation->set_rules('namaLengkap', 'NamaLengkap', 'required|trim');
        $this->form_validation->set_rules('jenisKelamin', 'JenisKelamin', 'required');
        $this->form_validation->set_rules('tanggalLahir', 'TanggalLahir', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required|trim');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('kodePos', 'KodePos', 'required|trim');
        $this->form_validation->set_rules('pendTerakhir', 'PendTerakhir', 'required|trim');
        $this->form_validation->set_rules('sd', 'Sd', 'required|trim');
        $this->form_validation->set_rules('smp', 'Smp', 'required|trim');
        $this->form_validation->set_rules('sma', 'Sma', 'required|trim');
        $this->form_validation->set_rules('jenjangAjar', 'jenjangAjar', 'required');
        $this->form_validation->set_rules('mataPelajaran', 'MataPelajaran', 'required');
        $this->form_validation->set_rules('fee', 'Fee', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required|trim');
        $this->form_validation->set_rules('pengalaman', 'Pengalaman', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Data Diri Guru';
            $data['user'] = $this->db->get_where('teacher_acc', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('teacher/form_teacher', $data);
        } else {
            $data = [
                'name' => $this->input->post('namaLengkap'),
                'jenis_kelamin' => $this->input->post('jenisKelamin'),
                'tgllhr_teacher' => date_format(date_create($this->input->post('tanggalLahir')), 'Y-m-d'),
                'no_telp' => $this->input->post('noTelp'),
                'kel_tinggal' => $this->input->post('kelurahan'),
                'kec_tinggal' => $this->input->post('kecamatan'),
                'kota_tinggal' => $this->input->post('kota'),
                'kodepos' => $this->input->post('kodePos'),
                'pend_trk' => $this->input->post('pendTerakhir'),
                'rwyt_sd' => $this->input->post('sd'),
                'rwyt_smp' => $this->input->post('smp'),
                'rwyt_sma' => $this->input->post('sma'),
                'jenjang_ajar' => $this->input->post('jenjangAjar'),
                'mapel' => $this->input->post('mataPelajaran'),
                'fee' => $this->input->post('fee'),
                'aktivitas' => $this->input->post('aktivitas'),
                'pglmn_ajar' => $this->input->post('pengalaman')
            ];

            $this->db->insert('teacher', $data);
            redirect('teacher');
        }
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('teacher_acc', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('jenisKelamin', 'JenisKelamin', 'required');
        $this->form_validation->set_rules('tanggalLahir', 'TanggalLahir', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required|trim');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('kodePos', 'KodePos', 'required|trim');
        $this->form_validation->set_rules('pendTerakhir', 'PendTerakhir', 'required|trim');
        $this->form_validation->set_rules('sd', 'Sd', 'required|trim');
        $this->form_validation->set_rules('smp', 'Smp', 'required|trim');
        $this->form_validation->set_rules('sma', 'Sma', 'required|trim');
        $this->form_validation->set_rules('jenjangAjar', 'jenjangAjar', 'required');
        $this->form_validation->set_rules('mapel', 'mapel', 'required');
        $this->form_validation->set_rules('fee', 'Fee', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required|trim');
        $this->form_validation->set_rules('pengalaman', 'Pengalaman', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('teacher/edit', $data);
        } else {

            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $jenis_kelamin = $this->input->post('jenisKelamin');
            $tgllhr_teacher = date_format(date_create($this->input->post('tanggalLahir')), 'Y-m-d');
            $no_telp = $this->input->post('noTelp');
            $kel_tinggal = $this->input->post('kelurahan');
            $kec_tinggal = $this->input->post('kecamatan');
            $kota_tinggal = $this->input->post('kota');
            $kodepos = $this->input->post('kodePos');
            $pend_trk = $this->input->post('pendTerakhir');
            $rwyt_sd = $this->input->post('sd');
            $rwyt_smp = $this->input->post('smp');
            $rwyt_sma = $this->input->post('sma');
            $jenjang_ajar = $this->input->post('jenjangAjar');
            $mapel = $this->input->post('mapel');
            $fee = $this->input->post('fee');
            $aktivitas = $this->input->post('aktivitas');
            $pglmn_ajar = $this->input->post('pengalaman');

            $this->db->set('name', $name);
            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('tgl_lahir', $tgllhr_teacher);
            $this->db->set('no_telp', $no_telp);
            $this->db->set('kel_tinggal', $kel_tinggal);
            $this->db->set('kec_tinggal', $kec_tinggal);
            $this->db->set('kota_tinggal', $kota_tinggal);
            $this->db->set('kodepos', $kodepos);
            $this->db->set('pend_trk', $pend_trk);
            $this->db->set('rwyt_sd', $rwyt_sd);
            $this->db->set('rwyt_smp', $rwyt_smp);
            $this->db->set('rwyt_sma', $rwyt_sma);
            $this->db->set('jenjang_ajar', $jenjang_ajar);
            $this->db->set('mapel', $mapel);
            $this->db->set('fee', $fee);
            $this->db->set('aktivitas', $aktivitas);
            $this->db->set('pglmn_ajar', $pglmn_ajar);

            $this->db->where('email', $email);
            $this->db->update('teacher_acc');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been updated!>');

            redirect('teacher');
        }
    }

    public function pemesanan()
    {
        $data['title'] = 'Pemesanan';
        $data['user'] = $this->db->get_where('teacher_acc', ['email' => $this->session->userdata('email')])->row_array();
        $teacher_id = $data['user']['id'];

        $this->load->model('booking_model');
        $data['booking_list'] = $this->booking_model->get_data($teacher_id);

        $this->load->view('teacher/pemesanan', $data);
    }

    public function terima($booking_id)
    {
        $this->db->set('status', 2);
        $this->db->where('id', $booking_id);
        $this->db->update('booking');
    }
}
