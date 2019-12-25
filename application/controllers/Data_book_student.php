<?php

class Data_book_student extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Privat.in';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();

        $data['teacher'] = $_GET['teacher'];
        $this->load->model('teacher_model');
        $this->teacher_model->setTeacher($data);
        $data['infoTeacher'] = $this->teacher_model->getInfo();

        $this->load->view('student/data_book_student', $data);
    }

    public function form_belajar()
    {
        $data['teacher'] = $_GET['teacher'];
        $this->load->model('teacher_model');
        $this->teacher_model->setTeacher($data);
        $infoTeacher = $this->teacher_model->getInfo();
        $student_id = $this->session->userdata('id');
        $teacher_id = $infoTeacher[0]['id'];

        $this->form_validation->set_rules('namaLengkap', 'NamaLengkap', 'required|trim');
        $this->form_validation->set_rules('jenjangAjar', 'JenjangAjar', 'required');
        $this->form_validation->set_rules('mataPelajaran', 'MataPelajaran', 'required');
        $this->form_validation->set_rules('alamatBelajar', 'AlamatBelajar', 'required|trim');
        $this->form_validation->set_rules('tanggalBelajar', 'TanggalBelajar', 'required|trim');
        $this->form_validation->set_rules('jamBelajar', 'JamBelajar', 'required|trim');
        $this->form_validation->set_rules('lamaBelajar', 'LamaBelajar', 'required|trim');
        $this->form_validation->set_rules("info", 'Info', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Data Diri Guru';
            $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('teacher/data_book_student', $data);
        } else {
            $data = [
                'nama' => $this->input->post('namaLengkap'),
                'kelas' => $this->input->post('jenjangAjar'),
                'mapel' => $this->input->post('mataPelajaran'),
                'lokasi_bljr' => $this->input->post('alamatBelajar'),
                'tgl_belajar' => date_format(date_create($this->input->post('tanggalBelajar')), 'Y-m-d'),
                'jam_bljr' => $this->input->post('jamBelajar'),
                'sesi' => $this->input->post('lamaBelajar'),
                'informasi' => $this->input->post('info'),
                'status' => 1,
                'id_student_acc' => $student_id,
                'id_teacher_acc' => $teacher_id
            ];

            $this->db->insert('booking', $data);
            #$this->db->insert('book', $student_id);
            redirect('student');
        }
    }
}
