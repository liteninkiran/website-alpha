<!DOCTYPE html>
<html>

    <head>
        <title>Kiran's Web Portal</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>

    <body>

<?php
        if($this->session->userdata('logged_in'))
        {
            include("navbar.php");
            $view = 'admin_view';
        }
        else
        {
            $view = 'users/login_view';
        }
?>
        <div class="container">
            <?php $this->load->view($view); ?>
        </div>

    </body>

</html>

