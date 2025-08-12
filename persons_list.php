<?php
$user = "golg0fa";
$password = "Elbrus_1902#";
$database = "phpST";
$table = "Persons";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

  echo "<h2>PERSONS</h2>";
  echo "<table>";
  echo " <tr>
          <td>Id</td>
          <td>Last name</td>
          <td>First name</td>
        </tr>";
  foreach($db->query("SELECT * FROM $table") as $row) {
    echo "<tr>";
    echo  "<td>" . $row['PersonID'] . "</td>";
    echo  "<td>" . $row['LastName'] . "</td>";
    echo  "<td>" . $row['FirstName'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}