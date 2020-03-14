
<!DOCTYPE html>

<html lang="en">

    <head>
    	<meta charset="UTF-8">
    	<title>User View</title>
    </head>

    <body>

        <h1>
<?php 

            foreach($users as $u)
            {
                echo $u->id . '<br>';
                echo $u->username . '<br>';
                echo $u->first_name . '<br>';
            }

?>

        </h1>
	
    </body>

</html>


