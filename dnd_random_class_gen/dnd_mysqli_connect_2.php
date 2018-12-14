<?php

DEFINE ("DB_HOST", "localhost");
DEFINE ("DB_USER", "root");
DEFINE ("DB_PASS","pass");
DEFINE ("DB_NAME", "dnd_classes");

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    OR die("Could not connect to MySQL. :(".
    mysqli_connect_error());

?>
