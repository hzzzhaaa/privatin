<?php

class Teacher_model extends CI_model
{
    var $teacher;

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function setTeacher($teacher)
    {
        $this->teacher = $teacher['teacher'];
    }

    public function getInfo()
    {
        return $this->db->query("SELECT * FROM teacher_acc WHERE `id`='$this->teacher'")->result_array();
    }
}
