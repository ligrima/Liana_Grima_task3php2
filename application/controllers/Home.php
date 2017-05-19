<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	# This is the index page: http://localhost/ci/index.php?home
	public function index ()
	{
		$this->load->view ('struct/loggedoutheader');

		# This command loads a view from the application/views folder
		$this->load->view('home');

		$this->load->view ('struct/footer');

	}


	# This is just to test the database connection
	public function language () {

		# To use a model, load it
		$this->load->model ('users_model');

		# Put the language (from the database) in a variable
		$lang = $this->users_model->get_language ();

		# Print the language
		var_dump ($lang);

	}
}