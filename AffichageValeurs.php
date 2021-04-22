<?php
/*
$query = "SELECT * FROM eleves";
$result = mysqli_query($query);

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
}
*/

include 'Connexion.php';



$query = 'select * from eleves';
$result = $dbh->query($query);


foreach ($result as $row) {
    echo $row['Nom']." ";
    echo $row['Prenom']."<br>";
}
?>
