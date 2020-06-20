<?php

include 'db/dbconnection.php';

$query = "SELECT * FROM routine ORDER by RAND() LIMIT 1";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0){
  //output data of each row
  while($row = mysqli_fetch_assoc($result)){
    echo "<p>" . $row["routine_text"]. "</p>";
  
  }
} else {
  echo "0 results";
}

/* close connection */
include 'db/dbclose.php';
?>