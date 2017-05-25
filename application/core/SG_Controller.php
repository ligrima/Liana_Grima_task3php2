<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SC_Controller extends CI_Controller {

    # This is the class constructor
    # used to get the data from its parent
    function __construct () {

        # Inherit the parent class' properties
        parent::__construct ();

        $this->check_login ();

    }

    # Builds a standard page
    # This function should only be available to this
    # class and its children

    # Check if the user is logged in
    protected function check_login ()
    {
    #if the user is logged in
		if ($this->session->userdata ('user_id') != NULL)
    {
        # if the user is on the login/register pages
        if ($this->router->class == 'users')
        {
            # only redirect if the user is not on the logout page
            if ($this->router->method != 'logout')
            {
                redirect ("home");
            }
        }
        # if the user is logged out
		}
    else
    {
        # if the user is not on the login/register pages
        if ($this->router->class != 'users')
        {
            redirect ("logout");
        }
    }
  }

}
