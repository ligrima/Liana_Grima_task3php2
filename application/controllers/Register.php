<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	# This is the index page: http://localhost/ci/index.php?home
    # The news form
    public function registerpage() {

        # load the news page
        $this->load->view ('struct/loggedinheader');
        $this->load->view ('register');
        $this->load->view ('struct/footer');
    }
}
