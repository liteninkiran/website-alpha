<?php

    class Countys extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            if(!$this->session->userdata('logged_in'))
            {
                //$this->session->set_flashdata('no_access', 'You are not allowed access to this page before loggin in (controller)');
                //redirect('home');
            }
        }

        public function index()
        {
            $data['countys'] = $this->County_model->getCountys('county_name');
            $this->load->view('layouts/countys/countys', $data);
        }

        public function delete_record()
        {
            $id = $this->uri->segment(3);
            echo $id;
            //$this->deleteCounty($id);
            //redirect(base_url() . "countys");
        }
    }





?>