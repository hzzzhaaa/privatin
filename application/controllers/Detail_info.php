<?php

class Detail_info extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Privat.in';
        $data['user'] = $this->db->get_where('student_acc', ['email' => $this->session->userdata('email')])->row_array();

        $data['teacher'] = $_GET['teacher'];
        $this->load->model('teacher_model');
        $this->teacher_model->setTeacher($data);
        $data['infoTeacher'] = $this->teacher_model->getInfo();

        $this->load->view('student/detail_info', $data);
    }
}
