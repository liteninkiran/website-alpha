
<nav class="navbar navbar-default">

    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <!-- Burger button -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Display user's name -->
            <a class="navbar-brand" href="#"><?php echo $this->session->userdata('full_name'); ?></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <!-- Left hand menu -->
            <ul class="nav navbar-nav">

                <!-- Counties -->
                <li><a href="<?php echo base_url();?>countys">Counties</a></li>

                <!-- Dropdown -->
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>

                </li>

            </ul>

            <!-- Right hand menu -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Link -->
                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>

            </ul>
        </div>
    </div>

</nav>

