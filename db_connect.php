    <?php
    //four variables to connect to database
    $host = "localhost";
    $username = "id17991681_piotr";
    $user_pass = "Ny9|FM&\Zm9vRvwJ";
    $database_in_use = "id17991681_arisco";
    //create a database connection instance
    $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    ?>
