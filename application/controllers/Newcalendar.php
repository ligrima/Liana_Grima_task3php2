<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newcalendar extends CI_Controller {


    function display($year = null, $month = null) {

        $this->load->model('Newcalendar_Model');
        $data['calendar'] = $this->Newcalendar_Model->generate($year, $month);

        $this->load->view('newcalendar', $data);
    }
}
