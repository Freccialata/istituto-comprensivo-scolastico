<?php

$conn = pg_connect("host=localhost port=5433 dbname=istituto user=postgres password=unimi");
 if (!$conn) {  

echo "Connection to DB failed"; 

 exit; }
?>