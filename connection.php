
<?php
ob_start();
$host = 'sql12.freemysqlhosting.net';
$username = 'sql12310963';
$password = 'PCnld6A69N';
$dbname = 'sql12310963';
$port = '  3306';

// mysqli_connect(hostname, username, pass, database )



// Create connection
$con = mysqli_connect($host, $username, $password, $dbname , $port);

// Check connection
if (!$con) {
   echo 'Error';
}
session_start();

?>

<!-- with PDO -->

<!--  
 <?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=travel', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?> -->