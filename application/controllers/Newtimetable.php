<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newtimetable extends CI_Controller {


function index(/*$year = null, $month = null*/) {
    $this->load->library('table');

$data = array(
        array(' ','Lsn1', 'Lsn2', 'Lsn3','Lsn4', 'Lsn5', 'Lsn6', 'Lsn7', 'Lsn8','Lsn9', 'Lsn10'),
        array('Mon'),
        array('Tue'),
        array('Wed'),
        array('Thurs'),
        array('Fri'),

);

echo $this->table->generate($data);

        /*if (!$year) {
            $year = date ('Y');
        }
        if (!$month) {
            $month = date ('m');
        }
        $this->load->model('Newtimetable_Model');

        if ($day = $this->input->post('day')) {
            $this->Newtimetable_Model->add_calendar_data(
                "$year-$month-$day",
                $this->input->post('data')
            );
        }
        $data['calendar'] = $this->Newtimetable_Model->generate($year, $month);


        $this->load->view ('struct/loggedinheader');
        $this->load->view('newtimetable', $data);

        $this->load->view ('struct/footer');*/
    }
}
