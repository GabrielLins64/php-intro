<?php
  $conn = pg_connect ("host=localhost dbname=testdb user=gabriel password=senha123");
  if ($conn) {
    echo "Connected!\n";
  } else {
    echo "There has been an error connecting!\n";
  }
?>