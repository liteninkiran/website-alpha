<?php 

    class Users extends CI_Controller
    {
        public function show($userId)
        {
            // Load the user model - No longer required as the model has been added to the autoload file
            // $this->load->model('User_model');

            // Retreive all user records
            $rs = $this->User_model->getUser($userId);

            // Store data to be transferred to the view
            $data['users'] = $rs;

            // Load the view
            $this->load->view('user_view', $data);
        }

        public function insert()
        {
            $change_user = 18;
            $create_user = 18;
            $email = "kiran@domain.com";
            $first_name = "Kiran";
            $last_name = "Anand";
            $password = "xyz";
            $username = "kiran.anand";

            $this->User_model->createUser
            ([
                'change_user' => $change_user,
                'create_user' => $create_user,
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'password' => $password,
                'username' => $username
            ]);
        }

        public function update()
        {
            // Define the record we wish to update
            $id = 18;

            // Define the updates
            $first_name = "Kiran";
            $last_name = "Anand";
            $username = 'kiran.anand';

            $change_date = date("Y-m-d H:i:s");
            $change_user = 18;

            // Store in array
            $data = 
                [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'username' => $username,
                    'change_user' => $change_user,
                    'change_date' => $change_date
                ];

            // Perform update
            $this->User_model->updateUser($id, $data);
        }

        public function delete()
        {
            $this->User_model->deleteUser(19);
        }

        public function login()
        {
            // Set validation rules
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

            // Check rules
            if($this->form_validation->run() == FALSE)
            {
                // Store the errors
                $data = array
                    (
                        'errors' => validation_errors()
                    );

                // Set the flashdata
                $this->session->set_flashdata($data);

                // Re-direct back to login screen
                redirect('home');
            }
            else
            {
                // Store the username and password
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                // Check the username and passwords match
                $user = $this->User_model->checkLogin($username, $password);

                // Check we have a valid user id
                if($user)
                {
                    // Set the session data variable
                    $user_data = array
                        (
                        'user_id' => $user->id,
                        'username' => $username,
                        'full_name' => $user->first_name . ' ' . $user->last_name,
                        'logged_in' => true
                        );

                    // Set session data
                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('login_success', 'You are now logged in');

                    $data['main_view'] = "admin_view";
                    $this->load->view('layouts/main', $data);

                    // Re-direct to login page
                    redirect('home');
                }
                else
                {
                    // Passwords don't match, re-direct to login page
                    $this->session->set_flashdata('login_failed', 'Username and password combination do not match or user does not exist');
                    redirect('home');
                }
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('home');
        }

        public function register()
        {

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('last_name', 'First Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');


            if($this->form_validation->run() == FALSE)
            {
                $data['main_view'] = 'users/register_view';
                $this->load->view('layouts/main', $data);
            }
            else
            {

                if($this->User_model->create_user())
                {
                    $this->session->set_flashdata('user_registered', 'User has been registered');
                    redirect('home/index');
                }
            }
        }
    }
?>


