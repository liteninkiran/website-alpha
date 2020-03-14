
<?php

        // Check if user is logged in
        if($this->session->userdata('logged_in'))
        {
            // Show a logout option
            echo '<h2>Logout</h2>';

            // Display messages
            echo '<p class="bg-success">';

            // Display login message
            if($this->session->flashdata('login_success')){echo $this->session->flashdata('login_success');}

            // End display messages
            echo '</p>';

            // Show the username for clarity
            echo '<p>You are logged in as ' . $this->session->userdata('username') . '</p>';

            // Create an form open tag <form>
            echo form_open('users/logout');

            // Define values for button
            $data = array('class'=> 'btn btn-primary', 'name'=> 'submit', 'value' => 'Logout');

            // Show a submit button
            echo form_submit($data);

            // Create an form close tag </form>
            echo form_close();
        }
        else
        {
            // Show a login option
            echo '<h2>Login Form</h2>';

            // Display validation messages
            if($this->session->flashdata('errors')){echo $this->session->flashdata('errors');}

            // Display login messages
            echo '<p class="bg-danger">';

            if($this->session->flashdata('login_failed')){echo $this->session->flashdata('login_failed');}
            if($this->session->flashdata('no_access')){echo $this->session->flashdata('no_access');}

            // End display login messages
            echo '</p>';

            /* ------------------------------- Form Start ----------------------------- */

            // Define formattributes
            $attributes = array('id'=>'login_form', 'class'=> 'form_horizontal');

            // Create an form open tag <form>
            echo form_open('users/login', $attributes);

            /* ------------------------------- User Name ----------------------------- */

            // Open a div
            echo '<div class="form-group">';

            // Define values for control
            $data = array('class' => 'form-control', 'name' => 'username', 'placeholder' => 'Enter Username');

            // Display control and label
            echo form_label('Username');
            echo form_input($data);

            // Close the div
            echo '</div>';

            /* ------------------------------- Password ----------------------------- */

            // Open a div
            echo '<div class="form-group">';

            // Define values for control
            $data = array('class' => 'form-control', 'name' => 'password', 'placeholder' => 'Enter Password');

            // Display control and label
            echo form_label('Password');
            echo form_password($data);

            // Close the div
            echo '</div>';

            /* ------------------------------- Login / Submit ----------------------------- */

            // Open a div
            echo '<div class="form-group">';

            // Define values for control
            $data = array('class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Login');

            // Display control
            echo form_submit($data);

            // Close the div
            echo '</div>';

            /* ------------------------------- Form End ----------------------------- */

            // Create an form close tag </form>
            echo form_close();
        }

?>

