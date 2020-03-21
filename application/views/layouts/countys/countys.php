<!DOCTYPE html>
<html>

    <head>

        <title>Counties</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


        <style>
            #delete_button
            {
                text-align: center;   
            }

        </style>

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
<?php
            // Create button
            echo form_submit(array('class' => 'btn btn-primary display:inline-block', 'name' => 'submit', 'value' => 'Create'));
?>
            <table class="table table-striped table-hover table-bordered table-condensed">

                <thead>
                    <tr>
                        <th style="width: 10%">ID</th>
                        <th style="width: 80%">County</th>
                        <th style="width: 10%" id="delete_button">Delete</th>
                    </tr>
                </thead>

                <tbody>
<?php
                    foreach($countys as $county)
                    {
                        // Define attributes for delete button
                        $data = array('class' => 'btn btn-danger btn-xs', 'name' => 'submit', 'value' => 'Delete', 'id' => $county->id, 'onclick'=>'return DisplayMessages(this);');

                        echo '<tr>';
                        echo '<td>' . $county->id . '</td>';
                        echo '<td>' . $county->county_name . '</td>';
                        echo '<td id="delete_button">' . form_submit($data) . '</td>';
                        echo '</tr>';
                    }
?>
                </tbody>

            </table>

        </div>

        <script type="text/javascript">

            function DisplayMessages()
            {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this record?"))
                {
                    window.location = "<?php echo base_url(); ?>countys/delete_record/" + id;
                }
                else
                {
                    return false;
                }
            }


            /*
            $(document).ready(function()
            {
                $('#xxx').click(function()
                {
                    var id = $(this).attr("id");
                    if(confirm("Are you sure you want to delete this record?"))
                    {
                        window.location = "<?php echo base_url(); ?>countys/delete_record/" + id;
                    }
                    else
                    {
                        return false;
                    }
                });
            });
            */
        </script>

    </body>

</html>

