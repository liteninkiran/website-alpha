<!DOCTYPE html>
<html>

    <head>
        <title>Kiran's Web Portal</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
            <?php $this->load->view('users/login_view') ?>
        </div>

    </body>

</html>