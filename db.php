
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
//$url = parse_url(getenv("mysql://b1d65545ce4e8b:ea2f8a3b@us-cdbr-east-06.cleardb.net/heroku_1e9cc41f48fdcdc?reconnect=true"));

  <?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("sql12.freemysqlhosting.net","sql12614154","JI7dVk6zvR","sql12614154");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

