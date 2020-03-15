<!DOCTYPE html>
<html>

    <head>
        <title>Counties</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>

    <body>

<?php
        if(!$this->session->userdata('logged_in'))
        {
            $this->session->set_flashdata('no_access', 'You are not allowed access to this page before loggin in');
            redirect('home');
        }

        include(dirname(__FILE__)."/../navbar.php");
?>
        <div class="container">
            <h1>Counties</h1>
        </div>

    </body>

</html>

