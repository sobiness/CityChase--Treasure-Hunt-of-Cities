<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
    $con = mysqli_connect("us-cdbr-east-06.cleardb.net","b1d65545ce4e8b","ea2f8a3b","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
