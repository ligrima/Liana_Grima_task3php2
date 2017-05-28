<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	# This is the index page: http://localhost/ci/index.php?home
    # The news form
    public function index() {

        # load the news page
        $this->load->view ('struct/loggedinheader');
        $this->load->view ('calendar');
        $this->load->view ('struct/footer');
    }
}
