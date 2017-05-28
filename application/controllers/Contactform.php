<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactform extends CI_Controller {

	# This is the index page: http://localhost/ci/index.php?home
    # The news form
    public function index() {

        # load the news page
        $this->load->view ('struct/loggedinheader');
        $this->load->view ('contactform');
        $this->load->view ('struct/footer');
    }
}
