<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = '192.168.1.30';
$user = 'root';
$pass = 'w';
$conn = new mysqli($host, $user, $pass);


if ($conn->connect_error) {
    die("mysqli connection failed: " . $conn->connect_error."\n\n");
} else {
    echo "Connected to MySQL using mysqli successfully!\n\n";
}

$conn2 = mysql_connect($host,$user,$pass);
if (!$conn2) {
    die("legacy mysql connection failed: " . mysql_error()."\n\n");
} else {
    echo "Connected to MySQL using legacy mysql functions successfully!\n\n";
}



?>