<?php

class Student extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['title'] = 'Privat.in';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();

        $data['teacher'] = $this->teacher_model->get_data('teacher_acc')->result();

        $this->load->view('student/index', $data);
    }

    public function form_student()
    {
        $this->form_validation->set_rules('jenisKelamin', 'JenisKelamin', 'required');
        $this->form_validation->set_rules('tanggalLahir', 'TanggalLahir', 'required');
        $this->form_validation->set_rules('alamatRumah', 'AlamatRumah', 'required|trim');
        $this->form_validation->set_rules('jenjPendidikan', 'JenjPendidikan', 'required|trim');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required|trim');
        $id = $this->session->userdata('email');

        #$id = $this->db->get_where('student_acc', ['id' => $this->session->userdata('id')])->row_array();
        #var_dump($id);
        #die;

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Data Diri';
            $this->load->view('student/form_student', $data);
        } else {

            $jenis_kelamin = $this->input->post('jenisKelamin');
            $tgl_lahir = date_format(date_create($this->input->post('tanggalLahir')), 'Y-m-d');
            $alamat = $this->input->post('alamatRumah');
            $jenjang_pend = $this->input->post('jenjPendidikan');
            $no_telp = $this->input->post('noTelp');

            #$data = [
            # 'jenis_kelamin' => $this->input->post('jenisKelamin'),
            # 'tgl_lahir' => date_format(date_create($this->input->post('tanggalLahir')), 'Y-m-d'),
            # 'alamat' => $this->input->post('alamatRumah'),
            # 'jenjang_pend' => $this->input->post('jenjPendidikan'),
            # 'no_telp' => $this->input->post('noTelp')
            #];

            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('alamat', $alamat);
            $this->db->set('jenjang_pend', $jenjang_pend);
            $this->db->set('no_telp', $no_telp);

            $this->db->where('id', $id);
            $this->db->update('student_acc');


            #$this->student_model->update($data, $id);
            redirect('student');

            #$where = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')]);
        }
    }

    public function profil_student()
    {
        $data['title'] = 'Profil Saya';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('student/profil', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'FullName', 'required|trim');
        $this->form_validation->set_rules('jenisKelamin', 'JenisKelamin', 'required');
        $this->form_validation->set_rules('tanggalLahir', 'TanggalLahir', 'required');
        $this->form_validation->set_rules('alamat', 'AlamatRumah', 'required|trim');
        $this->form_validation->set_rules('jenjangPend', 'JenjangPend', 'required|trim');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('student/edit', $data);
        } else {

            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $jenis_kelamin = $this->input->post('jenisKelamin');
            $tgl_lahir = date_format(date_create($this->input->post('tanggalLahir')), 'Y-m-d');
            $alamat = $this->input->post('alamat');
            $jenjang_pend = $this->input->post('jenjangPend');
            $no_telp = $this->input->post('noTelp');

            $this->db->set('name', $name);
            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('alamat', $alamat);
            $this->db->set('jenjang_pend', $jenjang_pend);
            $this->db->set('no_telp', $no_telp);

            $this->db->where('email', $email);
            $this->db->update('student_acc');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been updated!>');

            redirect('student/profil_student');
        }
    }

    public function detail_info()
    {
        $data['title'] = 'Privat.in';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('student/detail_info', $data);
    }

    public function request()
    {
        $data['title'] = 'Pemesanan';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();
        $student_id = $data['user']['id'];

        $this->load->model('booking_model');
        $data['booking_list'] = $this->booking_model->get_student($student_id);

        $this->load->view('student/pemesanan', $data);
    }

    public function accepted()
    {
        $data['title'] = 'Pemesanan';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();
        $student_id = $data['user']['id'];

        $this->load->model('booking_model');
        $data['booking_list'] = $this->booking_model->get_student($student_id);

        $this->load->view('student/accepted', $data);
    }
}
