<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'Anthony';

/*** mysql password ***/
$password = 'anthony2299';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=testhabbiso", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database'."<br>";

}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
