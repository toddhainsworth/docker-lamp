<html>
<head>
<title>Hello world!</title>
</head>
<body>
<h2>Hello world, from the Dockerized LAMP stack!</h2>
<?php echo "Hello from PHP ;)"; ?>

<?php
$serverName = 'mysql';
$userName = 'lamp';
$password = 'lamp';
$dbName = 'lamp';

$link = new mysqli($serverName, $userName, $password, $dbName);

if ($link->connect_error) {
  printf("Connect failed: %s\n", $link->connect_error);
  exit();
}

echo "Got a connection to MySQL!";
?>
</body>
</html>
