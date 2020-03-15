<?php 

/*
    // Retrieve all user records - method #1
    $rs = $this->db->get('users');

    // Retrieve all user records - method #2
    $rs = $this->db->query("SELECT * FROM users As u");
*/

    class User_model extends CI_Model
    {

        public function getUsers()
        {
            // Retrieve all user records
            $rs = $this->db->get('user');

            return $rs->result();
        }

        public function getUser($userId)
        {
            // Limit to one record
            $this->db->where('id', $userId);

            // Retrieve user record
            $rs = $this->db->get('user');

            return $rs->result();
        }

        public function createUser($data)
        {
            $this->db->insert('user', $data);
        }

        public function updateUser($userId, $data)
        {
            $this->db->where('id', $userId);
            $this->db->update('user', $data);
        }

        public function deleteUser($userId)
        {
            $this->db->where('id', $userId);
            $this->db->delete('user');
        }

        public function checkLogin($username, $password)
        {
            // Identify user. Username is unique.
            $this->db->where('username', $username);

            // Store result
            $result = $this->db->get('user');

            // Check we have one row. Record may not exist but we should never have 2 or more rows.
            if($result->num_rows() == 1)
            {
                // Get the row
                $row = $result->row();

                // Store the password
                $db_password = $row->password;

                // Verify password
                if($password == $db_password /*password_verify($password, $db_password)*/ )
                {
                    // Passwords match - return the ID
                    return $row;
                }
                else
                {
                    // Passwords don't match - return FALSE
                    return false;
                }
            }
            else
            {
                // User not found in database
                return false;
            }
        }
    }


    // public function get_users($user_id, $username){


        // $this->db->where([

        //     'id' => $user_id, 
        //     'username' => $username

        //     ]);


     //     $query = $this->db->get('users');

     //     return $query->result();

    // $this->db->where('id', $user_id);

    // $query = $this->db->query("SELECT * FROM users");



    // return $query->num_fields(); // this will give me the columns count


    // return $query->num_rows(); // this will give me the rows count



     // $query = $this->db->get('users');

     // return $query->result();


        // $config['hostname'] = "localhost";
        // $config['username'] = "root";
        // $config['password'] = "";
        // $config['database'] = "errand_db";

        // $config_2['hostname'] = "localhost";
        // $config_2['username'] = "root_2";
        // $config_2['password'] = "";
        // $config_2['database'] = "errand_db_2";


        // $connection = $this->load->database($config);

        // $connection_2 = $this->load->database($config_2);





    // }




    // public function update_users($data, $id) {

    //     $this->db->where(['id'=> $id]);
    //     $this->db->update('users', $data);



    // }



    // public function delete_users($id) {



    //     $this->db->where(['id'=> $id]);
    //     $this->db->delete('users');


    // }


/*
    public function create_user() {


        $options = ['cost'=> 12];

        $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);


        $data = array(

            'first_name'       => $this->input->post('first_name'), 
            'last_name'       => $this->input->post('last_name'), 
            'email'            => $this->input->post('email'), 
            'username'        => $this->input->post('username'), 
            'password'       => $encripted_pass
    
            );



        $insert_data = $this->db->insert('users', $data);

        return $insert_data;



    }


*/


 ?>
 