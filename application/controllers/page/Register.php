<?php

class Register extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view register
        $this->load->view("page/register");
	}
}