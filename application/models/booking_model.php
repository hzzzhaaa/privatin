<?php

class Booking_model extends CI_model
{
    var $booking_list;

    public function get_data($id_teacher_acc)
    {
        return $this->db->get_where('booking', array('id_teacher_acc' => $id_teacher_acc))->result_array();
    }

    public function get_student($id_student_acc)
    {
        return $this->db->get_where('booking', array('id_student_acc' => $id_student_acc))->result_array();
    }

    public function get_bookinglist($table)
    {
        return $this->db->get($table);
    }

    public function setBookinglist($booking_list)
    {
        $this->booking_list = $booking_list['booking_list'];
    }

    public function getInfo()
    {
        return $this->db->query("SELECT * FROM booking WHERE `id`='$this->booking_list'")->result_array();
    }
}
