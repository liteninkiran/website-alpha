<?php

    class Towns extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            if(!$this->session->userdata('logged_in'))
            {
                $this->session->set_flashdata('no_access', 'You are not allowed access to this page before loggin in (controller)');
                redirect('home');
            }
        }

        public function index()
        {
            $this->load->view('layouts/towns/towns');
        }
    }





?>