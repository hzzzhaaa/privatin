<?php

class Student_model extends CI_model
{

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('student_acc', $data);
        return $this->db->affected_rows();
    }
}
