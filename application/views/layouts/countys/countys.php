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
                        <th style="width: 70%">County</th>
                        <th style="width: 10%" id="delete_button">Delete</th>
                    </tr>
                </thead>

                <tbody>
<?php
                    foreach($countys as $county)
                    {
                        $class = "btn btn-danger btn-xs";
                        $onClick = "DisplayMessage(" . $county->id . ", '" . $county->county_name . "'" . ");";

                        // Define attributes for delete button
                        $data = array('class' => $class, 'name' => 'submit', 'id' => 'cmdDelete', 'value' => 'Delete', 'onclick' => $onClick);

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

            function DisplayMessage(id, title)
            {
                if(confirm('Are you sure you want to delete "' + title + '"?'))
                {
                    window.location = "<?php echo base_url(); ?>countys/delete_record/" + id;
                }
                else
                {
                    return false;
                }
            }

        </script>

    </body>

</html>

