<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	# This is the index page: http://localhost/ci/index.php?home
    # The news form
    public function profilepage() {

        # load the news page
        $this->load->view ('struct/loggedinheader');
        $this->load->view ('profile');
        $this->load->view ('struct/footer');
    }
}
