<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newcalendar extends CI_Controller {

    # This is the index page: http://localhost/ci/index.php?home
    # The news form
    #public function index() {

        # load the news page
        #$this->load->view ('struct/loggedinheader');
        # $this->load->view ('newcalendar');
        #$this->load->view ('struct/footer');
    #}

    function display($year = null, $month = null) {

        if (!$year) {
            $year = date ('Y');
        }
        if (!$month) {
            $month = date ('m');
        }
        $this->load->model('Newcalendar_Model');

        if ($day = $this->input->post('day')) {
            $this->Newcalendar_Model->add_calendar_data(
                "$year-$month-$day",
                $this->input->post('data')
            );
        }
        $data['calendar'] = $this->Newcalendar_Model->generate($year, $month);

        $this->load->view('newcalendar', $data);
    }
}
